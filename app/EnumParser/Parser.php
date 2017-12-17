<?php
namespace App\EnumParser;

use Illuminate\Support\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Model;

abstract class Parser
{
    protected $rules;
    protected $parseRelations;

    public function __construct($data=null, $translate=true)
    {
        $this->data = $data;
        $this->translate = $translate;
    }

    public function parse()
    {
        if ($this->data instanceof Model) {
            return $this->parseIt($this->data);
        } else if ($this->data instanceof EloquentCollection) {
            $data = $this->data->transform(function ($model, $key) {
                $this->parseIt($model);
                return $model;
            });
            return $data;
        } else if ($this->data instanceof LengthAwarePaginator) {
            return $this->data->setCollection($data);
        }
    }

    public function parseIt($model)
    {
        // We dont want to mutate the actual object
        // betteer replicate for immutable data 
        // Here enumparser shines 
        // because mutator actually mutates the object :)
        $immutable = clone $model;
        $attributes = $immutable->getAttributes();
        // Parse the attributes for enum results
        foreach ($attributes as $key => $attribute) {
            if (array_key_exists($key, $this->rules)) {
                $enums = $this->getEnumCollectionFromClass($this->rules[$key]);
                if( $this->translate ){
                    $this->translate($immutable, $enums, $attribute, $key);
                } else {
                    $immutable->setAttribute($key, $enums->get($attribute));
                }
            }
        }
        // Parse the relations for enum results
        foreach ($this->parseRelations as $key => $class) {
            // If the model relation is not loaded,
            // we will not try to parse the relation
            try {
                $immutable->getRelation($key);
                $data = $immutable->getRelation($key);

                if ($data instanceof Collection) {
                    $parsedData = collect([]);
                    $data->each(function ($data) use ($class, $immutable, $key, $parsedData)
                    {
                        $parser = new $class($data);
                        $parsedData->push($parser->parse());
                    });
                } else{
                    $parser = new $class($data);
                    $parsedData = $parser->parse();
                }
                $immutable->setRelation($key, $parsedData);
            } catch (\Exception $e) {
                
            }
        }

        return $immutable;
    }

    public function translate(&$data, $enums, $attribute, $key) 
    {
        $translation = trans('enum.'.$attribute);

        if ($translation === 'enum.'.$attribute) {
            $data->setAttribute($key, $enums->get($attribute));
        } else {
            $data->setAttribute($key, $translation);
        }
    }

    protected function getEnumCollectionFromClass($class)
    {
        $enums = $class::getCollection();
        return $enums;
    }
}   
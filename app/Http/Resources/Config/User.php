<?php

namespace App\Http\Resources\Config;

use Illuminate\Http\Resources\Json\Resource;
use App\EnumParser\ProfileParser;

class User extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $profile = $this->resource;
        
        return [
            'name' => $profile->name,
            'experience_level' => config('enum.experience_level.'.$profile->experience_level),
            'status' => config('enum.status.'.$profile->status),
            'working_type' => config('enum.working_type.'.$profile->working_type)
        ];
    }
}

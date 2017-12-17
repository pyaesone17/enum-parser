<?php

namespace App\Http\Resources\Object;

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
        $parsedProfile = (new ProfileParser($profile))->parse();

        return $parsedProfile;
    }
}

<?php

namespace App\Http\Resources\Arrays;

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

        $experience_level = [
            'INTERN' => 'Intern Level', 
            'SENIOR' => 'Senior Level', 
            'JUNIOR' => 'Junior Level', 
            'MID' => 'Mid Level'
        ];

        $working_type = [
            'FREELANCE' => 'Freelance Developer', 
            'FULLTIME' => 'Fulltime Developer', 
            'REMOTE' => 'Remote Developer'
        ];

        $status = [
            'AVAILABLE' => 'Actively looking for a new job', 
            'NOT_AVAILABLE' => 'Not interested to find jobs', 
            'NEW_JOB' => 'Currently have a job but looking for new job'
        ];

        return [
            'name' => $profile->name,
            'experience_level' => $experience_level[$profile->experience_level],
            'status' =>  $status[$profile->status],
            'working_type' => $working_type[$profile->working_type]
        ];
    }
}

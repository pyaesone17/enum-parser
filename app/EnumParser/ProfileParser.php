<?php
namespace App\EnumParser;

use Illuminate\Support\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Enums\ExperienceLevel;
use App\Enums\WorkingType;
use App\Enums\Status;
use App\Enums\EducationLevel;

class ProfileParser extends Parser
{
    //colum name , value enum object
    protected $rules = [
        'experience_level' => ExperienceLevel::class,
        'education_level' => EducationLevel::class,
        'working_type' => WorkingType::class,
        'status' => Status::class
    ];

    //column nam e relation, value parser
    protected $parseRelations = [
        'identity' => IdentityParser::class
    ];
}   
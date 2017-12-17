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
    protected $rules = [
        'experience_level' => ExperienceLevel::class,
        'education_level' => EducationLevel::class,
        'working_type' => WorkingType::class,
        'status' => Status::class
    ];

    protected $parseRelations = [
        'identity' => IdentityParser::class
    ];
}   
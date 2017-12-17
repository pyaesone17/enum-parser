<?php
namespace App\EnumParser;

use Illuminate\Support\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Enums\IdentityType;

class IdentityParser extends Parser
{
    protected $rules = [
        'type' => IdentityType::class
    ];

    protected $parseRelations = [];
}   
<?php
namespace App\Enums;

class Status extends Enum
{
    const AVAILABLE = 'Actively looking for a new job';
    const NOT_AVAILABLE = 'Not interested to find jobs';
    const NEW_JOB = 'Currently have a job but looking for new job';
}

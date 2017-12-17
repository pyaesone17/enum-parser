<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Rules\ExperienceLevelValidation;
use Validator;

class EnumValidationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_validation_should_fail()
    {
        $validator = Validator::make(['experience_level' => 'BLAHBLAH'], [
            'experience_level' => new ExperienceLevelValidation
        ]);

        $this->assertTrue($validator->fails());
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_validation_should_pass()
    {
        $validator = Validator::make(['experience_level' => 'MID'], [
            'experience_level' => new ExperienceLevelValidation
        ]);

        $this->assertTrue($validator->passes());
    }
}

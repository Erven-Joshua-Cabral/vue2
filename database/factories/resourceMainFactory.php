<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\resourceMain>
 */
class resourceMainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'nickname' => fake()->name,
            'katakana_name' => fake()->name,
            'resume' => fake()->name,
            'date_hired' => fake()->date,
            'rate' => fake()->numberBetween(1, 50000),
            'ibm_rate' => fake()->numberBetween(1, 50000),
            'ubicom_rate' => fake()->numberBetween(1, 50000),
            'po_Until' => fake()->dateTime,
            'action_batch' => fake()->word,
            'yoe(pre-aws)' => fake()->numberBetween(0, 10),
            'yoe' => fake()->numberBetween(0, 10),
            'tech_certification' => fake()->word,
            'core_skills' => fake()->word,
            'sub_skill5' => fake()->word,
            'sub_skill4' => fake()->word,
            'sub_skill3' => fake()->word,
            'sub_skill2' => fake()->word,
            'sub_skill1' => fake()->word,
            'nihongo' => fake()->word,
            'position' => fake()->word,
            'bu_off' => fake()->word,
            'bu_ass' => fake()->word,
            'project' => fake()->word,
            'current_assignment' => fake()->word,
            'candidate_for' => fake()->word,
            'loc' => fake()->word,
            'email' => fake()->email,
            'main_Skill' => fake()->word,
            'sub_Skill' => fake()->word,
            'focus_Skill' => fake()->word,
            'location1' => fake()->word,
            'location2' => fake()->word,
            'contact#' => fake()->phoneNumber,
            'passport_Expiration' => fake()->date,
            'remarks' => fake()->word,
        ];
    }
}

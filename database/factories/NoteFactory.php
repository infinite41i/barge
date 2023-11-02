<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\PseudoTypes\True_;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Note::class;

    public function definition()
    {
        return [
            'title' => $this->faker->words(3, True),
            'contents' => $this->faker->paragraph(3,True),
            'notebook_id' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}

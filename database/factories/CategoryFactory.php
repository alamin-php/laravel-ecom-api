<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->sentence(2,3);
        $status=['active', 'inactive'];
        return [
           'name' => $name,
           'slug' => Str::of($name)->slug('-'),
           'status'=>$status[rand(0,1)],
           'thumbnail'=>'https://picsum.photos/300',
        ];
    }
}

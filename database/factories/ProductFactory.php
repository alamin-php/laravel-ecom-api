<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->sentence(rand(5,10));
        $status=['active', 'inactive'];
        return [
           'name' => $name,
           'slug' => Str::of($name)->slug('-'),
           'qty'=>fake()->numberBetween(1,10),
           'price'=>fake()->numberBetween(500,3500),
           'status'=>$status[rand(0,1)],
           'thumbnail'=>'https://picsum.photos/300',
           'category_id'=>Category::all()->random()->id,
        ];
    }

}

<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\house>
 */
class houseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $house_name =$this->faker->unique()->words($nb=6,$asText=true);
        $slug = Str::slug( $house_name, '-');
        $image ='jpg|';
        $path ='6eb39606-9a8f-11ed-ba8e-fc45965c68a0';
        return [
           'name'=> $house_name,
           'slug'=> $slug,
           'short_description'=> $this->faker->text(200),
           'description'=> $this->faker->text(100),
           'location'=> $this->faker->text(100),
           'path'=>$path,
           'SKU'=>'PRD'. $this->faker->unique()->numberBetween(100,500),
           'quantity'=> $this->faker->numberBetween(10,50),
           'price'=> $this->faker->numberBetween(100,5000),
           'promotion_price'=> $this->faker->numberBetween(50,2500),
           'rooms'=> $this->faker->numberBetween(1,18),
           'suit'=> $this->faker->numberBetween(1,18),
           'kitchen'=> $this->faker->numberBetween(1,18),
           'living_room'=> $this->faker->numberBetween(1,18),
           'wc'=> $this->faker->numberBetween(1,18),
           'garage'=> $this->faker->numberBetween(1,18),
           'category_id'=>$this->faker->numberBetween(1,5),
           'visit_times'=>$this->faker->date('2000-05-07'),
           'images'=>$image,
        ];
    }
}

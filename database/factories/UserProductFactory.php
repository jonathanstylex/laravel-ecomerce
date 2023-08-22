<?php

namespace Database\Factories;

use App\Models\UserProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserProduct>
 */
class UserProductFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserProduct::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'user_id' => 1,
           'product_id' => 1
           // 'user_id' => $this->faker->unique()->numberBetween(1,1),
           // 'product_id' => $this->faker->unique()->numberBetween(1,1)
         // 'client_company_name' => $this->faker->company(),
         // 'client_phone' => $this->faker->phoneNumber(),
         // 'client_email' => $this->faker->companyEmail(),
         // 'client_address' => $this->faker->address(),
         // 'project_name' => $this->faker->jobTitle(),
       ];
   }
}

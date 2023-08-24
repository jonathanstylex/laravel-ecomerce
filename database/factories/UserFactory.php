<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $password = password_hash('Test1234',PASSWORD_BCRYPT);

        $email = 'elissa@gmail.com';

        return [
            'name' => fake()->name(),
            // 'email' => fake()->unique()->safeEmail(),
            'email' => $email,
            'email_verified_at' => now(),
            // 'email_verified_at' => date('y-m-d'),
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'password' => $password, 
            'remember_token' => Str::random(10),
            'role_id' => 1,
            'is_buyer' => 1,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

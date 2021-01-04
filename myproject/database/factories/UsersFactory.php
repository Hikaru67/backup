<?php

namespace Database\Factories;

use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UsersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Users::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullName' => $this->faker->name,
            'birthday' => strtotime($this->faker->date('Y-m-d', 'now')),
            'email' => $this->faker->unique()->safeEmail,
            'phoneNumber' => $this->faker->unique()->e164PhoneNumber(12),
            'job' => $this->faker->jobTitle(50),
            'avatar' => $this->faker->imageUrl(),
            'facebook' => $this->faker->unique()->url(90),
            'gender' => rand(1,3),
            'country' => $this->faker->country,
//            'role' => (rand(0,1))?'admin':'user_course',
            'role' => 'user_course',
            'status' => rand(1,2),
        ];
    }
}

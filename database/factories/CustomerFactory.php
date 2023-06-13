<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    /**
     * @throws \Exception
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'mobile' => $this->faker->phoneNumber,
            'source' => array_rand(['facebook', 'instagram', 'friendship']),
            'count_of_visits' => random_int(1,10),
            'last_visit' => Carbon::now(),
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

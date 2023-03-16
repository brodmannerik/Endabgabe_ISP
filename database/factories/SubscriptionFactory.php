<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'stripe_status'	=> 'successful',
            'stripe_price'	=> '€10.00EUR',
            'created_at'	=> now(),
            'updated_at'	=> now(),
        ];
    }
}

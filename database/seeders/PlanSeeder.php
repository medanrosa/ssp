<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    public function run()
    {
        $plans = [
            [
                'name' => 'Business Plan',
                'slug' => 'business-plan',
                'stripe_plan' => 'price_1PICDTCm3zQKb9VhaX0op5kw',
                'price' => 10,
                'description' => 'Business Plan'
            ],
            [
                'name' => 'Premium',
                'slug' => 'premium',
                'stripe_plan' => 'price_1PICDTCm3zQKb9VhaX0op5kw',
                'price' => 20,
                'description' => 'Premium'
            ]
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}

<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $customer = Customer::all()->random();
        $customerFactory = new \stdClass();
        $customerFactory->id = $customer->id;
        $customerFactory->name = $customer->name;

        $products = Products::all()->random();
        $productsFactory = new \stdClass();
        $productsFactory->id = $products->id;
        $productsFactory->amount = $products->amount;
        $productsFactory->price = $products->price;
        $productsFactory->is_over = $products->is_over;

        $quantity = $this->faker->numberBetween(1, 10);

        if ($productsFactory->is_over || $productsFactory->amount < $quantity) {
            $quantity = 0;
            $productsFactory->id = $products->id;
            $productsFactory->amount = 0;
            $productsFactory->price = 0;
            $productsFactory->is_over = $products->is_over;
        }

        return [
            'customer' => $customerFactory,
            'products' => $productsFactory,
            'quantity' => $quantity,
            'over_all' => $productsFactory->price,
        ];
    }
}
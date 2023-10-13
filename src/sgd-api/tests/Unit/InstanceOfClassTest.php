<?php

namespace Tests\Unit;

use Tests\TestCase;

class CreateInstanceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_HasCreateInstanceOfCustomer()
    {
        $customer = \App\Models\Customer::factory()->create();
        $this->assertInstanceOf(\App\Models\Customer::class, $customer);
        $customer = \App\Models\Customer::find($customer->id);
        $customer->delete();
    }

    public function test_HasCreateInstanceOfUser()
    {
        $user = \App\Models\User::factory()->create();
        $this->assertInstanceOf(\App\Models\User::class, $user);
        $user = \App\Models\User::find($user->id);
        $user->delete();
    }

    public function test_HasCreateInstanceOfProducts()
    {
        $products = \App\Models\Products::factory()->create();
        $this->assertInstanceOf(\App\Models\Products::class, $products);
        $products = \App\Models\Products::find($products->id);
        $products->delete();
    }

    public function test_HasCreateInstanceOfOrderRequest()
    {
        $orderRequest = \App\Models\OrderRequest::factory()->create();
        $this->assertInstanceOf(\App\Models\OrderRequest::class, $orderRequest);
        $orderRequest = \App\Models\OrderRequest::find($orderRequest->id);
        $orderRequest->delete();
    }
}
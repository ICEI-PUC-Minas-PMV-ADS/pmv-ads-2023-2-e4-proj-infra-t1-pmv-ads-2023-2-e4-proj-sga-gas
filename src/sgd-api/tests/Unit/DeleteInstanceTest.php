<?php

namespace Tests\Unit;

use Tests\TestCase;

class DeleteInstanceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_HasDeleteInstanceOfCustomer()
    {
        $customer = \App\Models\Customer::factory()->create();
        $this->assertInstanceOf(\App\Models\Customer::class, $customer);
        $customer = \App\Models\Customer::find($customer->id);
        $delete = $customer->delete();
        $this->assertIsBool($delete);
    }

    public function test_HasDeleteInstanceOfUser()
    {
        $user = \App\Models\User::factory()->create();
        $this->assertInstanceOf(\App\Models\User::class, $user);
        $user = \App\Models\User::find($user->id);
        $delete = $user->delete();
        $this->assertIsBool($delete);
    }

    public function test_HasDeleteInstanceOfProducts()
    {
        $products = \App\Models\Products::factory()->create();
        $this->assertInstanceOf(\App\Models\Products::class, $products);
        $products = \App\Models\Products::find($products->id);
        $delete = $products->delete();
        $this->assertIsBool($delete);
    }

    public function test_HasDeleteInstanceOfOrderRequest()
    {
        $orderRequest = \App\Models\OrderRequest::factory()->create();
        $this->assertInstanceOf(\App\Models\OrderRequest::class, $orderRequest);
        $orderRequest = \App\Models\OrderRequest::find($orderRequest->id);
        $delete = $orderRequest->delete();
        $this->assertIsBool($delete);
    }
}
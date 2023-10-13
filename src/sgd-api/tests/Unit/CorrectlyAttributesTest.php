<?php

namespace Tests\Unit;

use Tests\TestCase;

class CorrectlyAttributesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_HasCorrectlyAttributesCustomer()
    {
        $customer = \App\Models\Customer::factory()->create();
        $this->assertIsString($customer->name);
        $this->assertIsString($customer->email);
        $this->assertIsObject($customer->email_verified_at);
        $this->assertIsString($customer->date_of_birth);
        $this->assertIsString($customer->fix_phone);
        $this->assertIsString($customer->cel_phone);
        $customer = \App\Models\Customer::find($customer->id);
        $customer->delete();
    }

    public function test_HasCorrectlyAttributesUser()
    {
        $user = \App\Models\User::factory()->create();
        $this->assertIsString($user->name);
        $this->assertIsString($user->email);
        $this->assertIsObject($user->email_verified_at);
        $this->assertIsString($user->date_of_birth);
        $this->assertIsString($user->fix_phone);
        $this->assertIsString($user->cel_phone);
        $user = \App\Models\User::find($user->id);
        $user->delete();
    }

    public function test_HasCorrectlyAttributesProducts()
    {
        $products = \App\Models\Products::factory()->create();
        $this->assertIsString($products->name);
        $this->assertIsInt($products->amount);
        $this->assertIsNumeric($products->price);
        $this->assertIsBool((bool) $products->is_over);
        $products = \App\Models\Products::find($products->id);
        $products->delete();
    }

    public function test_HasCorrectlyAttributesOrderRequest()
    {
        $orderRequest = \App\Models\OrderRequest::factory()->create();
        $this->assertIsNotArray($orderRequest->customer);
        $this->assertIsNotArray($orderRequest->products);
        $this->assertIsInt($orderRequest->quantity);
        $this->assertIsInt($orderRequest->over_all);
        $orderRequest = \App\Models\OrderRequest::find($orderRequest->id);
        $orderRequest->delete();
    }
}
<?php

namespace Tests\Unit;

use Tests\TestCase;

class UpdateInstanceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_HasUpdateInstanceOfCustomer()
    {
        $customer = \App\Models\Customer::factory()->create();
        $this->assertInstanceOf(\App\Models\Customer::class, $customer);
        $updated = $customer->update([
            'name' => 'TestesAutomatizadosCustomer',
            'email' => 'TestesAutomatizadosCustomer@email.example.com',
            'fix_phone' => '553198765468',
            'cel_phone' => '553198765468',
            'date_of_birth' => '2003-04-28'
        ]);
        $this->assertIsBool($updated);
        $customer = \App\Models\Customer::find($customer->id);
        $customer->delete();
    }

    public function test_HasUpdateInstanceOfUser()
    {
        $user = \App\Models\User::factory()->create();
        $this->assertInstanceOf(\App\Models\User::class, $user);
        $updated = $user->update([
            'name' => 'TestesAutomatizadosUser',
            'email' => 'TestesAutomatizadosUser@email.example.com',
            'fix_phone' => '553198765468',
            'cel_phone' => '553198765468',
            'date_of_birth' => '2003-04-28'
        ]);
        $this->assertIsBool($updated);
        $user = \App\Models\User::find($user->id);
        $user->delete();
    }

    public function test_HasUpdateInstanceOfProducts()
    {
        $products = \App\Models\Products::factory()->create();
        $updated = $products->update([
            'name' => 'ProdutoTesteAutomatizados',
            'amount' => 10,
            'price' => 120000,
            'is_over' => false
        ]);
        $this->assertIsBool($updated);
        $this->assertInstanceOf(\App\Models\Products::class, $products);
        $products = \App\Models\Products::find($products->id);
        $products->delete();
    }

    public function test_HasUpdateInstanceOfOrderRequest()
    {

        $customer = \App\Models\Customer::all()->random();
        $customerFactory = new \stdClass();
        $customerFactory->id = $customer->id;
        $customerFactory->name = $customer->name;

        $products = \App\Models\Products::all()->random();
        $productsFactory = new \stdClass();
        $productsFactory->id = $products->id;
        $productsFactory->amount = $products->amount;
        $productsFactory->price = $products->price;
        $productsFactory->is_over = $products->is_over;

        $quantity = 10;

        if ($productsFactory->is_over || $productsFactory->amount < $quantity) {
            $quantity = 0;
            $productsFactory->id = $products->id;
            $productsFactory->amount = 0;
            $productsFactory->price = 0;
            $productsFactory->is_over = $products->is_over;
        }

        $orderRequest = \App\Models\OrderRequest::factory()->create();
        $this->assertInstanceOf(\App\Models\OrderRequest::class, $orderRequest);
        $updated = $orderRequest->update([
            'customer' => $customerFactory,
            'products' => $productsFactory,
            'quantity' => $quantity,
            'over_all' => $productsFactory->price,
        ]);
        $this->assertIsBool($updated);
        $orderRequest = \App\Models\OrderRequest::find($orderRequest->id);
        $orderRequest->delete();
    }
}
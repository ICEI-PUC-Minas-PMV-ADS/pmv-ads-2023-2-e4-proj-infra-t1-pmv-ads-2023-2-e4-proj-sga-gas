<?php
namespace App\Http\Traits;

use App\Models\Customer;
use App\Models\Products;

trait ValidateExists
{
    public function validateCustomerAndProducts($validator)
    {
        $verifyExistsCustomer = Customer::where('_id', $validator['customer']['id'])->first();
        $verifyExistsProduct = Products::where('_id', $validator['products']['id'])->first();

        if (empty($verifyExistsCustomer) && empty($verifyExistsProduct)) {
            $error = [
                'customer.id' => 'customer.id não encontrado!',
                'products.id' => 'products.id não encontrado!'
            ];
            return $error;
        }

        if (empty($verifyExistsCustomer) || empty($verifyExistsProduct)) {
            $index = empty($verifyExistsCustomer->id) ? 'customer.id' : 'products.id';
            $dataError = empty($verifyExistsCustomer->id) ? 'customer.id não encontrado.' : 'products.id não encontrado.';
            $error = [
                $index => $dataError
            ];
            return $error;
        }

        $customerFactory = new \stdClass();
        $customerFactory->id = $verifyExistsCustomer->id;
        $customerFactory->name = $verifyExistsCustomer->name;

        $productsFactory = new \stdClass();
        $productsFactory->id = $verifyExistsProduct->id;
        $productsFactory->name = $verifyExistsProduct->name;
        $productsFactory->amount = $verifyExistsProduct->amount;
        $productsFactory->price = $verifyExistsProduct->price;
        $productsFactory->is_over = $verifyExistsProduct->is_over;


        if ($productsFactory->is_over || $productsFactory->amount < $validator['quantity']) {
            $productsFactory->amount = 0;
            $productsFactory->price = 0;
        }

        return [
            'data' => [
                'customer' => $customerFactory,
                'products' => $productsFactory,
                'over_all' => $productsFactory->price * $validator['quantity'],
            ]
        ];

    }

}

?>
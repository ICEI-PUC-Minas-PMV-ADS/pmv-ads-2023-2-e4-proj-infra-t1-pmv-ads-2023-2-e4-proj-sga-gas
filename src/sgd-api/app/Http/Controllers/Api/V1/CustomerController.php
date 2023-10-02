<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\CustomerResource;
use App\Http\Traits\HttpResponses;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *    title="APIs sgd",
 *    version="1.0.0",
 * ),
 *   @OA\SecurityScheme(
 *       securityScheme="bearerAuth",
 *       in="header",
 *       name="bearerAuth",
 *       type="http",
 *       scheme="bearer",
 *       bearerFormat="JWT",
 *    ),
 */

class OpenApi
{
}

class CustomerController extends \Illuminate\Routing\Controller
{
    use HttpResponses;
    /**
     * @OA\Get(
     *   path="/products",
     *   summary="list products",
     *   @OA\Response(
     *     response=200,
     *     description="A list with products"
     *   ),
     *   @OA\Response(
     *     response="default",
     *     description="an ""unexpected"" error"
     *   )
     * )
     */

    public function index()
    {
        return CustomerResource::collection(Customer::all());
    }


    /**
     * @OA\Get(
     *   path="/products",
     *   summary="list products",
     *   @OA\Response(
     *     response=200,
     *     description="A list with products"
     *   ),
     *   @OA\Response(
     *     response="default",
     *     description="an ""unexpected"" error"
     *   )
     * )
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'fix_phone' => 'required|numeric',
            'cel_phone' => 'required|numeric',
            'date_of_birth' => 'required|date_format:Y-m-d',
            'password' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $this->error('Data invalid.', 422, $validator->errors());
        }

        $emailVerifyExists = Customer::where('email', $validator->validated()['email'])->first();
        if (!is_null($emailVerifyExists)) {
            $error = [
                'email' => 'e-mail ja registrado!'
            ];

            return $this->error('Customer not created.', 422, $error);
        }
        $created = Customer::create($validator->validated());
        if (!$created) {
            return $this->error('Customer not created.', 400);
        }

        return $this->response('Customer created.', 200, $created);

    }

    /**
     * @OA\Get(
     *     path="/api/resource.json",
     *     @OA\Response(response="200", description="An example resource")
     * )
     */
    public function show($id)
    {
        return new CustomerResource(Customer::where('_id', $id)->first());
    }

    /**
     * @OA\Get(
     *     path="/api/resource.json",
     *     @OA\Response(response="200", description="An example resource")
     * )
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'fix_phone' => 'required|numeric',
            'cel_phone' => 'required|numeric',
            'date_of_birth' => 'required|date_format:Y-m-d',
            'password' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return $this->error('Data invalid.', 422, $validator->errors());
        }

        $emailVerifyExists = Customer::where('email', $validator->validated()['email'])->first();

        if (!is_null($emailVerifyExists) && $id != $emailVerifyExists->id) {
            $error = [
                'email' => 'e-mail ja registrado em outro customer!'
            ];

            return $this->error('Customer not updated.', 422, $error);
        }

        $customer = Customer::find($id);

        if (empty($customer)) {
            return $this->error('Customer not found.', 400);
        }

        $updated = $customer->update(
            $validator->validated()
        );

        if (!$updated) {
            return $this->error('Customer not updated.', 400);
        }

        return $this->response('Customer updated.', 200, $customer);
    }

    /**
     * @OA\Get(
     *     path="/api/resource.json",
     *     @OA\Response(response="200", description="An example resource")
     * )
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        if (empty($customer)) {
            return $this->error('Customer not found.', 400);
        }

        $deleted = $customer->delete();

        if (!$deleted) {
            return $this->error('Customer not deleted.', 400);
        }

        return $this->response('Customer deleted.', 200, $customer);
    }
}
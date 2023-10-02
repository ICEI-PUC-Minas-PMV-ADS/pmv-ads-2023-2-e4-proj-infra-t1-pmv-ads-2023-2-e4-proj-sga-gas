<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\OrderRequestResource;
use App\Http\Traits\HttpResponses;
use App\Http\Traits\ValidateExists;
use App\Models\OrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *    title="APIs For Thrift Store",
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

class OrderRequestController extends \Illuminate\Routing\Controller
{
    use HttpResponses, ValidateExists;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrderRequestResource::collection(OrderRequest::all());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'customer' => 'required|array:id',
            'products' => 'required|array:id',
            'quantity' => 'required|numeric'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return $this->error('Data invalid.', 422, $validator->errors());
        }

        $verifyCustomerAndProduct = $this->validateCustomerAndProducts(
            $validator->validated()
        );

        $data = $validator->validated();

        if (!empty($verifyCustomerAndProduct['data'])) {
            unset($data["customer"]);
            unset($data["products"]);
            $merge = array_merge($data, $verifyCustomerAndProduct['data']);
            $created = OrderRequest::create($merge);
            if (!$created) {
                return $this->error('OrderRequest not created.', 400);
            }
            return $this->response('OrderRequest created.', 200, $created);
        }

        return $this->error('Data invalid.', 422, $verifyCustomerAndProduct);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new OrderRequestResource(OrderRequest::where('_id', $id)->first());
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'customer' => 'required|array:id',
            'products' => 'required|array:id',
            'quantity' => 'required|numeric'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return $this->error('Data invalid.', 422, $validator->errors());
        }

        $verifyCustomerAndProduct = $this->validateCustomerAndProducts(
            $validator->validated()
        );

        $data = $validator->validated();

        if (!empty($verifyCustomerAndProduct['data'])) {
            unset($data["customer"]);
            unset($data["products"]);
            $merge = array_merge($data, $verifyCustomerAndProduct['data']);

            $orderRequest = OrderRequest::find($id);

            if (empty($orderRequest)) {
                return $this->error('OrderRequest not found.', 400);
            }

            $updated = $orderRequest->update(
                $merge
            );

            if (!$updated) {
                return $this->error('OrderRequest not updated.', 400);
            }
            return $this->response('OrderRequest updated.', 200, $orderRequest);
        }

        return $this->error('Data invalid.', 422, $verifyCustomerAndProduct);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orderRequest = OrderRequest::find($id);

        if (empty($orderRequest)) {
            return $this->error('OrderRequest not found.', 400);
        }

        $deleted = $orderRequest->delete();

        if (!$deleted) {
            return $this->error('OrderRequest not deleted.', 400);
        }

        return $this->response('OrderRequest deleted.', 200, $orderRequest);
    }
}
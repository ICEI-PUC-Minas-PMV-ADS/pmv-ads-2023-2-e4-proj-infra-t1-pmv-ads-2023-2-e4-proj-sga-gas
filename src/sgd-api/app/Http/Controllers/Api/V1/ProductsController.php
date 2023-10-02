<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\ProductsResource;
use App\Http\Traits\HttpResponses;
use App\Models\Products;
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

class ProductsController extends \Illuminate\Routing\Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProductsResource::collection(Products::all());
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
            'name' => 'required|max:255',
            'amount' => 'required|numeric',
            'price' => 'required|numeric',
            'is_over' => 'required|boolean'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return $this->error('Data invalid.', 422, $validator->errors());
        }

        $created = Products::create($validator->validated());

        if (!$created) {
            return $this->error('Product not created.', 400);
        }

        return $this->response('Product created.', 200, $created);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Products::where('_id', $id)->first();
        if (!empty($products)) {
            return new ProductsResource($products);
        }
        return $this->error('Products not found.', 400);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|max:255',
            'amount' => 'required|numeric',
            'price' => 'required|numeric',
            'is_over' => 'required|boolean'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return $this->error('Data invalid.', 422, $validator->errors());
        }

        $products = Products::find($id);

        if (empty($products)) {
            return $this->error('Products not found.', 400);
        }

        $updated = $products->update(
            $validator->validated()
        );

        if (!$updated) {
            return $this->error('Products not updated.', 400);
        }

        return $this->response('Products updated.', 200, $products);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Products::find($id);

        if (empty($products)) {
            return $this->error('Products not found.', 400);
        }

        $deleted = $products->delete();

        if (!$deleted) {
            return $this->error('Products not deleted.', 400);
        }

        return $this->response('Products deleted.', 200, $products);
    }
}
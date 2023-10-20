<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderReqRequest;
use App\Http\Resources\V1\OrderRequestResource;
use App\Http\Traits\ValidateExists;
use App\Models\Customer;
use App\Models\OrderRequest;
use App\Models\Products;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class OrderRequestController extends Controller
{
    use ValidateExists;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = json_encode(OrderRequestResource::collection(OrderRequest::all()));
        return view('orderRequest.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = new \stdClass;

        $customer = new \stdClass;
        foreach (Customer::all()->toArray() as $key => $customerValue) {
            $customerName = (string) $customerValue['name'];
            $customerId = (string) $customerValue['_id'];
            $customer->$customerId = $customerName;
        }

        $products = new \stdClass;
        foreach (Products::all()->toArray() as $key => $productsValue) {
            $productsName = (string) $productsValue['name'];
            $productsId = (string) $productsValue['_id'];
            $products->$productsId = $productsName;
        }

        $data->products = $products;
        $data->customer = $customer;
        $data = json_encode($data, true);
        return view('orderRequest.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderReqRequest $request)
    {
        $data = $request->validated();
        $verifyCustomerAndProduct = $this->validateCustomerAndProducts(
            $request->validated()
        );

        if (!empty($verifyCustomerAndProduct['data'])) {
            unset($data["customer"]);
            unset($data["products"]);
            $merge = array_merge($data, $verifyCustomerAndProduct['data']);
            OrderRequest::create($merge);
            return redirect()->back()->withSuccess('Pedido de compra registrado com Sucesso!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        OrderRequest::destroy($id);
        return redirect()->back()->withSuccess('Pedido de compra excluído com Sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = OrderRequest::where('_id', $id)->first();
        return view('orderRequest.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrderReqRequest $request, $id)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        OrderRequest::where('_id', $id)->update($data);
        return redirect()->back()->withSuccess('Pedido de compra atualizado com Sucesso!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
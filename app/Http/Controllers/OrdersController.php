<?php

namespace App\Http\Controllers;

use App\Models\orders;
use App\Http\Requests\StoreordersRequest;
use App\Http\Requests\UpdateordersRequest;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $orders =Orders::all();
        return $orders;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreordersRequest $request)
    {
        // $function ->column_name = $request->param_name;

        $orders = new Orders;
        $orders->user_id = $request->user_id;
        $orders->order_type = $request->order_type;
        $orders->order_status = $request->order_status;
        $orders->order_total = $request->order_total;

        $orders->save();
        return $orders;
    }

    /**
     * Display the specified resource.
     */
    public function show(orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateordersRequest $request, orders $orders)
    {

        $Menu = Orders::find($request->id);

        $orders->user_id = $request->user_id;
        $orders->order_type = $request->order_type;
        $orders->order_status = $request->order_status;
        $orders->order_total = $request->order_total;

        $orders->save();
        return $orders;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(orders $orders)
    {
        //
    }
}

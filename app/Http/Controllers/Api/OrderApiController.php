<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Response;
use Exception;
use Illuminate\Http\Request;

class OrderApiController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return OrderResource::collection($orders);
    }

    // public function store(StoreOrderRequest $request)
    // {
    //     $validatedData = $request->validated();
    //     $order = Order::create($validatedData);
    //     return new OrderResource($order);
    // }
    public function store(Request $request)
    {
        // Perbaiki validasi
        $request->validate([
            'transaction_time' => 'required|date',
            'total_price' => 'required|numeric',
            'total_item' => 'required|numeric',
            'kasir_id' => 'required|exists:users,id',
            'payment_method' => 'required|in:Tunai,QRIS',
            'order_items' => 'required|array',
            'order_items.*.product_id' => 'required|exists:products,id', // Typo diperbaiki
            'order_items.*.quantity' => 'required|numeric',
            'order_items.*.total_price' => 'required|numeric',
        ]);

        // Buat order
        $order = Order::create([
            'transaction_time' => $request->transaction_time,
            'total_price' => $request->total_price,
            'total_item' => $request->total_item,
            'kasir_id' => $request->kasir_id,
            'payment_method' => $request->payment_method,
        ]);

        // Perbaiki penamaan $request->order_items
        foreach ($request->order_items as $item) { // Ganti dari order_item ke order_items
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'total_price' => $item['total_price'],
            ]);
        }

        // Response success
        return response()->json([
            'success' => true,
            'message' => 'Order Created',
        ], 201);
    }


    public function show(Order $orderApi)
    {
        return new OrderResource($orderApi);
    }

    public function update(UpdateOrderRequest $request, Order $orderApi)
    {
        $validatedData = $request->validated();
        $orderApi->update($validatedData);
        return new OrderResource($orderApi);
    }

    public function destroy(Order $orderApi)
    {
        try {

            $orderApi->delete();
            return response()->json([
                'message' => 'Order Deleted Successfully'
            ], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Deleting Failed',
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

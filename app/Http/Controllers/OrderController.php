<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Показать список заявок
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->orderBy('date', 'desc')->get();
        return view('users.dashboard', compact('orders'));
    }

    // Страница создания
    public function create()
    {
        return view('users.order');
    }

    // Сохранение заявки
    public function store(Request $request)
    {
        Order::create([
            'user_id' => Auth::id(),
            'address' => $request->address,
            'phone' => $request->phone,
            'date' => $request->date,
            'service_type' => $request->service_type,
            'service_description' => $request->service_description,
            'payment_type' => $request->payment_type,
            'status' => 'new',
        ]);

        return redirect()->route('users.dashboard')->with('success', 'Заявка создана!');
    }
}

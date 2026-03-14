<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    private function checkAdmin()
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            abort(403, 'Доступ запрещён');
        }
    }

    public function orders()
    {
        $this->checkAdmin();
        $orders = Order::with('user')->orderBy('created_at', 'desc')->get();
        return view('admin.orders', compact('orders'));
    }

    public function updateStatus(Request $request, $id)
    {
        $this->checkAdmin();
        $order = Order::find($id);
        if ($order) {
            $order->status = $request->status;
            $order->save();
        }
        return redirect()->route('admin.orders')->with('success', 'Статус обновлён!');
    }
}

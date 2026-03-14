@extends('theme')
@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Мои заявки</h2>
            <a href="{{ route('users.order.create') }}" class="btn btn-primary">Создать заявку</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead class="table-dark">
            <tr>
                <th>№</th>
                <th>Дата</th>
                <th>Адрес</th>
                <th>Услуга</th>
                <th>Статус</th>
                <th>Оплата</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ date('d.m.Y H:i', strtotime($order->date)) }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->service_type }}</td>
                    <td>
                        @if($order->status == 'new')
                            <span class="badge bg-primary">Новая</span>
                        @elseif($order->status == 'in_progress')
                            <span class="badge bg-warning text-dark">В работе</span>
                        @elseif($order->status == 'completed')
                            <span class="badge bg-success">Выполнено</span>
                        @elseif($order->status == 'cancelled')
                            <span class="badge bg-danger">Отклонено</span>
                        @endif
                    </td>
                    <td>{{ $order->payment_type == 'cash' ? 'Наличные' : 'Карта' }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

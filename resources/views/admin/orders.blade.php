@extends('theme')
@section('content')
    <div class="container-fluid">
        <h3 class="mb-3">Все заявки</h3>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Заказчик</th>
                    <th>Телефон</th>
                    <th>Адрес</th>
                    <th>Услуга</th>
                    <th>Дата</th>
                    <th>Статус</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user->name ?? 'Нет имени' }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->service_type }}</td>
                        <td>{{ date('d.m.Y H:i', strtotime($order->date)) }}</td>
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
                        <td>
                            <form action="{{ route('admin.order.status', $order->id) }}" method="POST" class="d-inline">
                                @csrf
                                <select name="status" class="form-select form-select-sm d-inline-block w-auto">
                                    <option value="new" {{ $order->status == 'new' ? 'selected' : '' }}>Новая</option>
                                    <option value="in_progress" {{ $order->status == 'in_progress' ? 'selected' : '' }}>В работе</option>
                                    <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Выполнено</option>
                                    <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Отклонено</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary">OK</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

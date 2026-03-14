@extends('theme')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mt-4 text-center">Формирование заявки</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.order.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Адрес объекта</label>
                                <input type="text" name="address" class="form-control" required value="{{ old('address') }}">
                                @error('address') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Контактный телефон</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+7(XXX)-XXX-XX-XX" required value="{{ old('phone') }}">
                                    @error('phone') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Дата и время</label>
                                    <input type="datetime-local" name="date" class="form-control" required min="{{ date('Y-m-d\TH:i') }}">
                                    @error('date') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Вид услуги</label>
                                <select class="form-control" name="service_type" id="serviceSelect" required>
                                    <option value="" selected disabled>Выберите услугу</option>
                                    <option value="Общий клининг">Общий клининг</option>
                                    <option value="Генеральная уборка">Генеральная уборка</option>
                                    <option value="Послестроительная уборка">Послестроительная уборка</option>
                                    <option value="Химчистка ковров и мебели">Химчистка ковров и мебели</option>
                                    <option value="other">Другая услуга</option>
                                </select>
                                @error('service_type') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3" id="otherServiceField" style="display: none;">
                                <label class="form-label">Опишите необходимую услугу</label>
                                <textarea name="service_description" class="form-control" rows="3">{{ old('service_description') }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label d-block">Тип оплаты</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_type" value="cash" required>
                                    <label class="form-check-label">Наличные</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_type" value="card" required>
                                    <label class="form-check-label">Банковская карта</label>
                                </div>
                                @error('payment_type') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Отправить заявку</button>
                            <a href="{{ route('users.dashboard') }}" class="btn btn-secondary w-100 mt-2">Отмена</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('serviceSelect').addEventListener('change', function() {
            const otherField = document.getElementById('otherServiceField');
            if (this.value === 'other') {
                otherField.style.display = 'block';
            } else {
                otherField.style.display = 'none';
            }
        });
    </script>
@endsection

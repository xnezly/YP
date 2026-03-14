@extends('theme')
@section('content')
    <div class="container">
        <div class="form-container">
            <h3 class="text-center">Регистрация</h3>
            <form action="{{ route('register.post') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">ФИО</label>
                    <input type="text" name="name" class="form-control" placeholder="Введите ваше имя" required value="{{ old('name') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Логин</label>
                    <input type="text" name="login" class="form-control" placeholder="Логин" required value="{{ old('login') }}">
                    @error('login') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
                    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Телефон</label>
                    <input type="tel" name="phone" class="form-control" placeholder="+7(XXX)-XXX-XX-XX" value="{{ old('phone') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Пароль</label>
                    <input type="password" name="password" class="form-control" minlength="6" required>
                    @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Повторите пароль</label>
                    <input type="password" name="password_confirmation" class="form-control" minlength="6" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Зарегистрироваться</button>

                <div class="mt-3 text-center">
                    <a href="{{ route('login.form') }}">Уже есть аккаунт? Войти</a>
                </div>
            </form>
        </div>
    </div>
@endsection

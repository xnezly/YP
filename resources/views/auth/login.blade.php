@extends('theme')
@section('content')
    <div class="container">
        <div class="form-container">
            <h3 class="text-center mt-3">Вход</h3>
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Логин</label>
                    <input type="text" name="login" class="form-control" required value="{{ old('login') }}">
                    @error('login') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Пароль</label>
                    <input type="password" name="password" class="form-control" required>
                    @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3">Войти</button>

                <div class="mt-3 text-center">
                    <a href="{{ route('register.form') }}">Еще нет аккаунта? Регистрация</a>
                </div>
            </form>
        </div>
    </div>
@endsection

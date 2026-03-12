@extends('theme')
@section('content')
    <div class="container">
        <div class="form-container">
            <h3 class="text-center mt-3">Вход</h3>
            <form action="">
                <div class="mb3">
                    <label for="" class="form-label">Логин</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="mb3">
                    <label for="" class="form-label">Пароль</label>
                    <input type="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3">Войти</button>
                <div class="mt-3 text-center">
                    <a href="register.html">Еще нет аккаунта? Регистрация</a>
                </div>
            </form>
        </div>
    </div>
@endsection

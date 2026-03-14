<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Мой не Сам</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-primary mb-4">
        <div class="container">
            <div class="d-flex align-items-center">
                <img src="/img/logo.png" class="img-fluid me-3" style="height: 40px; width: auto;" alt="Лого">
                <span class="navbar-brand h1 mb-0 text-white">Мой не Сам</span>
            </div>
            <ul class="navbar-nav d-flex flex-row gap-3 align-items-center">
                @auth
                    {{-- Меню для авторизованных пользователей --}}
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('home') }}">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('users.dashboard')}}">Личный кабинет</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('users.order.create')}}">Создать заявку</a>
                    </li>

                    {{-- Кнопка Админки (только для админов) --}}
                    @if(Auth::user()->is_admin)
                        <li class="nav-item">
                            <a class="nav-link text-warning fw-bold" href="{{route('admin.orders')}}">Админка</a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-light btn-sm">Выход</button>
                        </form>
                    </li>
                @else
                    {{-- Меню для гостей (не авторизованных) --}}
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('home') }}">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('login.form')}}">Вход</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('register.form')}}">Регистрация</a>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer class="bg-dark text-white text-center py-3 mt-5">
    <div class="container">
        <p class="mb-1">Портал «Мой Не Сам» &copy; 2026</p>
        <small class="text-muted">Тел: +7 (999) 999-99-99 | Email: moynesam@mail.ru</small>
    </div>
</footer>
<script src="/js/script.js"></script>
<script src="/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>

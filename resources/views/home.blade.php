@extends('theme')
@section('content')

    <div id="mainCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="bg-black text-white py-5" style="min-height: 400px;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1 class="display-4 fw-bold">Профессиональный клининг</h1>
                                <p class="lead">Доверьте уборку профессионалам и освободите время для важного!</p>
                                <a href="{{ route('register.form') }}" class="btn btn-light btn-lg mt-3">Заказать уборку</a>
                            </div>
                            <div class="col-md-6 text-center">
                                <img src="/img/sl1.jpg" class="img-fluid rounded" alt="Клининг">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="bg-black text-white py-5" style="min-height: 400px;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1 class="display-4 fw-bold">Генеральная уборка</h1>
                                <p class="lead">Тщательная уборка всех поверхностей и труднодоступных мест</p>
                                <a href="{{ route('register.form') }}" class="btn btn-light btn-lg mt-3">Оставить заявку</a>
                            </div>
                            <div class="col-md-6 text-center">
                                <img src="/img/sl2.jpg" class="img-fluid rounded" alt="Уборка">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="bg-black text-white py-5" style="min-height: 400px;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1 class="display-4 fw-bold">Химчистка мебели</h1>
                                <p class="lead">Вернем вашей мебели первоначальный вид и свежесть</p>
                                <a href="{{ route('register.form') }}" class="btn btn-light btn-lg mt-3">Узнать подробнее</a>
                            </div>
                            <div class="col-md-6 text-center">
                                <img src="/img/sl3.jpg" class="img-fluid rounded" alt="Химчистка">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    {{-- Преимущества --}}
    <div class="container mb-5">
        <h2 class="text-center mb-5">Почему выбирают нас</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="bi bi-check-circle-fill text-success" style="font-size: 2rem;"></i>
                    </div>
                    <div>
                        <h5>Опытные специалисты</h5>
                        <p class="text-muted">Все клинеры проходят обучение и имеют опыт работы от 3 лет</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="bi bi-shield-check text-success" style="font-size: 2rem;"></i>
                    </div>
                    <div>
                        <h5>Гарантия качества</h5>
                        <p class="text-muted">Если что-то не понравится — переделаем бесплатно</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="bi bi-clock-fill text-success" style="font-size: 2rem;"></i>
                    </div>
                    <div>
                        <h5>Пунктуальность</h5>
                        <p class="text-muted">Приезжаем точно в назначенное время</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="bi bi-wallet2 text-success" style="font-size: 2rem;"></i>
                    </div>
                    <div>
                        <h5>Доступные цены</h5>
                        <p class="text-muted">Честная стоимость без скрытых платежей</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

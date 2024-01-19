@extends('layout.master')

@section('content')
<h1>Главная страница</h1>
<div class="header">
    <div class="header__container container">

        <div class="header__logo">
            <img src="/assets/img/LOGO.svg" alt="">
        </div>
        <nav class="header__navigation">
            <ul class="navigation__list">
                <li class="navigation__link">
                    <a href="" class="link__content">О ресторане</a>
                </li>
                <li class="navigation__link">
                    <a href="" class="link__content">Меню</a>
                </li>
                <li class="navigation__link">
                    <a href="" class="link__content">Контакты</a>
                </li>
            </ul>
        </nav>
        <button class="header__burger-btn" id="burger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</div>
<hr class="header__line">
<div class="home">
    <div class="home__container container">
        <div class="home__blur"></div>
        <div class="home__heading">
            <h1 class="heading__welcome">Добро пожаловать на наш маленький островок <br> Японской кухни</h1>
        </div>
    </div>
</div>
@endsection

@extends('layout.master')

@section('content')
<h1>Цена</h1>
<div class="menu">
    <div class="menu__container container">
        <h2 class="menu__title">Меню</h2>

        <h2 class="menu__sushi">Суши</h2>
        <ul class="sushi__list">
            <li class="sushi__content">
                <div class="sushi__img">
                    <img src="/assets/img/sushi1.png" alt="">
                </div>
                <p class="sushi__title">Сяке</p>
                <p class="sushi__discription">Ломтик изысканного<br>лосося на нежном <br>рисе</p>
                <p class="sushi__price">107₽</p>
            </li>
            <li class="sushi__content">
                <div class="sushi__img">
                    <img src="/assets/img/sushi2.png" alt="">
                </div>
                <p class="sushi__title">Тамаго</p>
                <p class="sushi__discription">Ломтик изысканного<br>лосося на нежном <br>рисе</p>
                <p class="sushi__price">107₽</p>
            </li>
            <li class="sushi__content">
                <div class="sushi__img">
                    <img src="/assets/img/sushi3.png" alt="">
                </div>
                <p class="sushi__title">Унаги</p>
                <p class="sushi__discription">Ломтик изысканного<br>лосося на нежном <br>рисе</p>
                <p class="sushi__price">107₽</p>
            </li>
            <li class="sushi__content">
                <div class="sushi__img">
                    <img src="/assets/img/sushi4.png" alt="">
                </div>
                <p class="sushi__title">Хотатэ</p>
                <p class="sushi__discription">Ломтик изысканного<br>лосося на нежном <br>рисе</p>
                <p class="sushi__price">107₽</p>
            </li>
        </ul>
        <h2 class="menu__napitok">Напитки</h2>
        <ul class="napitok__list">
            <li class="napitok__content">
                <img src="/assets/img/napitok1.jpg" alt="" class="napitok__img">
                <p class="napitok__title">Гёкуро</p>
                <p class="napitok__discription">Зелёный чай высшей <br>категории</p>
                <p class="napitok__price">149₽</p>
            </li>
            <li class="napitok__content">
                <img src="/assets/img/napitok2.png" class="napitok__img">
                <p class="napitok__title">Сётю</p>
                <p class="napitok__discription">Крепки спиртной <br> напиток из риса</p>
                <p class="napitok__price">849₽</p>
            </li>
            <li class="napitok__content">
                <img src="/assets/img/napitok3.png" class="napitok__img">

                <p class="napitok__title">Маття</p>
                <p class="napitok__discription">Порошковый зелёный <br>чай</p>
                <p class="napitok__price">349₽</p>
            </li>
            <li class="napitok__content">
                <img src="/assets/img/napitok4.png" class="napitok__img">
                <p class="napitok__title">Рамунэ</p>
                <p class="napitok__discription">Японская сладкая газировка</p>
                <p class="napitok__price">60₽</p>
            </li>
        </ul>
        <h2 class="menu__sup">Супы</h2>
        <ul class="sup__list">
            <li class="sup__content">
                <div class="sup__img">
                    <img src="/assets/img/sup1.png" width="192" height="192" alt="">
                </div>
                <p class="sup__title">Кани — эби рамэн</p>
                <p class="sup__discription">Нежный суп-лапша с камчатским мясом краба, яйцом и свежими креветками
                </p>
                <p class="sup__price">487₽</p>
            </li>
            <li class="sup__content">
                <div class="sup__img">
                    <img src="/assets/img/sup2.png" alt="">
                </div>
                <p class="sup__title">Киноко куриму</p>
                <p class="sup__discription">Нежный суп-пюре из кукурузы с крабовым мясом <br> и гренки из пшеничного
                    хлеба</p>
                <p class="sup__price">107₽</p>
            </li>
            <li class="sup__content">
                <div class="sup__img">
                    <img src="/assets/img/sup3.png" alt="">
                </div>
                <p class="sup__title">Мисорису</p>
                <p class="sup__discription">Японское блюдо, в основе которого — бульон из ферментированной пасты
                    соевых бобов.</p>
                <p class="sup__price">107₽</p>
            </li>
            <li class="sup__content">
                <div class="sup__img">
                    <img src="/assets/img/sup4.png" alt="">
                </div>
                <p class="sup__title">Том ям кунг</p>
                <p class="sup__discription">Лстрый суп на кокосовом молоке с тигровыми креветками <br> и овощами</p>
                <p class="sup__price">487₽</p>
            </li>
        </ul>
    </div>
</div>
@endsection

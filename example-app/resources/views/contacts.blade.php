@extends('layout.master')

@section('content')
<h1>Наши контакты</h1>
<section class="reservation">
    <div class="reservation__container container">
        <h2 class="reservation__title">Забронируй свой идеальный<br>столик с нами и наслаждайся<br>беззаботным
            отдыхом!
        </h2>
        <div class="reservation__one">
            <input class="reservation-name" type="text" placeholder="Имя" name="name">
            <input class="reservation-surname" type="text" placeholder="Фамилия" name="name">
        </div>
        <div class="reservation__two">
            <input class="reservation-date" type="date" placeholder="Дата посещения" name="date">
            <input class="reservation-tel" type="tel" placeholder="Ваш телефон" name="tel">
        </div>
        <div class="reservation__button">
            <button class="button">Забронировать</button>
        </div>
    </div>
</section>
@endsection

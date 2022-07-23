@extends('layout')
@section('title')Главная@endsection
@section('nav')
    <li class="nav-item"><a href="driver/home" class="nav-link">Обновить</a></li>
@endsection
@section('body')
    <div class="container">
        <h1>Все заказы:</h1>
        @foreach($all as $el)
            @if($el->up == 0)
            <div class="alert alert-info">
                <h3>Город: {{ $el->backyard }}</h3>
                <h5>Улица: {{ $el->street }}</h5>
                <h5>Дом: {{ $el->home }}</h5>
                <small> Пассажиры: {{ $el->amountH }}</small>
                <small>Дети: {{ $el->amountC }}</small>
                <h3>Город прибытия: {{ $el->backyard }}</h3>
                <h3>Улица: {{ $el->streetOld }}</h3>
                <h3>Дом: {{ $el->homeOld }}</h3>
                <a href="{{ route('contactUp', $el->id) }}">Принять заказ</a>
            </div>
            @endif
        @endforeach
    </div>
@endsection

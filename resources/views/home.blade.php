@extends('layout')
@section('title')Главная@endsection
@section('body')
    <div class="container">
        <p class="text-center"><b>Добро пожаловать на наш сайт</b>, для начала выберете ваше направление.</p>
        <div class="text-center">
            <a class="btn btn-outline-secondary" href="/form/orderYes" role="button">Я пассажир</a>
            <a class="btn btn-outline-secondary" href="/home/driver/LK" role="button">Я водитель</a>
        </div>
    </div>
@endsection

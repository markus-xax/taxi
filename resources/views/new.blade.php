@extends('layout')
@section('title')Обновить@endsection
@section('nav')
    <li class="nav-item"><a href="driver/home" class="nav-link">Личный кабинет</a></li>
@endsection
@section('body')
    <div class="text-center">
        <p>
            Для продолжение нажмите эту кнопку
        </p>
    <a href="/home/driver" class="btn btn-secondary btn-lg">Обновить</a>
    </div>
@endsection

@extends('layout')
@section('title')Поездка@endsection
@section('body')
    <div class="container">
        <div class="alert alert-info">
            <h3>Город: {{ $data->backyard }}</h3>
            <h5>Улица: {{ $data->street }}</h5>
            <h5>Дом: {{ $data->home }}</h5>
            <small> Пассажиры: {{ $data->amountH }}</small>
            <small>Дети: {{ $data->amountC }}</small>
            <h3>Город прибытия: {{ $data->backyard }}</h3>
            <h3>Улица: {{ $data->streetOld }}</h3>
            <h3>Дом: {{ $data->homeOld }}</h3>
        </div>
        <a href="/home/driver" class="btn btn-secondary btn-lg">Я приехал</a>
    </div>
@endsection

@extends('layout')
@section('title')Поездка@endsection
@section('body')
    <div class="container">
    <p>
        Приятного пути!
    </p>
        <p>
            Водитель {{ $driver->name }} скоро приедет
            Номер телеофна {{ $driver->number }}
        </p>
    </div>
@endsection

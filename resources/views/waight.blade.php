@extends('layout')
@section('title')Ожидание@endsection
@section('body')
    <div class="container">
    <p>
        <b>Ищем лучшего водителя</b>
    </p>
        @foreach($data as $el)
            <div class="alert alert-success">
        Водитель {{ $el->name }} свободен
        @endforeach
            </div>
    </div>
@endsection

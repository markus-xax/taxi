<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<body>
<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">На главную</a></li>
            @yield('nav')
            <li class="nav-item"><a href="/sum" class="nav-link">Стоимость</a></li>
        </ul>
    </header>
</div>
@if(session()->has('success'))
    <div class="container">
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    </div>
@endif
@if(session()->has('error'))
    <div class="container">
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
    </div>
@endif
@if($errors->any())
        <div class="container">
            <div class="alert alert-danger">
        @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
        @endforeach
        </div>
    </div>
@endif
@yield('body')
</body>

</html>

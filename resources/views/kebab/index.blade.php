@extends('layouts.app')


@section('content')
<div class="wrapper pizza-index">
    <h1>Kebab orders</h1>
    @foreach ($kebabs as $kebab)
    <div class="pizza-item">
        <img src="/img/pizza.png" alt="pizza" />
        <h4><a href="/kebab/{{ $kebab->id }}">{{ $kebab->name }}</a></h4>
    </div>
    @endforeach
</div>




@endsection
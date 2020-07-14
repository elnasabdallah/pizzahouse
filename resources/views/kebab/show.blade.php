@extends('layouts.app')


@section('content')
<div class="wrapper pizza-details">
    <h1>Order for {{ $kebab->name }}</h1>
    <p class="type">Type {{ $kebab->type }}</p>
    <p class="base">Base - {{ $kebab->base }}</p>
    <p class="toppings">Toppings: </p>
    <ul>
        @foreach ($kebab->toppings as $topping)
        <li>{{ $topping }}</li>
        @endforeach
    </ul>
    <form action="/kebab/{{ $kebab->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete order</button>
    </form>
</div>
<a href="/kebab" class="back">Back to all kebabs</a>
@endsection
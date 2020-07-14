@extends('layouts.app')


@section('content')
<div class="wrapper create-pizza">

    <h1>Create a New Kebab</h1>
    <form action="/kebab" method="POST">
        @csrf
        <label for="name">Your name</label>
        <input type="text" name="name" id="name">
        <label for="type">Choose kebab type:</label>
        <select name="type" id="type">
            <option value=""></option>
            <option value="donner">Donner</option>
            <option value="lahma jum">Lahma Jum</option>
            <option value="arabish">Arabish</option>

        </select>
        <label for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value=""></option>
            <option value="bread ">Bread</option>
            <option value="brot">garlic </option>
            <option value="spices">Spices</option>
            <option value="youghurt">Youghurt</option>
        </select>
        <fieldset>
            <label for="toppings">Extra toppings</label>
            <input type="checkbox" name="toppings[]" value="mushrooms"> Mushrooms <br>
            <input type="checkbox" name="toppings[]" value="peppers"> Peppers <br>
            <input type="checkbox" name="toppings[]" value="garlic"> Garlic <br>
            <input type="checkbox" name="toppings[]" value="olives"> Olives <br>
        </fieldset>
        <input type="submit" value="Order Kebab">

    </form>
</div>

@endsection
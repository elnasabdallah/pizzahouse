@extends('layouts.app')


@section('content')
<div class="wrapper create-pizza">

    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name</label>
        <input type="text" name="name" id="name">
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value=""></option>
            <option value="magarita">Magarita</option>
            <option value="hawain">Hawain</option>
            <option value="veg supreme">Veg supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="type">Choose base type:</label>
        <select name="base" id="type">
            <option value=""></option>
            <option value="chessy crust">Chessy crust</option>
            <option value="garlic crust">garlic crust</option>
            <option value="thin & cripsy">Thin & cripsy</option>
            <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label for="toppings">Extra toppings</label>
            <input type="checkbox" name="toppings[]" value="mushrooms"> Mushrooms <br>
            <input type="checkbox" name="toppings[]" value="peppers"> Peppers <br>
            <input type="checkbox" name="toppings[]" value="garlic"> Garlic <br>
            <input type="checkbox" name="toppings[]" value="olives"> Olives <br>
        </fieldset>
        <input type="submit" value="Order Pizza">

    </form>
</div>

@endsection
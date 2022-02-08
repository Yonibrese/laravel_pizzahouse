@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create A New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name">

        <label for="type">choose pizza type:</label>
        <select name="type" id="type">
            <option value="margherita">Margherita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg superime">Veg Superime</option>
            <option value="volcano">Volcano</option>
        </select>

        <label for="base">choose pizza base:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & chirspy">Thin and Chrispy</option>
            <option value="thick">Thick</option>
        </select>

        <fieldset>
            <label>Extra toppings:</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
            <input type="checkbox" name="toppings[]" value="onion">Onion<br />
            <input type="checkbox" name="toppings[]" value="olives">Olives<br />
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
        </fieldset>

        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection
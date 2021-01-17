@extends ('layout.layout')

@section('pizza_home_page')
    <div class="wrapper creat-pizza">
        <h1>Create New pizza</h1>
        <form action="/pizzas" method="POST">
            @csrf
            {{-- Name --}}
            <label for="name">Your name:</label>
            <input type="text" name="name" id="name">

            {{-- Type --}}
            <label for="type">Choose pizza type:</label>
            <select name="type" id="type">
                <option value="Margarita">Margarita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>

            {{-- Base --}}
            <label for="base">Choose base type:</label>
            <select name="base" id="base">
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin & crispy">Thin & Crispy</option>
                <option value="thick">Thick</option>
            </select>

            {{-- Base --}}
            <fieldset>
                <label>Extra toppings:</label>
                <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
                <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
                <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
                <input type="checkbox" name="toppings[]" value="olives">Olives<br />
            </fieldset>

            {{-- Submit --}}
            <input type="submit" value="Order Pizza">
        </form>
    </div>
@endsection

{{-- text-center --}}

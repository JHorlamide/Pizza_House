@extends ('layout.layout')

@section('pizza_home_page')
    <div class="wrapper pizza-details">
        <h2>Order for {{ $pizza->name }}</h2>
        <p>Type - {{ $pizza->type }}</p>
        <p>Base - {{ $pizza->base }}</p>
        <p class="toppings">Extra toppings: </p>
        <ul>
            @foreach ($pizza->toppings as $topping)
                <li>{{ $topping }}</li>
            @endforeach
        </ul>

    </div>
    <a href="/pizzas" class="back">
        <- Back to all pizzas
     </a>
@endsection

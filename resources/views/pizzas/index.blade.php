<x-app-layout>
    <div class="m-4">
        <h1 class="text-2xl">Our Pizzas</h1>
        @foreach ($pizzas as $pizza)
            <div class="m-2">
                <h2 class="text-xl">{{ $pizza->name }}</h1>
                <p>Price: £{{ $pizza->price }}</p>
            </div>
        @endforeach
        <h1 class="text-2xl">Our Toppings</h1>
        <p>It costs 85p to add additional toppings.</p>
        @foreach ($toppings as $topping)
            <div class="m-2">
                <p class="text-large">{{ $topping->name }}</p>
            </div>
        @endforeach
    </div>
</x-app-layout>

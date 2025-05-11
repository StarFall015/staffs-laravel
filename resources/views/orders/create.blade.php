<x-app-layout>
    <div class="m-4">
        <h1 class="text-2xl">Place an order</h1>
        <p class="text-xl">Total cost: £00.00</p>
        <form method="POST" action="{{ route('orders.store') }}">
        @csrf
            @foreach ($pizzas as $pizza)
                <section class="m-2">
                    <h2 class="text-xl">{{$pizza->name}}</h2>
                    <span style="display: block;"><label for="{{$pizza->id}}">Price: £{{$pizza->price}} </label><input type="checkbox" name="pizza_id[]" id="{{$pizza->id}}" value="{{$pizza->id}}"></span>
                </section>
            @endforeach
            <span style="display: block;"><label for="collection">Collection </label><input type="radio" name="method" id="collection" value="collection"></span>
            <span style="display: block;"><label for="delivery">Delivery </label><input type="radio" name="method" id="delivery" value="delivery"></span>
            <button style="border: black solid 1px; display: block;" class="p-2 rounded">Order</button>
        </form>
    </div>
</x-app-layout>
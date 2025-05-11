<x-app-layout>
    <div class="m-4">
        <h1 class="text-2xl">Your orders</h1>
        @foreach ($orders as $order)
            <section>
                <h1>{{ $order->id }}</h1>
                <p>{{ $order->total_price }}</p>
                <p>{{ $order->status }}</p>
            </section>
        @endforeach
    </div>
</x-app-layout>
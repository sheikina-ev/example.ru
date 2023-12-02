<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Информация о товаре
    </x-slot:title>

<div class="m-4">
    <p>ID товара: {{ $product->id }}</p>
    <p>Наименование товара: {{ $product->name }}</p>
    <p>Цена товара: {{ $product->price}}</p>
    <p>Количество товара: {{ $product->quantity }}</p>
    <p>Описание товара: {{ $product->description }}</p>
</div>
</x-layout>

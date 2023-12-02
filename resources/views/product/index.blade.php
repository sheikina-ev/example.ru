<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Список товаров
    </x-slot:title>
    <h3 class="m-4">Список товаров: </h3>
    <a class="btn btn-dark m-4" href="/products/new">Добавить товар</a>
    <table class="table m-4">
        <tr>
            <th>Номер</th>
            <th>Название товара</th>
            <th>Цена</th>
            <th>Количество</th>
            <th>Описание</th>
            <th>Операции</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{$product->name}} </td>
                <td> {{$product->price}} </td>
                <td> {{$product->quantity}} </td>
                <td> {{$product->description}} </td>
                <td>
                    <a class="btn btn-success" href="/products/{{$product->id}}">Просмотреть</a>
                    <a class="btn btn-primary" href="/products/{{$product->id}}/update">Редактировать</a>
                    <a class="btn btn-danger" href="/products/{{$product->id}}/delete">Удалить</a>
                </td>
            </tr>
        @endforeach

    </table>
</x-layout>

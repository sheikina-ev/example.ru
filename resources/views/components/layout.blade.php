<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>{{ $title  }}</title>
</head>
<body>

    <header class="d-flex justify-content-between">
        <h2 class="m-4">Магазин продуктов</h2>
        <nav class="">
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item m-4"><a class="nav-link" href="/categories">Категории</a></li>
                <li class="nav-item m-4"><a class="nav-link" href="/products">Товары</a></li>
            </ul>
        </nav>
    </header>

    <main>
        {{$slot}}
    </main>

<footer class="m-4">
    <p>Контакты: ...</p>
</footer>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <main class="text-center">
        <h1>Lista Film</h1>

        <div class="row row-col-2 text-center">
            
        @foreach ($film as $film)

        <div class="card col-3 g-3 m-2">

            <div class="card-body">
                <h5 class="card-title">{{$film->title}}</h5>
                <p class="card-text">{{$film->nationality}}</p>
                <p class="card-text">{{$film->date}}</p>
            </div>
        </div>

    @endforeach
        </div>

    </main>
</body>

</html>

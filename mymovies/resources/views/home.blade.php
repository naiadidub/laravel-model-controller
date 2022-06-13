<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/capp.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>movuis</title>
</head>
<body>
    <h1 class="text-center"> my movies <i class="fa-brands fa-angellist"></i></h1>
    <div class="container">
        <div class="row">
            @foreach ($moovies as $item){
                <div class="card col-3 m-3" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{$item->title}}</h5>
                      <p class="card-text">{{$item->original_title}}</p>
                      <p class="card-text">{{$item->nationality}}</p>
                      <p class="card-text">release date:{{$item->date}}</p>
                      <a href="#" class="btn btn-primary">{{$item->vote}}</a>
                    </div>
                  </div>
                }
            @endforeach
        </div>
        
    </div>
    
</body>
</html>

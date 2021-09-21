<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>Article</title>

</head>
<body>
    <div id="contai">
    <h1>Wilkommen</h1>
    @extends('master')
    @section('title', 'Message List')
    
    @section('content')
   
    <h2>Create new message: </h2>
    </div>
    <form id="container" action="/create" method="post">
        <div>
        <br>
        <input class="content" type="text" name="title" placeholder="Title">
        </div><br>
        <div>
        <input type="text" name="content" placeholder="Content">
        @csrf
        </div>
        <br>
        <div>
        <button id="submit-btn" type="submit">Submit</button><br>
        
    </form>
  <br>
        <ul id="entry">
        @foreach ($messages as $message)
        <li>
            <b><a id="lnk" href="/messages/{{$message->id}}">{{$message->title}}:</b><br>
            {{$message->content}}<br>
            {{$message->created_at->diffForHumans()}}
        </li>
        @endforeach
    </ul>
    </div>
    @endsection
</body>
</html>

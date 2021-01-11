<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

<div class="container">
    <div class="row" id="app">
        <h1>Chat Room</h1>
    </div>
</div>



<script src="{{asset('js/app.js')}}"></script>
</body>
</html>

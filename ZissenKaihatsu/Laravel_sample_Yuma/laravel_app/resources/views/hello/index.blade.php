<!doctype html>
<html lang="ja">
<head>
    <title>Index</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body style="padding:10px;">
    <h1>Hello/Index</h1>
    <p>{{$msg}}</p>

    <div id="app">
        <example-component></example-component>
    </div>
</body>
</html>

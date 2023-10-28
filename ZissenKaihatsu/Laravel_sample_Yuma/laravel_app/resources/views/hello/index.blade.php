<!doctype html>
<html lang="ja">
<head>
    <title>Index</title>
    <style>
        th { background-color:red; padding:10px; }
        td { background-color:#eee; padding:10px; }
    </style>
    <link href="/css/app.css"  rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Hello/Index</h1>
    <p>{{$msg}}</p>
    <table border="1">
    @foreach($data as $item)
    <tr>
        <th>{{$item->id}}</th>
        <td>{{$item->name_and_age}}</td>
    </tr>
    @endforeach
    </table>
    <hr>
</body>
</html>

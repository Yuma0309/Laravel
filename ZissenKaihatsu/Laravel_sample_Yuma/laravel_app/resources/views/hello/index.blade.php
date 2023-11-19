<!doctype html>
<html lang="ja">
<head>
    <title>Index</title>
    <link href="/css/app.css"  rel="stylesheet">
    <script>
    function doAction(){
        var id = document.querySelector('#id').value;
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/hello/json/' + id, true);
        xhr.responseType = 'json';
        xhr.onload = function(e) {
            if (this.status == 200) {
                var result = this.response;
                document.querySelector('#name').textContent = result.name;
                document.querySelector('#mail').textContent = result.mail;
                document.querySelector('#age').textContent = result.age;
            }
        };
        xhr.send();
    }
    </script>
</head>
<body>
    <h1>Hello/Index</h1>
   <p>{{$msg}}</p>
    <div>
    <form action="/hello" method="post">
        @csrf
        <input type="text" id="find" name="find" 
            value="{{$input}}">
        <input type="submit">
    </form>
    </div>
    <hr>
    <table border="1">
    @foreach($data as $item)
    <tr>
        <th>{{$item->id}}</th>
        <td>{{$item->all_data}}</td>
    </tr>
    @endforeach
    </table>
    <hr>
</body>
</html>

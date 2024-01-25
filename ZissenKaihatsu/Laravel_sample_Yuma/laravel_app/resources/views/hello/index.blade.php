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
<body style="padding:10px;">
    <h1>Hello/Index</h1>
    <p>{{$msg}}</p>
    <ul>
    @foreach($data as $item)
    <li>{{$item->all_data}}</li>
    @endforeach
    </ul>
</body>
</html>

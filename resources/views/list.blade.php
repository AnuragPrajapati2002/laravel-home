<h1>Getting data from database</h1>

<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>password</td>
    </tr>
    @foreach($names as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['password']}}</td>
    </tr>
    @endforeach
</table>
<h1>List of details</h1>

<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>password</td>
        <td>Operation</td>
    </tr>
    @foreach($names as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['password']}}</td>
        <td><a href={{"remove/".$item['id']}}>Delete</a>
        <a href={{"edit/".$item['id']}}>Edit</a></td>
    </tr>
    @endforeach
</table>
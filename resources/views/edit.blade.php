<h1>Edit Page</h1>
<form action="/update" method="POST">
    @csrf
    <input type="hidden" name="id" value={{$data['id']}}/>
    <label>Name</label>
    <input type="text" name="username" value="{{$data['name']}}"/><br>
    <label>Password</label>
    <input type="password" name="password" value="{{$data['password']}}"/><br>
    <button type="submit">Update</button>
</form>
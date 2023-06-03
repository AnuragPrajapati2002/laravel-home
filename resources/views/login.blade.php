<h1>Login Form</h1> 
@if(session()->has('xyz'))
<h2>Data is saved for {{session('xyz')}}</h2>
@endif
<form action="flash" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" name="username" placeholder="Enter username" /><br>
    <label>Password</label>
    <input type="password" name="password" placeholder="Enter password" /><br><br>
    <button type="submit">Submit</button>
</form>


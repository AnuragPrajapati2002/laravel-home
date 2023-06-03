<h1>Add Member to database</h1>
<form action="add" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" name="username" placeholder="Enter username" /><br>
    <label>Password</label>
    <input type="password" name="password" placeholder="Enter password" /><br><br>
    <button type="submit">Submit</button>
</form>
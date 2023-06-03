<h1>File Upload</h1>

<form action="upload" method="POST" enctype="multipart/form-data">
    @csrf
<label>Upload File Here</label><br>
<input type="file" name="file" /><br>
<button type="submit">Submit</button>
</form> 
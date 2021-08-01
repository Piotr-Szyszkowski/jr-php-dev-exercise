@extends('layouts.app')

@section('content')

<div class="bg-white p-4 w-2/3 mx-auto">
    <h2 class="text-center text-2xl">Upload your dog!</h2>
    <p>Please add your form code here</p>
    <!-- Below form added as a "template" to work with, seems like it allwws grabbing file from disk but getting error:  "The POST method is not supported for this route. Supported methods: GET, HEAD, PUT, PATCH, DELETE." -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">  
</form>
</div>

@endsection
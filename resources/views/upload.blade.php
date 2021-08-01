@extends('layouts.app')

@section('content')

<div class="bg-white p-4 w-2/3 mx-auto">
    <h2 class="text-center text-2xl">Upload your dog!</h2>
    <p>Please add your form code here</p>
    <!-- @Piotr - Below form added as a "template" to work with, seems like it allwws grabbing file from disk but getting error:  "The POST method is not supported for this route. Supported methods: GET, HEAD, PUT, PATCH, DELETE." Have to update something in PictureController I guess... the " store(Request $request)" part-->
    <form action="upload.php" method="POST" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">  
</form>
</div>

@endsection
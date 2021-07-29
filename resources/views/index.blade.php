@extends('layouts.app')
<!-- @Piotr - extends keyword is used to derive a class from another class. This is called inheritance. A derived class has all of the public and protected properties of the class that it is derived from. -->

@section('content')

<div class="flex flex-wrap">
<?php echo $pictures?> 
<!-- @Piotr - can print pictures but no idea where they are coming from... -->
@foreach ($pictures as $picture) <!-- @Piotr -  renders picture elements with foreach, but where is $pictures coming from... ok, they come from PictureController.php, declared line 18 and returned as array line 20. Where is the original data coming from though? SOmething to do with "use Illuminate\Database\Eloquent\Model;" in app.Models/Picture.php... oh.. there is a migration in create_picture_table.php ant it sets the data structure up-->
    <div class="w-4/12 lg:w-3/12 p-2">
        <div class="rounded overflow-hidden bg-white border border-gray-200 p-4">
            <img class="w-full h-full" width="400px" src="{{ asset('storage/' . $picture->file_path) }}">
            <p class="mt-2 text-gray-500">{{ $picture->name }}</p> <!-- guessing it is accesses name property of picture objects -->
            <p class="mt-2 text-gray-500">{{ $picture->votes }} votes</p>
        </div>
    </div>
@endforeach
</div>

@endsection
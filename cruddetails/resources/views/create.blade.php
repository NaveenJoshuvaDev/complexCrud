@extends('layouts.app')
@section('title','create')
@section('content')
<div>
@if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
</div>
<form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
@csrf
    @method('post')
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Name">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Profile Picture</label>
        <input type="file" name="image" class="form-control" id="formGroupExampleInput2" placeholder="Profile Picture">
    </div>
    <br>
    <legend>Skills</legend>
    <div class="form-check">
  <input class="form-check-input" name="skill[]" type="checkbox" value="Php" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   Php
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" name="skill[]" type="checkbox" value="Python" id="flexCheckChecked" >
  <label class="form-check-label" for="flexCheckChecked">
   Python
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" name="skill[]" type="checkbox" value="C++" id="flexCheckChecked" >
  <label class="form-check-label" for="flexCheckChecked">
   C++
  </label>
</div>


<!-- Radio button -->
<legend>Gender</legend>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male">
  <label class="form-check-label" for="flexRadioDefault1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female">
  <label class="form-check-label" for="flexRadioDefault2">
   Female
  </label>
</div>
<!-- Select Option -->
<legend>Nationality</legend>
<select class="form-select" name="country" aria-label="Default select example">
  <option selected>Country</option>
  <option value="USA">USA</option>
  <option value="UK">UK</option>
  <option value="Australia">Australia</option>
</select>
<button type="submit" class="btn btn-success mt-3">Base class</button>
    </form>
@endsection
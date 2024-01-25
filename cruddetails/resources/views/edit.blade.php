@extends('layouts.app')
@section('title', 'EditPage')
@section('windowTitle')
<div class="center"><h1>Edit Page</h1></div>
@endsection
@section('content')
<form action="{{route('user.update',['id'=>$userdetail->id])}}"  method="post">
@csrf
    @method('put')
    <div class=mb-3>
        <label class="form-label">Name</label>
        <input type="text" class="form-control" value="{{$userdetail->name}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" value="{{$userdetail->image}}">
    </div>
    <legend>Skill</legend>
    <div class="form-check mb-3">
        <label class="form-check-label">Php</label>
        <input type="checkbox" name="skill[]" class="form-check-input" value="Php" {{in_array('Php',explode(',' , $userdetail->skill))?'checked' : ''}}>
    </div>
    <div class="form-check mb-3">
        <label for="" class="form-check-label">Python</label>
        <input type="checkbox" name="skill[]" class="form-check-input" value="Python" {{in_array('Python',explode(',' ,$userdetail->skill))? 'checked' : ''}}>
    </div>

    <div class="form-check mb-3">
        <label for="" class="form-check-label">C++</label>
         <input type="checkbox" name="skill[]" class="form-check-input" value="C++" {{in_array('C++', explode(',', $userdetail->skill))? 'checked' : ''}}>
    </div>
    <legend>Gender</legend>
    <div class="form-check mb-3">
        <label class="form-check-label">Male</label>
        <input type="radio" name="gender" class="form-check-control" value="Male" {{ $userdetail->gender == 'Male' ? 'checked' : '' }}>
    </div>
    <div class="form-check mb-3">
        <label class="form-check-label">Female</label>
        <input type="radio" name="gender" class="formcheck--control" value="Female" {{ $userdetail->gender == 'FeMale' ? 'checked' : '' }}>
    </div>
    <legend>Nationality</legend>
    <select class="form-select" name="country" id="">
        <option selected>Country</option>
        <option value="USA" {{$userdetail->country == 'USA' ? 'selected' : ''}}>USA</option>
        <option value="UK" {{$userdetail->country == 'UK'? 'selected' : ''}}>UK</option>
        <option value="Australia" {{$userdetail->country == 'Australia' ? 'selected' : ''}}>Australia</option>
    </select>
    <button type="submit" class="btn btn-success">Update</button>
</form>

@endsection
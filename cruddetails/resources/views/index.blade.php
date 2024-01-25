@extends('layouts.app')
@section('title', 'Index')
@section('windowTitle')
<div class="center"> <h1>homepage</h1></div>
@endsection()
@section('link')
<a href="{{route('user.create')}}">Create userDetails</a>
@endsection
@section('content')

<div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Skill</th>
                <th scope="col">Gender</th>
                <th scope="col">Country</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($userdetail as $userrecords)
            <tr>
                <td>{{$userrecords->id}}</td>
                <td>{{$userrecords->name}}</td>
                <td>
                @if($userrecords->image)
                <img src="{{ asset('storage/images/' . $userrecords->image) }}" alt="Uploaded Image" style="max-width: 100px;border-radius:50px;">
                @else
                    No Image
                    @endif
                   </td>
                <td>{{$userrecords->skill}}</td>
                <td>{{$userrecords->gender}}</td>
                <td>{{$userrecords->country}}</td>
                <td><a href="{{route('user.edit', ['id' => $userrecords->id])}}">Edit</a></td>
                <td><a href="">Delete</a></td>
            </tr>
            @endforeach
   
  </tbody>
</table>
</div>
@endsection
@extends('layouts.app')
@section('title', 'Index')

@section('content')
<h1>homepage</h1>
<a href="{{route('user.create')}}">Create userDetails</a>
@endsection
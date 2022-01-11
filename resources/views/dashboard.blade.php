@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <a href="{{ route('students.index') }}"><button type="button" class="btn btn-primary">View Students</button></a>
    <a href="{{ route('students.create') }}"><button type="button" class="btn btn-success">Create Students</button></a>
</div>
@endsection
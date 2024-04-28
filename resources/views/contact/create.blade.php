@extends('layout')
@section('content')
<div class="card">

    <div class="card-header">Register form</div>
    <div class="card-body">
        <form action="{{route('Register') }}" method="post">

            {!! csrf_field() !!}
            <h2>Registration Form</h2>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control">
            <input type="submit" value="save" class="btn btn-success">
        </form>
    </div>
</div>


@stop
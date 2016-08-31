@extends('layouts.master')

@section('title')
  Sign In
@endsection


@section ('content')
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <h1>Sign IN</h1>

    @if(count($errors) > 0)
      <div class="alert alert-danger">
        @foreach($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
      </div>
    @endif

    <form class="" action="{{ route('user.signin') }}" method="post">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="form-control">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">
      </div>

      <button type="submit" class="btn btn-success">Sign IN</button>

      {{ csrf_field() }}

    </form>
  </div>
</div>

@endsection

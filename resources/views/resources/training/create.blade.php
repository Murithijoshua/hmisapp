@extends('resources.training.layout')
@section('content')
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="card push-top">
  <div class="card-header">
 Add new training Servers
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('training.store') }}">
          <div class="form-group">
              @csrf
              <label for="ServerName">Server Name</label>
              <input type="text" class="form-control" name="ServerName" value="{{ old('ServerName') }}" placeholder="Enter Servername"/>
          </div>
          <div class="form-group">
            <label for="Description">Description</label>
            <input type="text" class="form-control" name="Description" value="{{ old('Description') }}" placeholder="What does this do/"/>
        </div>
          <div class="form-group">
              <label for="LoginUsername">Provide Access Username</label>
              <input type="text" class="form-control" name="LoginUsername" value="{{ old('LoginUsername') }}" placeholder="if server does not have leave as blank"/>
          </div>
          <div class="form-group">
              <label for="LoginPass">Provide Access Password</label>
              <input type="text" class="form-control" name="LoginPass" value="{{ old('LoginPass') }}" placeholder="Password"/>
          </div>
          <div class="form-group">
            <label for="link">Provide Access Link</label>
            <input type="url" class="form-control" name="link" value="{{ old('link') }}" placeholder="Link to access this product "/>
        </div>
        <div class="form-group">
          <label for="Video">Provide Github link </label>
          <input type="url" class="form-control" name="github" value="{{ old('github') }}" placeholder="Link to Git repository 🧑‍💻"/>
      </div>
          
          <button type="submit" class="btn btn-block btn-success">Create</button>
      </form>
  </div>
</div>
@endsection
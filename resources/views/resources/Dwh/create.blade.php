@extends('resources.Dwh.layout')
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
 Add new DWH resources
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
      <form method="post" action="{{ route('dwhResources.store') }}">
          <div class="form-group">
              @csrf
              <label for="Title">Title</label>
              <input type="text" class="form-control" name="Title" value="{{ old('Title') }}" />
          </div>
          <div class="form-group">
              <label for="Description">Description</label>
              <input type="text" class="form-control" name="Description" value="{{ old('Description') }}"/>
          </div>
          <div class="form-group">
              <label for="url">Url</label>
              <input type="url" class="form-control" name="url" value="{{ old('url') }}"/>
          </div>
          
          <button type="submit" class="btn btn-block btn-success">Create</button>
      </form>
  </div>
</div>
@endsection
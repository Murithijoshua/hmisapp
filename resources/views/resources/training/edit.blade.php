@extends('resources.tot.layout')
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
    Edit & Update
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
      <form method="post" action="{{ route('training.update', $data->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="ServerName">HIS_Product_&_Version</label>
              <input type="text" class="form-control" name="ServerName" value="{{ $data->ServerName }}"/>
          </div>
          <div class="form-group">
            <label for="Description">Description for Job_Aid</label>
            <input type="text" class="form-control" name="Description" value="{{ $data->Description }}"/>
        </div>
          <div class="form-group">
              <label for="LoginUsername">Edit Access Username</label>
              <input type="text" class="form-control" name="LoginUsername" value="{{ $data->LoginUsername }}"/>
          </div>
          <div class="form-group">
            <label for="LoginPass">Edit Access password</label>
            <input type="text" class="form-control" name="LoginPass" value="{{ $data->LoginPass }}"/>
        </div>
        <div class="form-group">
          <label for="link">Edit Access URL</label>
          <input type="url" class="form-control" name="link" value="{{ $data->link }}"/>
      </div>
          <div class="form-group">
              <label for="github">Github url</label>
              <input type="url" class="form-control" name="github" value="{{ $data->github }}"/>
          </div>
          
          <button type="submit" class="btn btn-block btn-danger">Update </button>
      </form>
  </div>
</div>
@endsection
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
      <form method="post" action="{{ route('prod.update', $data->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="ServerName">Product name</label>
              <input type="text" class="form-control" name="ServerName" value="{{ $data->ServerName }}"/>
          </div>
          <div class="form-group">
              <label for="url">Service Link</label>
              <input type="text" class="form-control" name="url" value="{{ $data->url }}"/>
          </div>
          <div class="form-group">
              <label for="githubLinks">Github url</label>
              <input type="url" class="form-control" name="githubLinks" value="{{ $data->githubLinks }}"/>
          </div>
          
          <button type="submit" class="btn btn-block btn-danger">Update </button>
      </form>
  </div>
</div>
@endsection
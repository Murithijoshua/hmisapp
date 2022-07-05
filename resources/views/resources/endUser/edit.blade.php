@extends('resources.endUser.layout')
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
      <form method="post" action="{{ route('endusercontent.update', $data->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="HISProductVersion">HIS_Product_&_Version</label>
              <input type="text" class="form-control" name="HISProductVersion" value="{{ $data->HISProductVersion }}"/>
          </div>
          <div class="form-group">
            <label for="Description">Job aid Description</label>
            <input type="text" class="form-control" name="Description" value="{{ $data->Description }}" />
        </div>
          <div class="form-group">
              <label for="JobAid">Job Aid</label>
              <input type="text" class="form-control" name="JobAid" value="{{ $data->JobAid }}"/>
          </div>
          <div class="form-group">
              <label for="Video">Video url</label>
              <input type="url" class="form-control" name="Video" value="{{ $data->Video }}"/>
          </div>
          
          <button type="submit" class="btn btn-block btn-danger">Update </button>
      </form>
  </div>
</div>
@endsection
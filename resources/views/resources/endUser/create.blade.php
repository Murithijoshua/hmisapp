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
 ADD NEW END USER CONTENT 
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
      <form method="post" action="{{ route('endusercontent.store') }}">
          <div class="form-group">
              @csrf
              <label for="HISProductVersion">HIS_Product_&_Version</label>
              <input type="text" class="form-control" name="HISProductVersion" value="{{ old('HISProductVersion') }}" />
          </div>
          <div class="form-group">
            <label for="Description">Job_Aid Description</label>
            <input type="text" class="form-control" name="Description" value="{{ old('Description') }}"  placeholder="jobaid Description"/>
        </div>
          <div class="form-group">
              <label for="JobAid">Job_Aid</label>
              <input type="text" class="form-control" name="JobAid" value="{{ old('JobAid') }}"/>
          </div>
          <div class="form-group">
              <label for="Video">Video Url</label>
              <input type="url" class="form-control" name="Video" value="{{ old('Video') }}"/>
          </div>
          
          <button type="submit" class="btn btn-block btn-success">Create</button>
      </form>
  </div>
</div>
@endsection
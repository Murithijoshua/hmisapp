@extends('resources.prod.layout')
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
 Add new Production servers
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
      <form method="post" action="{{ route('prod.store') }}">
          <div class="form-group">
              @csrf
              <label for="ServerName">Product name</label>
              <input type="text" class="form-control" name="ServerName" value="{{ old('ServerName') }}" />
          </div>
      
          <div class="form-group">
              <label for="url">Service Link</label>
              <input type="text" class="form-control" name="url" value="{{ old('url') }}"/>
          </div>
          <div class="form-group">
              <label for="githubLinks">Github</label>
              <input type="url" class="form-control" name="githubLinks" value="{{ old('githubLinks') }}" placeholder="github link"/>
          </div>
          
          <button type="submit" class="btn btn-block btn-success">Create</button>
      </form>
  </div>
</div>
@endsection
@extends('layout')

@section('title', 'Sermons')

@section('content')

<br>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">


    @foreach ($obj as $row)

      	<div class="col-md-12">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>{{ $row->title }}</title><rect fill="black" width="100%" height="100%"/><image width="100%" height="100%" xlink:href="{{ $row->image }}" clip-path="url(#myClip)"></image>
            <text fill="#eceeef" dy=".3em" x="50%" y="50%">{{ $row->title }}</text></svg>
            <div class="card-body">
              <p class="text-muted">{{ $row->description }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{ $row->youtubeId }}" class="btn btn-sm btn-outline-danger">Watch Now</a>
                </div>
                <small class="text-muted">{{ $row->views }} views</small>
              </div>
            </div>
          </div>
        </div>

    @endforeach

      </div>
    </div>
  </div>

@endsection
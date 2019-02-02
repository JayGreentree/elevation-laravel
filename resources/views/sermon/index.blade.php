@extends('layout')

@section('title', $title)

@section('content')

<h1>Sermons</h1>
<br>
  <div class="album py-5 bg-light">
  	<div class="container">
	  	<div class="row">
	  		<div class="col-md-12">
			<nav>
			  <ul class="pagination justify-content-center">
				@for($pageNumber = 1; $pageNumber <= $totalPages; $pageNumber ++)
					<li class="page-item @if($pageNumber == $page) active @endif"><a class="page-link" href="/list?page={{ $pageNumber }}">{{ $pageNumber }}</a></li>
				@endfor
				</ul>
			</nav>
			</div>
		</div>

    @foreach (array_chunk($sermons, 2) as $item)
    	<div class="row">
    		@foreach ($item as $row)
	    	<div class="col-md-6">
	          <div class="card mb-4 shadow-sm">
	            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>{{ $row['title'] }}</title><rect fill="black" width="100%" height="100%"/><image width="100%" height="100%" xlink:href="{{ $row['image'] }}" clip-path="url(#myClip)"></image>
	            <text fill="#eceeef" dy=".3em" x="50%" y="50%">{{ $row['title'] }}</text></svg>
	            <div class="card-body">
	              <p class="text-muted">{{ $row['description'] }}</p>
	              <div class="d-flex justify-content-between align-items-center">
	                <div class="btn-group">
	                  <a href="{{ $row['youtubeId'] }}" class="btn btn-sm btn-outline-danger">Watch Now</a>
	                </div>
	                <small class="text-muted">{{ $row['views'] }} views</small>
	              </div>
	            </div>
	          </div>
	        </div>
	        @endforeach
    	</div>
    	@endforeach

    	<div class="row">
	  		<div class="col-md-12">
			<nav>
			  <ul class="pagination justify-content-center">
				@for($pageNumber = 1; $pageNumber <= $totalPages; $pageNumber ++)
					<li class="page-item @if($pageNumber == $page) active @endif"><a class="page-link" href="/list?page={{ $pageNumber }}">{{ $pageNumber }}</a></li>
				@endfor
				</ul>
			</nav>
		</div>

	</div>

      </div>
    </div>

@endsection
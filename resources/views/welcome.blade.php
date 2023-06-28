@extends('layouts.app')
@section('page-title', 'Film')
@section('content')
<div class="container my-3">

    <div class="row justify-content-around flex-wrap">

        @foreach ($movies as $item)
        <div class="card col-3 mx-4 my-2">
            <div class="card-body">
              <h5 class="card-title">{{$item->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$item->original_title}}</h6>
              <p class="card-text">{{$item->nationality}}</p>
              <small class="card-text">{{$item->date}}</small>          
            </div>
        </div>
        @endforeach
        
    </div>

</div>
@endsection
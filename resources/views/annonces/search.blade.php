@extends('layouts.master')
@section('content')
<div align="right" class="pt-5">
        <a href="{{route('annonces.accueil')}}" class="btn btn-success"> Return</a>
</div>
<p>Resultat de recherche <b>{{$search}}</b> est: </p>
<hr>
<div class="container">

  <div class="row">
    <!-- /.col-lg-3 -->
    <div class="col-lg-10">          
      <div class="row">
        @foreach ($annonces as $annonce)
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="{{route('annonces.show', $annonce->id)}}"><img src="/storage/{{$annonce->image1}}" class="img-thumbnail"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="{{route('annonces.show', $annonce->id)}}">{{substr($annonce->title,0,30)}}</a>
              </h4>
              <h5>{{$annonce->id}} Dhs</h5>
              <p class="card-text">{{substr($annonce ->description,0,100)}}</p>
              <a type="button" class="btn btn-sm btn-outline-info text-dark" href="/city/{{ $annonce->city->id }}">{{$annonce->city->city}}</a>
            </div>
            <div class="card-footer">
              <small class="text-muted float-right"><a href="{{route('annonces.show', $annonce->id)}}" width="150"  class="btn btn-info btn-sm mt-3">Voir plus <i class="fas fa-plus-circle"></i></a></small>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      
      <!-- /.row -->
      
    </div>
    <!-- /.col-lg-9 -->
    
  </div>
  <!-- /.row -->
  
</div>

@endsection

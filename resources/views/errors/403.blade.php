@extends('layouts.master')
@section('content')
<div id="pic" class="col-md-12 pt-3">
<div  class="container pb-5 pt-5">
    <div class="row">
        <div class="col-md-12 col-md-offset-2 text-center">
             <h2>Cette page est non autoriser</h2>
             <a href="{{route('annonces.index')}}" class="btn btn-success"> Return</a>
        </div>
    </div>
</div>
</div>
<style>
    #pic{
        background: repeating-linear-gradient(135deg, #C0C0C0 0%, #C0C0C0 25%, #fff 25%, #fff 50%);
        width: 100%;
        height: 100vh;
    }
  </style>
@endsection

@extends('layouts.master')
@section('content')

<div class="container pb-5 pt-5">
    <div class="row">
        <div class="col-md-12 col-md-offset-2 text-center">
             <h2>Cette page est non autoriser</h2>
             <a href="{{route('annonces.index')}}" class="btn btn-success"> Return</a>
        </div>
    </div>
</div>
@endsection

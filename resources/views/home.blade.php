
@extends('layouts.master')

@section('content')
<div id="pic" class="container col-md-12 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! 
    
        <div align="right" class="pull-right col-md-12">
                        <a href="{{ route('annonces.accueil') }}" class="btn btn-lg btn-success mb-3">Accueil</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
#pic{
        background: repeating-linear-gradient(135deg, 	#000000 0%, #000000 25%, #C0C0C0 25%, #C0C0C0 50%);
        width: 100%;
        height: 100%;
        }
  </style>
@endsection

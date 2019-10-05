@extends('layouts.master')
@section('content')
<main class="pt-5 pb-3">
<div >

        <br>
        @if($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mr-3" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

        @endif
        <br>
<div class="row">
    <div class="col-md-12">
        <div class="pull-right">
                <h1 class="text-uppercase col-md-8">tableau de bord</h1>
                <hr>
        </div>
        <div align="right" class="pull-right col-md-12">
                <a href="{{ route('annonces.create') }}" class="btn btn-lg btn-success mb-3">Ajouter nouvel article</a>
        </div>
    </div>
</div>
<br>
<div class="col-md-12 col-md-offset-1">

<table class="table table-hover table-responsive-md">
  <thead>
    <tr>
        <th class="text-uppercase" width="50">#</th>
        <th class="text-uppercase" width="150">titre</th>
        <th class="text-uppercase" width="300">description</th>
        <th class="text-uppercase" width="300">images</th>
        <th class="text-uppercase" width="150">categorie</th>
        <th class="text-uppercase" width="150">ville</th>
        <th class="text-uppercase" >utilisateur</th>
        <th class="text-uppercase" >Action</th>
        <th class="text-uppercase" >Annonce est Publier</th>
    </tr>
  </thead>
   @foreach($annonces as $annonce)
   <tbody>
    <tr>
        <td>{{$annonce ->id}}</td>
        <td>{{$annonce ->title}}</td>
        <td>{{substr($annonce ->description,0,250)}}</td>
        <td><img src="/storage/{{$annonce->image1}}" class="img-thumbnail"><br><span>Prix :</span>{{$annonce ->price}} DHM</td>
        <td>{{$annonce ->category->category}}</td>
        <td>{{$annonce ->city->city}}</td>
        <td>{{$annonce ->user->username}}</td>
        <td>
        <div class="btn-group btn-group-toggle">
         <a href="{{route('annonces.show', $annonce->id)}}" width="150"  class="btn btn-warning btn-sm mt-3">Détail</a>
        <form action="{{route('annonces.destroy', $annonce->id)}}" method="POST">
             @csrf
             @method('DELETE')
         <button type="submit" width="150" class="btn btn-danger btn-sm mt-3">Supprimer</button>
        </form>
        @if(Auth::user()->is_admin)
            <a href="{{route('annonces.edit', $annonce->id)}}" width="150"  class="btn btn-secondary btn-sm mt-3">approved</a>
        @else

            <a href="{{route('annonces.edit', $annonce->id)}}" width="150"  class="btn btn-info btn-sm mt-3">Editer</a>
        @endif
        </div>
        </td>
        <td class="text-center">{{$annonce ->is_approved}}</td>
    </tr>
</tbody>
  @endforeach
</table>
</div>
{!!$annonces->links() !!}
</div>
</div>

</main>




@endsection

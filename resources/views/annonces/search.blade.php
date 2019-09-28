@extends('layouts.master')
@section('content')
<div align="right">
        <a href="{{route('annonces.accueil')}}" class="btn btn-success"> Return</a>
</div>
<p>Resultat de recherche <b>{{$search}}</b> est: </p>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">titre</th>
        <th scope="col">image</th>
        <th scope="col">ville</th>
        <th scope="col">catégorie</th>
        <th scope="col">plus d'information</th>
    </tr>
    </thead>
    <tbody>
 @foreach ($annonces as $annonce)

        <tr>
            <th scope="row">{{$annonce->id}}</th>
            <td>{{$annonce->title}}</td>
            <td><img src="/storage/{{$annonce->image1}}" class="img-thumbnail" width="200"></td>
            <td>{{$annonce->city->city}}</td>
            <td>{{$annonce->category->category}}</td>
            <td><a href="{{route('annonces.show', $annonce->id)}}" width="150"  class="btn btn-warning btn-sm mt-3">Détail</a></td>
        </tr>

   @endforeach


    </tbody>
  </table>




@endsection

@extends('layouts.master')
@section('content')
<div class="card">
        <div class="card-header col-md-12">
            Dashboard
        </div>
        <br>
        @if($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mr-3" role="alert">
                <p>{{$message}}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

        @endif
        <br>
<div class="row">
    <div class="col-md-12">
        <div class="pull-right">
            <marquee style="font-size:2em; color:red;" class="text-uppercase" behavior="" direction="">Weclome in dashbord DarkStore</marquee>
        </div>
<br>
        <div align="right" class="pull-right col-md-12">
        <a href="{{ route('annonces.create') }}" class="btn btn-lg btn-success mb-3">Ajouter nouvel article</a>
        </div>

    </div>
</div>
<br><br>

<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
        <th class="text-uppercase" width="50">#</th>
        <th class="text-uppercase" width="150">titre</th>
        <th class="text-uppercase" width="300">description</th>
        <th class="text-uppercase" width="300">images</th>
        <th class="text-uppercase" width="150">categorie</th>
        <th class="text-uppercase" width="150">ville</th>
        <th class="text-uppercase" >utilisateur</th>
        <th class="text-uppercase" >Action</th>
    </tr>
  </thead>
   @foreach($annonces as $annonce)
   <tbody>
    <tr>
        <td>{{$annonce ->id}}</td>
        <td>{{$annonce ->title}}</td>
        <td>{{$annonce ->description}}</td>
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
         <a href="{{route('annonces.edit', $annonce->id)}}" width="150"  class="btn btn-info btn-sm mt-3">Editer</a>
        </div>
        </td>
    </tr>
</tbody>
  @endforeach
</table>
{!!$annonces->links() !!}
</div>
</div>






@endsection

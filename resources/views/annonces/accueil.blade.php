@extends('layouts.master')
@section('content')


<main role="main">

        <div class="album py-5 bg-light">
          <div class="container">
              <div class="row">
                         <div class="form-group ml-auto col-md-4 ">
                            <form class="form-inline ml-auto" action="{{route('annonces.search')}}" method="get" role="search">
                                @csrf
                                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-dark btn-rounded btn-sm my-0" type="submit">Search</button>
                              </form>
                         </div>
                 </div>
            <div class="row">
            @foreach ($annonces as $annonce)
              <div class="col-md-4" >

                <div class="card mb-4 shadow-lg" >
                    <div class="mt-3 mb-4 text-center">
                        <small class="text-muted"><strong>Article poster par: </strong>{{$annonce ->user->username}}</small>
                    </div>
                    <div style="height:25rem">
                 <img src="/storage/{{$annonce->image1}}" class="img-thumbnail img-fluid" height="20rem" width="338">
                </div>
                  <div class="card-body">
                    <p class="card-text">{{$annonce ->title}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                            <form class="form-inline ml-auto" action="{{route('annonces.search')}}" method="get" >
                                    @csrf
                        <input class="form-control mr-sm-2" type="hidden" name="category" value="{{$annonce->category->category}}">
                        <button type="submit" class="btn btn-sm btn-outline-info text-dark"  >{{$annonce->category->category}}</button>
                            </form>
                        <a type="button" class="btn btn-sm btn-outline-info text-dark" href="{{route('annonces.show', $annonce->id)}}">Voire Plus</a>

                      </div>
                    </div>
                        <br>
                   <div>
                        <small class="text-muted"><strong>Prix : </strong>{{$annonce ->price}} DHs</small>
                        <br>
                        <button type="submit" class="btn btn-sm btn-outline-info text-dark">{{$annonce ->city->city}}</button>
                        <br>
                    <small class="text-muted float-right"><strong>Le :</strong>{{$annonce ->created_at}}</small>
                </div>
            </div>
        </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        {!!$annonces->links() !!}
      </main>

@endsection

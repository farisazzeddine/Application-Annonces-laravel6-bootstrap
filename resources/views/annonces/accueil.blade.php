@extends('layouts.master')
@section('content')


<main role="main">

        <div class="album py-5 bg-light">
          <div class="container">
              <div class="row">
                {{-- <div class="form-group col-md-4 ">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">

                              <label class="input-group-text" for="inputGroupSelect01">Catégories</label>
                            </div>
                            <select class="custom-select text-uppercase" name="category">
                                    <option selected>Choisir la categorie...</option>
                                @foreach ($categories as $category)
                                 <option class="text-uppercase" value="{{$category->id}}">{{$category->category}}</option>

                              @endforeach
                            </select>
                        </div>
                     </div>
                     <div class="form-group col-md-4 ">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">

                                  <label class="input-group-text" for="inputGroupSelect01">Villes</label>
                                </div>
                                <select class="custom-select text-uppercase" name="city" >
                                        <option selected>Choisir la ville...</option>
                                    @foreach ($cities as $city)



                                <option class="text-uppercase"  value="{{$city->id}}">{{$city->city}}</option>

                                  @endforeach
                                </select>
                            </div>
                         </div> --}}
                         <div class="form-group col-md-4 ">
                            <form class="form-inline mr-auto" action="{{route('annonces.search')}}" method="get" role="search">
                                @csrf
                                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-dark btn-rounded btn-sm my-0" type="submit">Search</button>
                              </form>
                         </div>
                 </div>
            <div class="row">
            @foreach ($annonces as $annonce)
              <div class="col-md-4">

                <div class="card mb-4 shadow-sm">
                    <div class="mt-3 mb-4 text-center">
                        <small class="text-muted"><strong>Article poster par: </strong>{{$annonce ->user->username}}</small>
                    </div>
                 <img src="/storage/{{$annonce->image1}}" class="img-thumbnail img-fluid" height="338" width="338">
                  <div class="card-body">
                    <p class="card-text">{{$annonce ->title}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary"  >{{$annonce ->category->category}}</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">{{$annonce ->city->city}}</button>
                        <a type="button" class="btn btn-sm btn-outline-secondary" href="{{route('annonces.show', $annonce->id)}}">Voire Plus</a>
                      </div>
                    </div>
                    <br>
                    <div>
                            <small class="text-muted"><strong>Prix : </strong>{{$annonce ->price}} DHs</small>
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

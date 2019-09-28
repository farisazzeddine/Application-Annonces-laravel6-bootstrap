@extends('layouts.master')
@section('content')
<div class="jumbotron text-center">
        <div align="right">
                <a href="{{route('annonces.index')}}" class="btn btn-success"> Return</a>
        </div>
         <br/>
         <form method="POST" action="{{route('annonces.update', $annonces->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH');
                                         <div class="col-6 text-left">
                                             <label for="titre">Titre *:</label>
                                             <input type="text" name="title" class="form-control" value="{{$annonces ->title}}">
                                         </div>

                                         <div class="form-group col-md-10 text-left">
                                                <label for="description">Description Article *:</label>
                                         <textarea class="form-control" name="description"  rows="2">{{$annonces ->description}}"</textarea>
                                         </div>

                                         <div class="form-group col-md-8">
                                                <div class="input-group mb-3">
                                                     <div class="input-group-prepend">
                                                       <span class="input-group-text" >Images</span>
                                                     </div>
                                                     <div class="custom-file">
                                                       <input type="file" name="image1" class="custom-file-input"
                                                         aria-describedby="inputGroupFileAddon01">
                                                       <label class="custom-file-label btn btn-ptimary" for="inputGroupFile01">Choose Image 1</label>
                                                     </div>
                                                </div>
                                                <img src="/storage/{{$annonces->image1}}" class="img-thumbnail" width="400" >
                                            <input type="hidden" name="hidden_image" value="{{$annonces->image1}}">
                                         </div>

                                         <div class="form-group col-md-8 ">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <label class="input-group-text" for="inputGroupSelect01">ville</label>
                                                </div>
                                                <select class="custom-select text-uppercase" name="category">
                                                     @foreach ($categories as $category)
                                             <option class="text-uppercase" @if($annonces->category_id === $category->id){
                                             value="{{$annonces->category_id}}" selected
                                             }
                                             @endif
                                              value="{{$category->id}}">{{$category->category}}</option>

                                          @endforeach
                                                </select>
                                            </div>
                                         </div>

                                            <div class="form-group col-md-8 ">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">

                                                      <label class="input-group-text" for="inputGroupSelect01">Catégories</label>
                                                    </div>
                                                    <select class="custom-select text-uppercase" name="city" >
                                                     @foreach ($cities as $city)



                                            <option class="text-uppercase"  @if($annonces->city_id === $city->id){
                                                    value="{{$annonces->city_id}}" selected
                                                    }
                                                    @endif value="{{$city->id}}">{{$city->city}}</option>

                                              @endforeach
                                                    </select>
                                                </div>
                                             </div>
                                             <div class="form-group col-md-8 ">
                                                <div class="input-group mb-3">
                                                   <div class="input-group-prepend">
                                                     <span class="input-group-text">DHs</span>
                                                   </div>
                                                   <input type="number" min="0.00" max="100000.00" step="0.50" class="form-control" value="{{$annonces ->price}}" name="prix" aria-label="Amount (to the nearest dollar)">
                                                   <div class="input-group-append">
                                                     <span class="input-group-text">.00</span>
                                                   </div>
                                                </div>
                                                </div>
                                             <div class="col-md-12 text-left">
                                                    <label for="is_delete" class="col-md-4 col-form-label text-md-right">{{ __('approved') }}</label>
                                                    <input type="radio" aria-label="Radio button for following text input" name="approved" value="{{$annonces ->is_approved}}">
                                                 </div>

                                                <div class="form-group col-md-10">
                                                       <div class="form-group ">
                                                           <div class="col-md-10 offset-md-4">
                                                               <button style="float:right;" type="submit" class="btn btn-primary" name="edit" value="Edit">
                                                                   {{ __('Modifier') }}
                                                               </button>
                                                           </div>
                                                       </div>
                                               </div>
         </form>
</div>
@endsection

@extends('layouts.master')
@section('content')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
        @endforeach

    </ul>
</div>
@endif
<div align="right">
<a href="{{route('annonces.index')}}" class="btn btn-default ">Return</a>
</div>
<form method="POST" action="{{route('annonces.store')}}" enctype="multipart/form-data">
    @csrf
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">{{ __('Ad Aricles') }}</div>


                                 <div class="col-6">
                                     <label for="titre">Titre *:</label>
                                     <input type="text" name="title" class="form-control">
                                 </div>

                                 <div class="form-group col-md-10">
                                        <label for="description">Description Article *:</label>
                                        <textarea class="form-control" name="description"  rows="2"></textarea>
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
                                 </div>

                                 <div class="form-group col-md-8">
                                    <div class="input-group mb-3">
                                         <div class="input-group-prepend">
                                           <span class="input-group-text" >Images</span>
                                         </div>
                                         <div class="custom-file">
                                           <input type="file" name="image2" class="custom-file-input"
                                             aria-describedby="inputGroupFileAddon01">
                                           <label class="custom-file-label btn btn-ptimary" for="inputGroupFile01">Choose Image 2</label>
                                         </div>
                                    </div>
                             </div>

                             <div class="form-group col-md-8">
                                <div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                       <span class="input-group-text" id="inputGroupFileAddon01">Images</span>
                                     </div>
                                     <div class="custom-file">
                                       <input type="file"  name="image3" class="custom-file-input"
                                         aria-describedby="inputGroupFileAddon01">
                                       <label class="custom-file-label btn btn-ptimary" for="inputGroupFile01">Choose Image 3</label>
                                     </div>
                                </div>
                         </div>

                         <div class="form-group col-md-8">
                            <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                   <span class="input-group-text" id="inputGroupFileAddon01">Images</span>
                                 </div>
                                 <div class="custom-file">
                                   <input type="file" name="image4" class="custom-file-input"
                                     aria-describedby="inputGroupFileAddon01">
                                   <label class="custom-file-label btn btn-ptimary" for="inputGroupFile01">Choose Image 4</label>
                                 </div>
                            </div>
                     </div>
                                 <div class="form-group col-md-8 ">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">

                                          <label class="input-group-text" for="inputGroupSelect01">Catégories</label>
                                        </div>
                                        <select class="custom-select text-uppercase" name="category">
                                            @foreach ($categories as $category)
                                             <option class="text-uppercase" value="{{$category->id}}">{{$category->category}}</option>

                                          @endforeach
                                        </select>
                                    </div>
                                 </div>

                                 <div class="form-group col-md-8 ">
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
                                     </div>
                                     <div class="form-group col-md-8 ">
                                     <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text">DHs</span>
                                        </div>
                                        <input type="number" min="0.00" max="100000.00" step="0.50" class="form-control" name="prix" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                          <span class="input-group-text">.00</span>
                                        </div>
                                     </div>
                                     </div>
                                     <div class="col-md-12">
                                        <label for="is_delete" class="col-md-4 col-form-label text-md-right">{{ __('approved') }}</label>
                                        <input type="radio" aria-label="Radio button for following text input" name="approved" value="1">
                                     </div>

                                 <div class="form-group col-md-10">
                                    <div class="form-group ">
                                        <div class="col-md-10 offset-md-4">
                                            <button style="float:right;" type="submit" class="btn btn-primary">
                                                {{ __('publier') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                             </div>
                          </div>
                     </div>
                 </div>
             </div>
</form>



@endsection

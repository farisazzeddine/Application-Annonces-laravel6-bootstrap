@extends('layouts.master')
@section('content')
<div class="jumbotron text-left">

    <div align="right">
    <a href="{{route('annonces.index')}}" class="btn btn-success"> Return</a>
    </div>
    <div class="container">
            <div class="row details_row">

            <div class="col-lg-6">
            <div class="details_image">
            <div class="details_image_large"><img src="/storage/{{$annonces->image1}}" alt=""><div class="product_extra product_new"><a href="">{{$annonces ->category->category}}</a></div></div>
            <div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
     <div class="details_image_thumbnail active" data-image="/storage/{{$annonces->image1}}"><img src="/storage/{{$annonces->image1}}" width="100" alt=""></div>
            <div class="details_image_thumbnail" data-image="/storage/{{$annonces->image2}}"><img src="/storage/{{$annonces->image2}}" width="100" alt=""></div>
            <div class="details_image_thumbnail" data-image="/storage/{{$annonces->image3}}"><img src="/storage/{{$annonces->image3}}" width="100" alt=""></div>
            <div class="details_image_thumbnail" data-image="/storage/{{$annonces->image4}}"><img src="/storage/{{$annonces->image4}}" width="100" alt=""></div>
            </div>
            </div>
            </div>

            <div class="col-lg-6">


            <div class="in_stock_container">

                    <p class="text-uppercase" >{{$annonces ->title}}</p>

            <div class="description_title" style="color:darkblue"><strong>Description</strong></div>
            <div class="description_text ">
                    <p class="text-justify font-italic">{{$annonces ->description}}</p>
             </div>
             <div class="details_content">

            <div class="details_discount"><p class="font-weight-bold">PRIX: {{$annonces ->price}} DHs </p></div>
            </div>
            </div>


            <div class="product_quantity_container">
                    <p class="text-capitalize ">Ville: <span class="text-uppercaset font-weight-bold">{{$annonces ->city->city}}<span></p>
            <div class="product_quantity clearfix">
                    <p class="text-capitalize font-weight-bold">numero de téléphone:<span class="font-weight-light"> {{$annonces ->user->phone}}<span></p>
            <div class="quantity_buttons">
            <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
            <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
            </div>
            </div>


            </div>
            </div>
            </div>
            </div>
            <div class="row description_row">
            <div class="col">


            <div class="col-md-11 mt-3 mb-4 text-right">
                    <small class="text-muted"><strong>Article poster par: </strong>{{$annonces ->user->username}} </small>
                    <br>
                    <small class="text-muted"><strong>le: </strong>{{$annonces ->created_at}} </small>
            </div>

            </div>
            </div>
            </div>

@endsection

<?php

namespace App\Http\Controllers;
use App\Annonce;
use App\Category;
use App\City;

use Illuminate\Http\Request;
use Auth;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function accueil(){

    $categories=Category::all();
    $cities=City::all();
    $annonces=Annonce::OrderBy('id','DESC')->paginate(10);
    return view('annonces.accueil', compact('annonces','categories','cities'))->with('i',(request()->input('page', 1) - 1) * 10);
}

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $annonces=Annonce::OrderBy('id','DESC')->paginate(5);
        return view('annonces.dashbord', compact('annonces'))->with('i',(request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $cities=City::all();
        return view('annonces.create', compact('categories','cities'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::id();
        $request->validate([
            'title'      =>  'required',
            'description'=>  'required',
            'image1'    =>  'required|image|max:4048',
            'image2'     =>  'required|image|max:4048',
            'image3'     =>  'required|image|max:4048',
            'image4'     =>  'required|image|max:4048',
            'city'       =>  'required',
            'category'   =>  'required',
            'approved'=>  'required',
            'prix'=>  'required',
        ]);


        $image1 = $request->file('image1');
        $imageName1 = rand() . '.' . $image1->getClientOriginalExtension();
        request()->image1->move(public_path('storage'), $imageName1);


        $image2 = $request->file('image2');
    	$imageName2 = rand() . '.' . $image2->getClientOriginalExtension();
        request()->image2->move(public_path('storage'), $imageName2);

        $image3 = $request->file('image3');
    	$imageName3 = rand() . '.' . $image3->getClientOriginalExtension();
        request()->image3->move(public_path('storage'), $imageName3);

        $image4 = $request->file('image4');
    	$imageName4 = rand() . '.' . $image4->getClientOriginalExtension();
        request()->image4->move(public_path('storage'), $imageName4);


            $article=array(
                'title'=>$request->title,
                'description'=>$request->description,
                'image1'=>$imageName1,
                'image2'=>$imageName2,
                'image3'=>$imageName3,
                'image4'=>$imageName4,
                'city_id'=> $request->city,
                'category_id'=> $request->category,
                'is_approved'=> $request->approved,
                'price'=> $request->prix,
                'user_id'=>$id,
            );
            Annonce::create($article);


        return  redirect('/annonces')->with('success','ARTICLE PUBLIÉ AVEC SUCCÈS');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce)
    {
        $annonces=Annonce::where('annonces.id',$annonce->id)->first();
        return view('annonces.show', compact('annonces'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $annonce)
    {
        $annonces=Annonce::where('annonces.id',$annonce->id)->first();
        $categories=Category::all();
         $cities=City::all();
         return view('annonces.edit', compact('annonces','categories','cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annonce $annonce)
    {
        $image_name = $request->hidden_image;
        $image1 = $request->file('image1');
 if($image1 !='')
 {
    $image_name = rand() . '.' . $image1->getClientOriginalExtension();
    request()->image1->move(public_path('storage'), $image_name);
 }
 else
 {
$request->validate([
    'title'      =>  'required',
    'description'=>  'required',
     'city'      =>  'required',
    'category'   =>  'required',
    'prix'   =>  'required',
    'approved'   =>  'required',
]);
 }
 $article=array(
    'title'      =>$request->title,
    'description'=>$request->description,
    'image1'    =>$image_name,
    'price'     => $request->prix,
    'is_approved' => $request->approved,
    'category_id' => $request->category,
    'city_id'=> $request->city,
);
     Annonce::whereId($annonce->id)->update($article);
     return  redirect('/annonces')->with('success','ARTICLE MODIFIER AVEC SUCCÈS');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     *
     */
    public function destroy(Annonce $annonce)
    {
        $annonces=Annonce::where('annonces.id',$annonce->id)->first();
        $annonces ->delete();
        return  redirect('/annonces')->with('success','ARTICLE EST SUPPRIMER');
    }
    public function search(){
        $categories=Category::all();
        $cities=City::all();
      $search = \Request::get('search');
      $annonces = Annonce::where('title','LIKE','%'.$search.'%')->orwhere('city_id','LIKE','%'.$search.'%')->get();
       /* dd($annonces); */
  /*   if($search !=''){
    $annonces = Annonce::where('title','LIKE','%'.$search.'%')->get();
         if(count($annonces)>0)*/
         return view('annonces.search',compact('annonces','search','cities'));

    }

}

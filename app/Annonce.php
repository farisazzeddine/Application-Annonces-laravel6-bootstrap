<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Annonce extends Model
{
    /*  protected $fillable = [
        'title', 'description', 'image1',
     ]; */
     use SoftDeletes;

    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function city()
    {
        return $this->belongsTo('App\City');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class gallery extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'travel_packages_id' ,
        'image'
    ];

    //rellasi antara gallery dan travel packages
    public function travel_package(){
        //belongsto artinya punyanya siapa
        //travel_packages_id artinya foreign key yang ada di table gallery
        //id adalah owner key
        return $this->belongsTo(travel_package::class, 'travel_packages_id' , 'id');
    }

}

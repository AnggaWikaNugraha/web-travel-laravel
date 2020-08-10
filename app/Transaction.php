<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\TransactionDetail;
use App\travel_package;
use App\User;

class Transaction extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'travel_packages_id', 'users_id', 'additional_visa', 'transaction_total', 'transaction_status'
    ];

    //rellasi antara gallery dan travel packages
    // public function travel_package(){
    //     //belongsto artinya punyanya siapa
    //     //travel_packages_id artinya foreign key yang ada di table gallery
    //     //id adalah owner key
    //     return $this->belongsTo(travel_package::class, 'travel_packages_id' , 'id');
    // }

    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transactions_id', 'id');
    }
    public function travel_package()
    {
        return $this->belongsTo(travel_package::class, 'travel_packages_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
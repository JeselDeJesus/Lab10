<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Pet extends Model
{
    protected $table = 'pets';
    protected $primaryKey = 'id';
    protected $fillable = ['pet_name', 'breed', 'pet_owner', 'address'];
}
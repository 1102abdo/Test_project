<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testmonial extends Model
{
    use HasFactory; 

    protected $table = 'testmonials';

    protected $guarded = ['id'];


    const UPLOADPATH = 'image/';
    


    const UPLOADFIELDS = [];
}

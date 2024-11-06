<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feature extends Model
{
    use HasFactory; 

    protected $table = 'features';

    protected $guarded = ['id'];


    const UPLOADPATH = 'image/';
    


    const UPLOADFIELDS = [];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    use HasFactory;

     // nama tabel
     protected $table = 'experiences';
     // inisiasi primary key
     protected $primary_key = 'ID';
     
     // unable colom timestamp
     public $timestamps = false;
 
     // inisisasi yang bisa diisi
     protected $fillable = [
         'name',
         'date',
         'detail',
         'picture'
     ];
}

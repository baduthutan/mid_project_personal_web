<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

     // nama tabel
     protected $table = 'projects';
     // inisiasi primary key
     protected $primary_key = 'ID';
     
     // unable colom timestamp
     public $timestamps = false;
 
     // inisisasi yang bisa diisi
     protected $fillable = [
         'name',
         'link',
         'detail',
         'picture',
         'type'
     ];
     public function Type()
    {
        return $this->belongsTo('App\Models\ProjectType','type','id');
    }
}
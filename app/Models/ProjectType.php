<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    use HasFactory;
    // nama tabel
    protected $table = 'project_type';
    // inisiasi primary key
    protected $primary_key = 'id';
    protected $fillable = [
        'type'
    ];
    // unable colom timestamp
    public $timestamps = false;

    public function Project()
    {
        return $this->hasMany('App\Models\Projects','type','id');
    }
}

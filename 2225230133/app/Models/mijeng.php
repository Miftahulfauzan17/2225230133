<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mijeng extends Model
{
    use HasFactory;
    protected $table='mijeng';
    protected $fillable=['Nama','NIM','Email','Jabatan'];

    protected $guarded =[];

}

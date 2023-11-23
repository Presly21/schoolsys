<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table= 'roles';
    protected $primarykey= 'id';
    protected $fillable=['name','display_name'];
    use HasFactory;


    static public function getSingle($id){
        return self::find($id);
       }
}

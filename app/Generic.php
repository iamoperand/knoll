<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Generic extends Model

{

    public $fillable = ['id','name','brand','filepath','type','unit','constituent','package','price'];

}
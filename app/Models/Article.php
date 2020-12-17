<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    function getCategory(){
		// bire bir ilişki olduğu için hasOne kullandık.
		return $this->hasOne('App\Models\Category','id','category_id');
        //Bağlanacağımız Model //Bağlanacağımız Sütun //Bağlanacak id
	}

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

     protected $table = 'products';

	public $timestamps = false;

	protected $fillable = [		
		'product_name'
		// 'created_at',
		// 'updated_at'
		// 'client_name',
		// 'client_phone',
		// 'client_email',
		// 'client_address',
		// 'project_name'
	];

	// public function quotes(){
	
	// 	return $this->hasMany(Quote::class);
	// }

	public function users()
    {

    	// se referencia a la tabla pivot users_products y no a los id
    	return $this->belongsToMany(User::class, 'users_products');

        // return $this->belongsToMany(User::class, 'user_id');

        // return $this->belongsToMany(User::class);
    }
}

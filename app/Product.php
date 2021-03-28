<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $name;
    protected $description;

    protected $table = "products";

    /**
     * Get the images for a product.
     */
    public function productImages()
    {
        return $this->hasMany('App\ImageProduct');
    }
}

<?php

namespace Market\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id','name','price','marks_id'
    ];
    public function mark()
    {
        return $this->hasMany(Mark::class);
    }
}

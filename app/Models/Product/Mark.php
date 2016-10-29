<?php

namespace Market\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $table='marks';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id','name'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

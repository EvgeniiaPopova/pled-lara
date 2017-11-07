<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    /**
     * @var string
     */
    protected $table = 'customers';

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var array
     */
    protected $fillable = [
        'address',
        'type',
        'metro',
    ];

    /**
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected function order()
    {
        return $this->belongsTo('App\Orders', 'order_id');
    }
}

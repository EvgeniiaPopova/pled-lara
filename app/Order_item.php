<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App/Order_items
 *
 * @package App
 * @property integer $id
 * @property integer $pled_id
 * @property integer $quantity
 * @property integer $order_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property integer $customer_id
 * @method \Illuminate\Database\Query\Builder|Order_items whereOrderId($value)
 * @method \Illuminate\Database\Query\Builder|Order_items whereShipping($value)
 *
 *
 */
class Order_items extends Model
{

    /**
     * @var string
     */
    protected $table = 'order_items';

    /**
     * @var bool
     */
    public $timestamps = true;

//    /**
//     * @var array
//     */
//    protected $fillable = [
//        'price',
//        'shipping',
//        'status',
//    ];

    /**
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo('App\Order', 'order_id');
    }
}

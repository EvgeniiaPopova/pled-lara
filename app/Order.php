<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App/Order
 *
 * @package App
 * @property integer $id
 * @property integer $price
 * @property boolean $shipping
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property integer $customer_id
 * @method \Illuminate\Database\Query\Builder|Order whereId($value)
 * @method \Illuminate\Database\Query\Builder|Order whereShipping($value)
 *
 *
 */
class Order extends Model
{
    /**
     * @var string
     */
    protected $table = 'orders';

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var array
     */
    protected $fillable = [
        'price',
        'shipping',
        'status',
    ];

    /**
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function order_items()
    {
        return $this->hasMany('App\Order_item', 'order_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shipping()
    {
        return $this->belongsTo('App\Shipping', 'order_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function customers()
    {
        return $this->hasOne('App\Customer', 'customer_id');
    }
}

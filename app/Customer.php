<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Customer
 * @package App
 * @property integer $id
 * @property string $name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property \Carbon\Carbon created_at
 * @property \Carbon\Carbon updates_at
 *
 */
class Customer extends Model
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
        'name',
        'last_name',
        'email',
        'phone',
    ];

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
    public function customers()
    {
        return $this->belongsTo('App\Order', 'customer_id');
    }
}

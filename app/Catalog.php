<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Catalog
 *
 * @package App
 * @property integer $id
 * @property string $name_pled
 * @property integer $price
 * @property string $image_url
 * @property string $pled_type
 * @property boolean $in_stock
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|Catalog whereId($value)
 */
class Catalog extends Model
{
    /**
     * @var string
     */
    protected $table = 'catalog';

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var array
     */
    protected $fillable = [
        'name_pled',
        'price',
        'image_url',
        'pled_type',
        'in_stock'
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
        return $this->hasMany('App\Catalog', 'pled_id');
    }
}

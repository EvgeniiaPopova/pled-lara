<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    /**
     * @var string
     */
    protected $table = 'orders';

    /**
     * @var bool
     */
    public $timestamps = true;


}

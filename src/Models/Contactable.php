<?php

namespace Viitortest\Contactable\Models;

use Illuminate\Database\Eloquent\Model;

class Contactable extends Model
{
    /**
     * @var string
     */
    protected $table = 'contactable';

    /**
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email','phone','birth_date','order','is_primary','extra_attributes'
    ];
}

<?php

namespace Viitortest\Contactable\Models;

use Illuminate\Database\Eloquent\Model;

class Contactable extends Model
{
    public function getTable()
    {
        return config('contact-table.tables.contacts');
    }
    
    /**
     * @var string
     */

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'email','phone'
    ];

  
}

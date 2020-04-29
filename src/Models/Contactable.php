<?php

namespace Viitortest\Contactable\Models;

use Illuminate\Database\Eloquent\Model;

class Contactable extends Model
{
    // Set eloquent model table name from config file
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

<?php
namespace Viitortest\Contactable\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Viitortest\Contactable\Models\Contactable;


/**
 * Trait Contactable
 * @package Vcian\Contactable\Traits
 */
trait HasContacts
{
    /**
     * @param $related
     * @param $name
     * @param null $type
     * @param null $id
     * @param null $localKey
     * @return mixed
     */
    abstract public function morphMany($related, $name, $type = null, $id = null, $localKey = null);

    /**
     * @return MorphMany
     */
    public function contacts(): MorphMany
    {
        return $this->morphMany(Contactable::class, 'model');
    }
}
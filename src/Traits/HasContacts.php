<?php
namespace Viitortest\Contactable\Traits;

use App\User;
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

    /**
     * Create single contact using this method.
     * @param array $data
     */
    public function addContact($data){
        return $this->contacts()->create($data);
    }

    /**
     * Create multiple contacts using this method.
     * @param  array  $records
     */
    public function addManyContacts(array $records)
    {
        foreach ($records as $record) {
            $this->contacts()->create($record);
        }
    }
}
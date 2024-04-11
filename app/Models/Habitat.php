<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $adresse
 * @property string $superficie
 * @property string $type
 * @property string $ville
 * @property string $quartier
 * @property string $photo
 * @property string $created_at
 * @property string $updated_at
 * @property Locative[] $locatives
 */
class Habitat extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['adresse', 'superficie', 'type', 'ville', 'quartier', 'photo', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function locatives()
    {
        return $this->hasMany('App\Models\Locative');
    }
}

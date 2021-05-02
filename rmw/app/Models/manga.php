<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manga extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mangas';

    /**
     * The attributes that are mass assignable
     * 
     * @property varchar $titre
     * @property varchar $auteur
     * @property varchar $type
     * @property varchar $image
     * @property text $description
     */

    protected $fillable = [
        'titre',
        'auteur',
        'type',
        'image',
        'chapitres',
        'description'
    ];
}

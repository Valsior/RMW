<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mangacategorie extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mangacategories';

    /**
     * The attributes that are mass assignable
     * 
     * @property int $manga_id
     * @property int $categorie_id
     */

    protected $fillable = [
        'manga_id',
        'categorie_id'
    ];
}

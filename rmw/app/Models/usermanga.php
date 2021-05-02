<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usermanga extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'usermangas';

    /**
     * The attributes that are mass assignable
     * 
     * @property int $manga_id
     * @property int $user_id
     */

    protected $fillable = [
        'manga_id',
        'user_id',
        'chapitre'
    ];
}

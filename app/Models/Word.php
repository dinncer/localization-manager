<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    /**
     * @var string
     */
    protected $table = 'projects_word';

    /**
     * @var string
     */
    protected $primaryKey = 'id_word';
}

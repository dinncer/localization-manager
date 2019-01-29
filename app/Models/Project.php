<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Project extends Model
{
    /**
     * @var string
     */
    protected $table = 'projects';

    /**
     * @var string
     */
    protected $primaryKey = 'id_project';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title'
    ];
}

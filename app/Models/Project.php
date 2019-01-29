<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}

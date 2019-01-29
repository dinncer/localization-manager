<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    /**
     * @var string
     */
    protected $table = 'languages';

    /**
     * @var string
     */
    protected $primaryKey = 'id_language';
}

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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'vocable', 'version', 'language_id', 'project_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo('App\Models\Project', 'project_id', 'id_project');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function language()
    {
        return $this->belongsTo('App\Models\Language', 'language_id', 'id_language');
    }
}

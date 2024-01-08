<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiList extends Model
{
    use HasFactory;

    public $table = 'api_list';

    protected $fillable = [
        'method',
        'path',
        'title',
        'auth',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
        'projects_id',
    ];


    public function project()
    {
        return $this->belongsTo(Project::class, 'projects_id');
    }

    public function apiListResponses()
    {
        return $this->hasMany(ApiListResponse::class, 'api_lists_id');
    }

}

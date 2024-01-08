<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiListResponse extends Model
{
    use HasFactory;

    public $table = 'response';

    protected $fillable = [
        'status',
        'description',
        'content',
        'created_at',
        'updated_at',
        'deleted_at',
        'api_lists_id',
    ];

    public function apiList()
    {
        return $this->belongsTo(ApiList::class, 'api_lists_id');
    }

}

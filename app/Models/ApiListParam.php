<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiListParam extends Model
{
    use HasFactory;

    public $table = 'params';

    protected $fillable = [
        'name',
        'type',
        'description',
        'api_lists_id',
    ];

    public function apiList()
    {
        return $this->belongsTo(ApiList::class, 'api_lists_id');
    }

}

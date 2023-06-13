<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'mobile',
        'source',
        'count_of_visits',
        'last_visit',
        'user_id',
    ];

    public function added_by(): BelongsTo
    {
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
}

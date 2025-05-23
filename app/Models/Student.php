<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['group_id', 'surname', 'name'];

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    protected $table = 'groups';
    protected $fillable = ['title', 'start_from', 'is_active'];

    public function students(): hasMany
    {
        return $this->hasMany(Student::class, 'group_id');
    }
}

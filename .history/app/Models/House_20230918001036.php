<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class House extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function students():HasMany
    {
        return $this->hasMany(Student::class);
    }
}

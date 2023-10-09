<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model

{
    use HasFactory;
    protected $guarded=[];
    public function grade():BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }
    public function house():BelongsTo
    {
        return $this->belongsTo(House::class);
    }
    public function subjects():BelongsToMany
    {
        return $this->belongsTomany(Subject::class,StudentSubject::class);
    }
    public function user():BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }

}

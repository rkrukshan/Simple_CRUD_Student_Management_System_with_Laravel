<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    public function subjects():BelongsTo
    {
        return $this->belongsTo(House::class);
    }

}

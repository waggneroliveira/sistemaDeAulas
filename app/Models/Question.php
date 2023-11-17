<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Question extends Model
{
    use HasFactory, SoftDeletes, LogsActivity;

    protected $fillable = [
        'question_text',
        'options',
        'correct_option',
        'active',
    ];

    public function options(){
        return $this->belongsTo(Option::class, 'id');
    }
}

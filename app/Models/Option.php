<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Option extends Model
{
    use HasFactory, SoftDeletes, LogsActivity;

    protected $fillable = [
        'response',
        'correct_option',
        'sorting',
        'question_id'
    ];

    public function question(){
        return $this->hasMany(Question::class,'id');
    }
}

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
    protected static $logAttributes = [
        'response',
        'correct_option',
        'sorting',
        'question_id'
    ];

    protected static $logOnlyDirty = true;

    public function customProperties()
    {
        $properties = [];

        foreach (static::$logAttributes as $attribute) {
            $properties['old'][$attribute] = $this->getOriginal($attribute);
            $properties['new'][$attribute] = $this->getAttribute($attribute);
        }

        return $properties;
    }
    public function question(){
        return $this->hasMany(Question::class,'id');
    }

    public function scopeSorting($query){
        return $query->orderBy('sorting', 'ASC');
    }
}

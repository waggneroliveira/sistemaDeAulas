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
        'active',
        'sorting',
    ];
    protected static $logAttributes = [
        'question_text',
        'active',
        'sorting',
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

    public function options(){
        return $this->belongsTo(Option::class, 'id');
    }

    public function scopeSorting($query){
        return $query->orderBy('sorting', 'ASC');
    }
}

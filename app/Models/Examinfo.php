<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

class Examinfo extends Model
{
    use HasFactory;
    protected $fillable=
        [
            'Teacher_id',
            'Teacher_name',
            'Course',
            'question_length',
            'uniqueid',
            'time'
        ];
public function question()
    {
        return $this->hasOne(Question::class);
    }
}

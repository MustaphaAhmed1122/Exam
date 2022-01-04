<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Answer extends Model
{
    use HasFactory;
    protected $fillable=
        [
            'student_id',
            'question',
            'given_answer',
            'true_answer'
        ];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Answer;
class Student extends Model
{
    use HasFactory;
    protected $fillable=
        [
            'student_id',
            'student_name',
            'student_phone',
            'student_address',
            'uniqueid',
            'score'
        ];
public function answer()
    {
        return $this->hasMany(Answer::class);
    }
}

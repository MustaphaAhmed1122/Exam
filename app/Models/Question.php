<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Examinfo;
class Question extends Model
{
    use HasFactory;
    protected $fillable=
        [
            'quiz_id',
            'question',
            'choice1',
            'choice2',
            'choice3',
            'choice4',
            'answer'
        ];
    public function examinfo()
    {
        return $this->belongsTo(Examinfo::class);
    }

}

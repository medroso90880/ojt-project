<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student_info;

class Family_bg extends Model
{
    use HasFactory;
    
    public function student_info() {
        return $this->belongsTo(Student_info::class, 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student_info;

class Health_physical_dev extends Model
{
    use HasFactory;

    public function student_info() {
        return $this->belongsTo(Student_info::class, 'id');
    }
}

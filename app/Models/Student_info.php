<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Student_info extends Model
{
    use HasFactory;
    use Sortable;
    
    public function scopeFilter($query, array $filters)
    {
        if($filters['search'] ?? false) {
            $query->where('first_name','like','%' . request('search') . '%')
                ->orwhere('last_name','like','%' . request('search') . '%'); 
        }
    }
}

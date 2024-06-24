<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'administration_id', 'department_id', 'present'];

    public function administration()
    {
        return $this->belongsTo(Administration::class, 'administration_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}

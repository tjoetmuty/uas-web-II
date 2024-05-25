<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'task',
        'start_date',
        'end_date',
        'notes',
        'priority',
        'status',
        'asignee',
        'category_task',
    ];
}

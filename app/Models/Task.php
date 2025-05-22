<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
    'id',
    'name', // atau kolom lain yang kamu punya
    'reminder_at',
    'due_date',
];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'avatar',
        'status',
        'userId',
        'subjectId',
    ];
    protected $primaryKey = 'id';
    protected $table = 'classes';
}

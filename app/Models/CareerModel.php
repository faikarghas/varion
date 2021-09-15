<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "career";
    protected $fillable = ['idCareer','name', 'description','status','location'];
}

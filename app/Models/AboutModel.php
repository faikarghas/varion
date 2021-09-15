<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "about";
    protected $primaryKey = 'idAbout';
    protected $fillable = ['idAbout','name', 'title','description','imageFront','imageBack','investment','business','capital'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfoModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "contact_info";
    protected $fillable = ['idContactInfo','description', 'address','phone','fax','email'];
}

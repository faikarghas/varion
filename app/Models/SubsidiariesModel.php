<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubsidiariesModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "subsidiaries";
    protected $primaryKey = 'idSubsidiaries';
    protected $fillable = ['idSubsidiaries','name', 'title','titleHome','titleHeader','shortDescription','shortDescriptionHome','description','imageFront','imageBack','imageBack','imageHome','imagHome1','imagHome2','imageHeader1','imageHeader2','imageInvesment','imageBusiness','imageCapital','imageFooter','imageFooter2'];
}

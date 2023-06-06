<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "SubCategory";
    protected $fillable = ['name','description','state', 'category_id'];
}

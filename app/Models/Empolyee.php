<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empolyee extends Model
{
    use HasFactory;

    protected $table="empolyees";
    protected $fillable=["name","email","phone_no","gender","age"];
}

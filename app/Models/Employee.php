<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table="empolyees";
    protected $fillable=["name","email","phone_no","gender","age"];
}

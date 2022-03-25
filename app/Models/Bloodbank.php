<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloodbank extends Model
{
    use HasFactory;
    protected $fillable = ['name','location','pin','number','contact_person','status'];
}

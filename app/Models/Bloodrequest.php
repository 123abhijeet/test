<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloodrequest extends Model
{
    use HasFactory;
    protected $fillable = ['userid','request_number','patient_name','type','unit','blood_group','required_date','requisition_form','location','pin','hospital','patient_status','status','donation_status'];
}

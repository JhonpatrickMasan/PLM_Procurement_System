<?php

// app/Models/Procurement.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'procurement_project',
        'pmo',
        'procurement_act',
        'mop',
        'pre_pro_conference',
        'ads',
        'eligibility_check',
        'sub',
        'bid_eval',
        'post_qual',
        'bac_resolution_award',
        'notice_award',
        'contract_signing',
        'notice_proceed',
        'delivery',
        'inspection',
        'total',
        'mooe',
        'co',
        'remarks',
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable =[
        'customerName' , 'customerMobile' , 'customerInvitedBy' , 'customerCount_Of_Visits' , 'customerLast_Visit' , 'customerAdded_by'
    ];
}

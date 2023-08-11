<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorContactPerson extends Model
{
    use HasFactory;

    public function presontype()
    {
        return $this->belongsTo(TblVendorPersonType::class,'person_type','id');
    }
}

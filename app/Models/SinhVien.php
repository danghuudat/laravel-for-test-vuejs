<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    use HasFactory;

    public function hocLuc()
    {
        return $this->hasOne(HocLuc::class, 'id', 'hocluc');
    }
}

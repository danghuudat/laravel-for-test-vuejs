<?php


namespace App\Http\Services;


use App\Models\SinhVien;

class SinhVienService
{
    protected SinhVien $sinhVien;

    public function __construct(SinhVien $sinhVien)
    {
        $this->sinhVien = $sinhVien;
    }

    public function getList($hocluc){
        $query = SinhVien::query()->with("hocluc");
        if($hocluc != 0){
            $query = $query->where('hocluc', '=', $hocluc);
        }
        $query = $query->paginate(15);
        return $query;
    }
}


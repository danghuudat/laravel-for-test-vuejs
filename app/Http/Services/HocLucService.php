<?php


namespace App\Http\Services;


use App\Models\HocLuc;
use App\Models\SinhVien;

class HocLucService
{
    protected HocLuc $hocLuc;

    public function __construct(HocLuc $hocluc)
    {
        $this->hocluc = $hocluc;
    }

    public function getList(){
        return HocLuc::query()->get();
    }

    public function getDetail($id){
        return HocLuc::query()->find($id);
    }
}


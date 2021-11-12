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

    public function getDetail($id){
        return SinhVien::query()->find($id);
    }

    public function update($request, $id){
        $sinhvien = SinhVien::query()->find($id);
        $sinhvien->name = $request['name'];
        $sinhvien->ho = $request['ho'];
        $sinhvien->email = $request['email'];
        $sinhvien->lop = $request['lop'];
        $sinhvien->hocluc = $request['hocluc']['id'];
        $sinhvien->save();
        return $sinhvien;
    }

    public function delete($id){
        return SinhVien::destroy($id);
    }
}


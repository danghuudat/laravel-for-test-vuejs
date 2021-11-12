<?php


namespace App\Http\Services;


use App\Models\Lop;
use App\Models\SinhVien;

class LopService
{
    protected Lop $lop;

    public function __construct(Lop $lop)
    {
        $this->lop = $lop;
    }

    public function getList(){
        return Lop::all();
    }

    public function getSinhVienByLop($id){
        return SinhVien::query()
            ->join('lops','sinh_viens.lop','=','lops.id')
            ->select('sinh_viens.*', 'lops.name as ten_lop')
            ->with('hocluc')
            ->where('lops.id','=',$id)
            ->paginate(15);
    }
}


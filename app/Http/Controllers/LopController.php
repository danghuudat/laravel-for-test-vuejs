<?php

namespace App\Http\Controllers;

use App\Http\Services\LopService;
use App\Http\Services\SinhVienService;
use App\Models\Lop;
use Illuminate\Http\Request;

class LopController extends Controller
{

    protected LopService $lopService;

    public function __construct(LopService $lopService)
    {
        $this->lopService = $lopService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return response($this->lopService->getList());
    }

    public function getSinhVienByLop($id){
        return response($this->lopService->getSinhVienByLop($id));
    }

}

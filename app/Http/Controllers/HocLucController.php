<?php

namespace App\Http\Controllers;

use App\Http\Services\HocLucService;
use App\Http\Services\SinhVienService;
use Illuminate\Http\Request;

class HocLucController extends Controller
{
    protected HocLucService $hocLucService;

    public function __construct(HocLucService $hocLucService)
    {
        $this->hocLucService = $hocLucService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response($this->hocLucService->getList());
    }
}

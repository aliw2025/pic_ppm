<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function addAsset(Request $request){

        return view('Assets.add-asset');

    }
    public function addVendor(Request $request){

        return view('vendor.add-vendor');

    }

    public function vendors(Request $request){

        return view('vendor.vendors');

    }
    public function ppmDetail(Request $request){
        return view('ppm.ppm-detail');
    }
    public function gpDetail(Request $request){
        return view('ppm.gate-pass-details');
    }
    public function ppmList(Request $request){
        return view('ppm.ppm-list');
    }
}

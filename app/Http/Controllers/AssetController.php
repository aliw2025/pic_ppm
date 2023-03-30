<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TblEquipmentStatus;
use App\Models\TblFloor;
use App\Models\TblDepartment;
use App\Models\Vendor;
use Webmozart\Assert\Assert;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    
    public function assetsList(){
        
        $assets = Asset::all();
        
        return view('Assets.asset-list',compact('assets'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendors = Vendor::all();
        $floors = TblFloor::all();
        $eq_status = TblEquipmentStatus::all();
        $departments = TblDepartment::all();
        return view('Assets.add-asset',compact('eq_status','floors','departments','vendors'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $asset = new Asset();
        $asset->asset_technical_category = $request->asset_tech_cat;
        $asset->equipment_category_name = $request->equipment_category_name;
        $asset->equipment_type = $request->equipment_type;
        $asset->manufacturer=$request->manufacturer;
        $asset->model = $request->model;
        $asset->serial_number=$request->serial_number;
        $asset->fa_number = $request->fa_number;
        $asset->equipment_sequence_number = $request->equipment_seq_number;
        $asset->manufacture_date = $request->manufacture_date;
        $asset->installation_date = $request->installtion_date;
        $asset->equipment_status = $request->asset_status;
        // $asset->manual_file_path;
        $asset->vendor = $request->vendor;
        $asset->room_area = $request->room_area;
        $asset->section=$request->section;
        $asset->sub_section= $request->sub_section;
        $asset->custodian_name=$request->custodian_name;
        $asset->office_extention=$request->custodian_ofc_ext;
        $asset->mobile=$request->custodian_mobile;
        $asset->email=$request->custodian_email;
        // $asset->last_ppm_date;
        // $asset->next_ppm_date;
        // $asset->building_block = $request->building_block;
        $asset->floor= $request->floor;
        $asset->department=$request->deparment;
        $asset->save();
        // $asset->ppm_type;
        return Asset::all();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asset $asset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asset $asset)
    {
        //
    }
}

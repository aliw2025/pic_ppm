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
        $asset->equipment_category_name;
        $asset->equipment_type;
        $asset->manufacturer;
        $asset->model;
        $asset->serial_number;
        $asset->fa_number;
        $asset->equipment_sequence_number;
        $asset->manufacture_date;
        $asset->installation_date;
        $asset->manual_file_path;
        $asset->room_area;
        $asset->section;
        $asset->sub_section;
        $asset->custodian_name;
        $asset->office_extention;
        $asset->mobile;
        $asset->email;
        $asset->last_ppm_date;
        $asset->next_ppm_date;
        $asset->asset_technical_category;
        $asset->equipment_status;
        $asset->vendor;
        $asset->building_block;
        $asset->floor;
        $asset->department;
        $asset->ppm_type;
        dd($request->all());

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

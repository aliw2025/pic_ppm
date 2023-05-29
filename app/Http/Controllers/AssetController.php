<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Http\Controllers\Controller;
use App\Models\TblAssetImages;
use App\Models\TblBuildingBlock;
use Illuminate\Http\Request;
use App\Models\TblEquipmentStatus;
use App\Models\TblFloor;
use App\Models\TblDepartment;
use App\Models\TblPpmType;
use App\Models\TblScheduleType;
use App\Models\Vendor;
use App\Models\User;    
use Webmozart\Assert\Assert;
use Storage;

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

    public function assetsList()
    {

        $assets = Asset::all();
        return view('Assets.asset-list', compact('assets'));

    }

    public function getDeptAssets(Request $request){

        
        $assets = Asset::where('asset_technical_category',$request->id)->get();

        return $assets;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $vendors = Vendor::all();   
        $floors = TblFloor::all();
        $eq_status = TblEquipmentStatus::all();
        $departments = TblDepartment::all();
        $blocks = TblBuildingBlock::all();

        $ppmTypes = TblPpmType::all();
        $scheduleTypes = TblScheduleType::all();

        return view('Assets.add-asset', compact('eq_status', 'floors', 'departments', 'vendors', 'blocks','users','ppmTypes','scheduleTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'file_name' => 'required'
        // ]);
        //
        $asset = new Asset();
        $asset->asset_technical_category = $request->asset_tech_cat;
        $asset->equipment_category_name = $request->equipment_category_name;
        $asset->equipment_type = $request->equipment_type;
        $asset->manufacturer = $request->manufacturer;
        $asset->model = $request->model;
        $asset->serial_number = $request->serial_number;
        $asset->fa_number = $request->fa_number;
        $asset->equipment_sequence_number = $request->equipment_seq_number;
        $asset->manufacture_date = $request->manufacture_date;
        $asset->installation_date = $request->installation_date;
        $asset->equipment_status = $request->asset_status;
        // $asset->manual_file_path;
        $asset->vendor = $request->vendor;
        $asset->room_area = $request->room_area;
        $asset->section = $request->section;
        $asset->sub_section = $request->sub_section;
        $asset->custodian_name = $request->custodian_name;
        $asset->office_extention = $request->custodian_ofc_ext;
        $asset->mobile = $request->custodian_mobile;
        $asset->email = $request->custodian_email;
        // $asset->last_ppm_date;
        // $asset->next_ppm_date;
        $asset->building_block = $request->building_block;
        $asset->floor = $request->floor;
        $asset->department = $request->deparment;

        if ($request->hasFile('file_name')) {
            $file = $request->file('file_name');
            // dd($file);s
            $fileName = $file->getClientOriginalName();
            $filePath = $request->file('file_name')->storeAs('uploads', $fileName, 'public');
            $asset->manual_file_name = $file->getClientOriginalName();
            $asset->manual_file_path = url('/') . '/public/storage/' . $filePath;
        }

        $asset->save();

        $vendors = Vendor::all();
        $floors = TblFloor::all();
        $eq_status = TblEquipmentStatus::all();
        $departments = TblDepartment::all();
        $blocks = TblBuildingBlock::all();
        // $asset->ppm_type;
        return view('Assets.add-asset', compact('asset', 'eq_status', 'floors', 'departments', 'vendors', 'blocks'));
    }

    public function selectAsset($id)
    {


        $vendors = Vendor::all();
        $floors = TblFloor::all();
        $eq_status = TblEquipmentStatus::all();
        $departments = TblDepartment::all();
        $blocks = TblBuildingBlock::all();
        $asset = Asset::find($id);
        $ppmTypes = TblPpmType::all();
        $scheduleTypes = TblScheduleType::all();
        // $asset->ppm_type;
        return view('Assets.add-asset', compact('asset', 'eq_status', 'floors', 'departments', 'vendors', 'blocks','ppmTypes','scheduleTypes'));
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
        return redirect()->route('select-asset', $asset->id);
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

    // this is not the way to finalize
    public function finalizeSchedule(Request $request){

        
        dd($request->all());

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
        $asset->asset_technical_category = $request->asset_tech_cat;
        $asset->equipment_category_name = $request->equipment_category_name;
        $asset->equipment_type = $request->equipment_type;
        $asset->manufacturer = $request->manufacturer;
        $asset->model = $request->model;
        $asset->serial_number = $request->serial_number;
        $asset->fa_number = $request->fa_number;
        $asset->equipment_sequence_number = $request->equipment_seq_number;
        $asset->manufacture_date = $request->manufacture_date;
        $asset->installation_date = $request->installation_date;
        $asset->equipment_status = $request->asset_status;
        // $asset->manual_file_path;
        $asset->vendor = $request->vendor;
        $asset->room_area = $request->room_area;
        $asset->section = $request->section;
        $asset->sub_section = $request->sub_section;
        $asset->custodian_name = $request->custodian_name;
        $asset->office_extention = $request->custodian_ofc_ext;
        $asset->mobile = $request->custodian_mobile;
        $asset->email = $request->custodian_email;
        // $asset->last_ppm_date;
        // $asset->next_ppm_date;
        $asset->building_block = $request->building_block;
        $asset->floor = $request->floor;
        $asset->department = $request->deparment;

        if ($request->hasFile('file_name')) {

            $file = $request->file('file_name');
            // dd($file);s
            $fileName = $file->getClientOriginalName();
            $filePath = $request->file('file_name')->storeAs('uploads', $fileName, 'public');
            $asset->manual_file_name = $file->getClientOriginalName();
            $asset->manual_file_path = url('/') . '/public/storage/' . $filePath;
        }


        $asset->save();

        $vendors = Vendor::all();
        $floors = TblFloor::all();
        $eq_status = TblEquipmentStatus::all();
        $departments = TblDepartment::all();
        $blocks = TblBuildingBlock::all();
        // $asset->ppm_type;
        return view('Assets.add-asset', compact('asset', 'eq_status', 'floors', 'departments', 'vendors', 'blocks'));
    }

    public function getAssetDetails(Request $request)
    {

        // dd($request->all());
        $asset = Asset::where('id','=',$request->id)->with('assetImages')->get();;
        
        return $asset;
    }

    public function updateImages(Request $request)
    {


        $asset = Asset::find($request->asset_id);
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
            $image = new TblAssetImages();
            $image->image_path = url('/') . '/public/storage/' . $filePath;
            $image->image_name =  $file->getClientOriginalName();
            $image->active = 1;
            $image->asset_id = $request->asset_id;
            $image->save();
        }

        return redirect()->route('select-asset', $asset->id);
    }


    public function deleteImages(Request $request)
    {
        // dd($request->all());
        $image = TblAssetImages::find($request->image_id);
        // // dd($image->image_path);

        // if(file_exists(storage_path($image->image_path))){
        //     unlink(storage_path($image->image_path));
        //   }else{
        //     dd('File not found');
        //   }
        // if(Storage::exists($image->image_path)){
        //     Storage::delete($image->image_path);
            
        // }else{
        //     dd('File does not exist.');
        // }

       
        $image->delete();
        return redirect()->route('select-asset', $request->asset_id);

        // if (is_file($file)) {
           
        //     // 2. possibility
        //     unlink(storage_path('app/folder/' . $file));
        // } else {
        //     echo "File does not exist";
        // }
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

<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\TblVendorPersonType;
use App\Models\VendorContactPerson;

class VendorController extends Controller
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
    public function create(Request $request)
    {   
        $contact_persons = VendorContactPerson::where('vendor','=',$request->id)->get();
       
        if(isset($request->id)){

            $asset_vendor = Vendor::find($request->id);
            return view('vendors.add-vendor',compact('asset_vendor','contact_persons'));
        }
        
        return view('vendors.add-vendor',compact('contact_persons'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asset_vendor  = new Vendor();
        $asset_vendor->vendor_name  = $request->vendor_name;
        $asset_vendor->save();
        $contact_persons = VendorContactPerson::where('vendor','=',$asset_vendor->id)->get();
        return view('vendors.add-vendor',compact('asset_vendor','contact_persons'));
        
    }

    public function vendorsList(){

        $vendors = Vendor::all();
        return view('vendors.vendors',compact('vendors'));
    }
     public function storeContactPerson(Request $request)
    {
        // dd($request->all());
        // dd("dfdfd");
        // $table->unsignedBigInteger('vendor')->nullable();
        // $table->unsignedBigInteger('person_type')->nullable();
        // $table->string('designation')->nullable();
        // $table->string('email')->nullable();
        // $table->string('landline')->nullable();
        // $table->string('mobile')->nullable();

        $person = new VendorContactPerson();
        $person->name = $request->name;
        $person->person_type = $request->person_type;
        $person->designation = $request->designation;
        $person->email = $request->email;
        $person->landline = $request->landline;
        $person->mobile = $request->mobile;
        $person->vendor = $request->vendor_id;
        $person->save();

        return redirect()->route('vendors.create',$request->vendor_id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        //
    }
}

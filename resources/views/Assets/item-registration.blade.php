 <form method="POST" class="form form-vertical" autocomplete="on" action="{{ route('asset.store') }}">
     @csrf
     <div class="row d-flex ">
         <div class="col-12">
             <div class="card">
                 <div class="card-header">
                     <div class="mt-2 d-flex justify-content-between">
                         <h4>Add New Equipment</h4>
                         <div>
                             <button type="submit" value="submit" class="m-2 mt-2 btn btn-success"> Save </button>
                             <button type="reset" value="submit" class="m-2  mt-2 btn btn-primary"> Reset </button>
                         </div>
                     </div>
                 </div>
                 <div class="card-body">

                     <div class="row">
                         <div class="col-4">
                             <label class="mt-1 form-label">Asset Technical Category </label>
                             <select name="asset_tech_cat" id="" class="form-control">
                                 @foreach ($departments as $dept)
                                     <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                                 @endforeach
                             </select>
                         </div>
                         <div class="col-4">
                             <label class="mt-1 form-label">Equipment Category Name</label>
                             <input name="equipment_category_name" placeholder="Name" type="text"
                                 class="form-control">
                         </div>
                         <div class="col-4">
                             <label class="mt-1 form-label">Equipment Type</label>
                             <input name="equipment_type" placeholder="Equipment Type" type="text"
                                 class="form-control">
                         </div>
                         <div class="col-4">
                             <label class="mt-1 form-label">Manufacturer</label>
                             <input name="manufacturer" placeholder="Manufacturer" type="text" class="form-control">
                         </div>
                         <div class="col-4">
                             <label class="mt-1 form-label">Model</label>
                             <input name="model" placeholder="Model" type="text" class="form-control">
                         </div>
                         <div class="col-4">
                             <label class="mt-1 form-label">Serial number</label>
                             <input name="serial_number" placeholder="Serial number" type="text"
                                 class="form-control">
                         </div>
                         <div class="col-4">
                             <label class="mt-1 form-label">FA #</label>
                             <input name="fa_number" placeholder="FA #" type="text" class="form-control">
                         </div>
                         <div class="col-4">
                             <label class="mt-1 form-label">Equipment Sequence #</label>
                             <input name="equipment_seq_number" placeholder="Equipment Sequence #" type="text"
                                 class="form-control">
                         </div>
                         <div class="col-4">
                             <label class="mt-1 form-label"> Manufacture Date</label>
                             <input name="manufacture_date" placeholder="Manufacture Date" type="date"
                                 class="form-control">
                         </div>
                         <div class="col-4">
                             <label class="mt-1 form-label"> Installation Date</label>
                             <input name="installation_date" placeholder=" Installation Date" type="date"
                                 class="form-control">
                         </div>
                         <div class="col-4">
                             <label class="mt-1 form-label"> Status</label>
                             <select name="asset_status" id="" class="form-control">
                                 @foreach ($eq_status as $status)
                                     <option value="{{ $status->id }}">{{ $status->equipment_status_name }}</option>
                                 @endforeach
                             </select>
                         </div>
                         <div class="col-4">
                             <label for="" class="mt-1 forml-label">Vendor</label>
                             <select name="vendor" id="" class="form-control">
                                @foreach ($vendors as $vendor)
                                     <option value="{{ $vendor->id }}">{{ $vendor->vendor_name }}</option>
                                 @endforeach
                             </select>
                         </div>
                         <div class="col-4">
                             <label class="mt-1 form-label"> Manual</label>
                             <input name="maunal" placeholder="Attach Manual" type="file" class="form-control">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="row">
         <div class="col-12">
             <div class="card">
                 <div class="card-body">
                     <div class="row">
                         <div class="col-3">
                             <label class="mt-1 form-label">Building Block</label>
                             <select name="building_block" id="" class="form-control">
                                 <option value="IPD">IPD</option>
                                 <option value="OPD">OPD</option>

                             </select>
                         </div>
                         <div class="col-3">
                             <label class="mt-1 form-label">Floor</label>
                             <select name="floor" id="" class="form-control">
                                 @foreach ($floors as $floor)
                                     <option value="{{ $floor->id }}">{{ $floor->floor_name }}</option>
                                 @endforeach
                             </select>
                         </div>
                         <div class="col-3">
                             <label class="mt-1 form-label">Department</label>
                             <select name="department" id="" class="form-control">
                                 @foreach ($departments as $dept)
                                     <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                                 @endforeach
                             </select>
                         </div>
                         <div class="col-3">
                             <label class="mt-1 form-label">Room/Area</label>
                             <input name="room_area" type="text" class="form-control">
                         </div>
                         <div class="col-3">
                             <label class="mt-1 form-label">Section</label>
                             <input name="section" placeholder="Section" type="text" class="form-control">
                         </div>
                         <div class="col-3">
                             <label class="mt-1 form-label">Sub Section</label>
                             <input name="sub_section" placeholder="Sub Section" type="text"
                                 class="form-control">
                         </div>
                     </div>
                     <div class="row mt-1">
                         <div class="col-3">
                             <label class="mt-1 form-label"> Custodian Name</label>
                             <input name="custodian_name" placeholder="Custodian Name" type="text"
                                 class="form-control">
                         </div>
                         <div class="col-3">
                             <label class="mt-1 form-label">Office Extention</label>
                             <input name="custodian_ofc_ext" placeholder="Office Extention" type="text"
                                 class="form-control">
                         </div>
                         <div class="col-3">
                             <label class="mt-1 form-label">Mobile</label>
                             <input name="custodian_mobile" placeholder="Mobile" type="text"
                                 class="form-control">
                         </div>
                         <div class="col-3">
                             <label class="mt-1 form-label">Email</label>
                             <input name="custodian_email" placeholder="Email" type="text" class="form-control">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="row">
         <div class="col-12">
             <div class="card">
                 <div class="card-body">
                     <div class="row">
                         <div class="col-3">
                             <label class="mt-1 form-label">PPM Type</label>
                             <select name="ppm_type" id="" class="form-control">
                                 <option value="weekly">Weekly</option>
                                 <option value="Monthly">Monthly</option>
                                 <option selected value="Quarterly">Quarterly</option>
                                 <option value="Bi-Annually">Bi-Annually</option>
                                 <option value="Annually">Annually</option>
                             </select>
                         </div>
                         <div class="col-3">
                             <label class="mt-1 form-label">Last PPM Date</label>
                             <input name="last_ppm_date" type="date" class="form-control">
                         </div>
                         <div class="col-3">
                             <label class="mt-1 form-label">Next PPM Date</label>
                             <input name="next_ppm_date" type="date" class="form-control">
                         </div>

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </form>

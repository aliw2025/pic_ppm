@extends('layout.header')
@section('section')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                   <h4> PPM Detail</h4>
                   <p>Equipment Name</p>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-3">
                                <label for="">Expected date</label>
                                <input type="text" class="form-control" >
                            </div>
                            <div class="col-3">
                                <label for="">Planned date</label>
                                <input type="date" class="form-control" >
                            </div>
                            <div class="col-3">
                                <label for="">Performed date</label>
                                <input type="date" class="form-control" >
                            </div>
                            <div class="col-3">
                                <label for="">Performed by</label>
                               <select name="" id="" class="form-control">
                                   <option value="">Vendor</option>
                                   <option value="">Self</option>
                               </select>
                            </div>

                        </div>
                        <div class="row mt-4">
                            <div class="col-6">
                                <div class="">
                                    <label for="">Checklist / Remarks</label>
                                    <textarea name="" id="" cols="20" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="">
                                    <label for="">Observation</label>
                                    <textarea name="" id="" cols="20" rows="3" class="form-control"></textarea>
                                </div>
                               
                            </div>
                            <div class="col-6">
                                <div class="w-50">
                                    <label for="">Attach Report</label>
                                    <input type="file" class="form-control">
                                </div>
                                
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

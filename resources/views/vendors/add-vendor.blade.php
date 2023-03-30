@extends('layout.header')
@section('section')
<div class="">
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    @if(isset($asset_vendor))
                    <h4> {{ucfirst($asset_vendor->vendor_name) }}</h4>

                    @else
                    <h4>Register Vendor</h4>
                    @endif
                </div>
                <div class="card-body">
                    @if(!isset($asset_vendor))
                    <form method="POST" class="form form-vertical" autocomplete="on" action="{{ route('vendors.store') }}">

                        <div class="row">

                            <div class="col-3">
                                @csrf
                                <label class="mt-1 form-label">Name</label>
                                <input name="vendor_name" @if(isset($asset_vendor)) value="{{$asset_vendor->vendor_name}}" @endif placeholder="Name" type="text" class="form-control">
                            </div>
                        </div>

                        <button type="submit" value="submit" class="m-2 mt-2 btn btn-primary"> Save </button>

                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @if(isset($asset_vendor))
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Contact Persons</h4>
                </div>
                <div id="accordion2" class="row">
                    <div class="col-12 d-flex justify-content-end ">
                        <button data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="btn btn-primary mr-2 mt-2">Add Person</button>
                    </div>
                    <div id="collapseThree" class=" card-body collapse " aria-labelledby="headingOne" data-parent="#accordion2">
                        <div class="">
                            <form action="">
                                <div class="row d-flex align-items-center">
                                    <div class="col-2">
                                        <label for="form-label">Person Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-2">
                                        <label for="form-label">Person Type</label>
                                        <select class="form-control" name="person_type" id="">
                                            <option value="">Primary</option>
                                            <option value="">Secondary</option>
                                            <option value="">Technical</option>
                                            <option value="">Support</option>
                                            <option value="">Sales</option>
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <label for="form-label">Designation</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-2">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-2">
                                        <label for="">Landline</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-2">
                                        <label for="">Mobile</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-2">

                                        <button class="mt-4 btn btn-primary">Add</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <!-- collapse end -->
                    </div>

                </div>
                <div class="row mt-2 card-body">
                    <div class="col-12 mt-2">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>Sr#</th>
                                    <th>Name</th>
                                    <th>Person Type</th>
                                    <th>Designation</th>
                                    <th>Email</th>
                                    <th>landline</th>
                                    <th>Mobile</th>

                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endif


</div>
@endsection
@extends('layout.header')
@section('section')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Work Order </h4>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6 mt-1">
                                                <label for="">Work Order Name</label>
                                                <input placeholder="Work Order Name" type="text" class="form-control">
                                            </div>
                                            <div class="col-6 mt-1">
                                                <label for="form-label">Request Type</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="PPM">PPM</option>
                                                    <option value="PPM">Demand</option>
                                                </select>

                                            </div>
                            
                                            <div class="col-6 mt-1">
                                                <label for="">Priority</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="">High</option>
                                                    <option value="">Medium</option>
                                                    <option value="">Low</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6 mt-1">
                                                <label for="">Due Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-6 mt-1">
                                                <label for="">Status</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="">In Progress</option>
                                                    <option value="">On Hold</option>
                                                </select>
                                            </div>
                                            <div class="col-6 mt-1">
                                                <label for="">Completion Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6 mt-1">
                                                <label for="">Department</label>
                                                <input type="text" class="form-control">
                                            </div>
                                          
                                            <div class="col-6 mt-1">
                                                <label for="">Asset</label>
                                                <input type="text" class="form-control">
                                            </div>
                                           
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6 mt-1">
                                                <label for="">Assigned to</label>
                                                <input type="text" class="form-control">
                                            </div>
                                          
                                           
                                           
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layout.admin-header')
@section('section')
   <div class="card">
       <div class="card-header">
           <h4>Service Categories</h4>
       </div>
       <div class="card-body">
            <div class="form">
                <div class="row">
                    <div class="col-3">
                        <label for="">Category Name</label>
                        <input type="text" name="" id="" class="form-control" placeholder="category Name">
                        {{-- <select name="" id="" class="form-control">
                            <option value="">ICT</option>
                            <option value="BME">BME</option>
                        </select> --}}
                    </div>
                    <div class="col-3 d-flex align-items-end">
                        <button class=" btn btn-primary">+</button>
                    </div>
                    <div class="col-3">

                    </div>
                    <div class="col-3">
                        <label for="">Select Department</label>
                        <select name="" id="" class="form-control">
                            <option value="">ICT</option>
                            <option value="BME">BME</option>
                        </select>
                    </div>
                </div>
               
            </div>
            <table class="mt-2 table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th>Sr#</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{--  --}}
                    <tr >
                        <td>1</td>
                        <td>Server Installation</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Software Setup</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
       </div>
   </div>
    
@endsection

@extends('layout.admin-header')
@section('section')
   <div class="card">
       <div class="card-header">
           <h4>Departments</h4>
           
       </div>
       <div class="card-body">
            <div class="form">
                <div class="row">
                    <div class="col-3">
                        <label for="">Add Department</label>
                        <input type="text" class="form-control" placeholder="Department Name">
                    </div>
                    <div class="col-3 d-flex align-items-end">
                        <button class=" btn btn-primary">+</button>
                    </div>
                </div>
               
            </div>
            <table class="mt-2 table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th>Sr#</th>
                        <th>Department ID</th>
                        <th>Department Name </th>
                        <th>Action</th>
                      
                    </tr>
                </thead>
                <tbody>
                    {{--  --}}
                    <tr >
                        <td>1</td>
                        <td>123</td>
                        <td>ICT</td>
                        <td class=""><i style="font-size: 15px;margin-right:20px" class="fas fa-pen"></i> <i style="font-size: 15px;margin-right:20px" class="fas fa-trash"></i> <i class="fas fa-save"></i></td>

                    </tr>
                    <tr>
                        <td>2</td>
                        <td>123</td>
                        <td>Biomedical Engineering</td>
                        <td class=""><i style="font-size: 15px;margin-right:20px" class="fas fa-pen"></i> <i style="font-size: 15px;margin-right:20px" class="fas fa-trash"></i> <i class="fas fa-save"></i></td>

                    </tr>
                </tbody>
            </table>
       </div>
   </div>
    
@endsection

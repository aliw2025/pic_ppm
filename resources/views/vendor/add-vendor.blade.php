@extends('layout.header')
@section('section')
    <div class="">


        <div class="row ">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Register Vendors</h4>
                    </div>
                    <div class="card-body">

                        <form class="mx-2" action="">
                            <div class="row">
                                <div class="col-3">
                                    <label class="mt-1 form-label">Name</label>
                                    <input placeholder="Name" type="text" class="form-control">
                                </div>
                            </div>


                            


                        </form>
                    </div>
                </div>

            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Contact Persons</h4>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="row d-flex align-items-center">
                                <div class="col-2">
                                    <label for="form-label">Person Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-1">
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
                                    <input type="text" class="form-control"  >
                                </div>
                                <div class="col-2">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" >
                                </div>
                                <div class="col-2">
                                    <label for="">Landline</label>
                                    <input type="text" class="form-control" >
                                </div>
                                <div class="col-2">
                                    <label for="">Mobile</label>
                                    <input type="text" class="form-control" >
                                </div>
                                <div class="col-1">
                                    
                                    <button class="mt-4 btn btn-primary">Add</button>
                                </div>


                            </div>
                            <div class="row mt-2">
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
                                          <tr>
                                            <td>183</td>
                                            <td>John Doe</td>
                                            <td>Primary</td>
                                            <td>Network Engineer</td>
                                            <td>aliw2025@gmail.com</td>
                                            <td>091222225</td>
                                            <td>03400234243</td>
                                          </tr>
                                          <tr>
                                            <td>219</td>
                                            <td>Alexander Pierce</td>
                                            <td>Technical</td>
                                            <td>Support Engineer</td>
                                            <td>aliw2025@gmail.com</td>
                                            <td>091222225</td>
                                            <td>03400234243</td>
                                          </tr>
                                          <tr>
                                            <td>657</td>
                                            <td>Bob Doe</td>
                                            <td>Secondary</td>
                                            <td>IT Technician</td>
                                            <td>aliw2025@gmail.com</td>
                                            <td>091222225</td>
                                            <td>03400234243</td>
                                          </tr>
                                          <tr>
                                            <td>175</td>
                                            <td>Mike Doe</td>
                                            <td>Primary</td>
                                            <td>Technician</td>
                                            <td>aliw2025@gmail.com</td>
                                            <td>091222225</td>
                                            <td>03400234243</td>
                                          </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        
                        </form>
                    </div>
                </div>
            </div>
            {{-- <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Contacts</h4>
                    </div>
                    <div class="card-body">
                        <div class="col-6">
                            <label for="">Email</label>
                            <input type="text" class="form-control" >
                        </div>
                        <div class="col-6">
                            <label for="">Landline</label>
                            <input type="text" class="form-control" >
                        </div>
                        <div class="col-6">
                            <label for="">Mobile</label>
                            <input type="text" class="form-control" >
                        </div>

                        
                        
                    </div>
                </div>
            </div> --}}
        </div>


    </div>
@endsection

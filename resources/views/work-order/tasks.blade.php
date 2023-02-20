<div class="row">
    <div class="col-12">
        <div class="">
            <div id="accordion2" class="row">
                <div class="col-12 d-flex justify-content-end">
                    <button  data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree" class="btn btn-primary">Add Task</button>
                </div>
                <div  id="collapseThree" class=" card-body collapse " aria-labelledby="headingOne"
                    data-parent="#accordion2" >
                    <form action="">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <div class="card-body">
                                        <div class="row">
                                            {{-- <div class="col-6 mt-1">
                                                <label for="form-label">Request Type</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="PPM">PM</option>
                                                    <option value="PPM">Complaint</option>
                                                    <option value="PPM">Incedent</option>
                                                    <option value="PPM">Self Assigned Task</option>
                                                    <option value="PPM">Task Assigned by senior</option>
                                                    <option value="PPM">Request for Information</option>
                                                </select>
                                            </div> --}}
                                            <div class="col-6 mt-1">
                                                <label for="">Deparment</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="">BME</option>
                                                    <option value="">ICT</option>
                                                </select>
                                            </div>
                                            <div class="col-6 mt-1">
                                                <label for="">Category</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="">PC Deployement</option>
                                                    <option value="">Server Maintainence</option>
                                                    <option value="">Window Installation</option>
                                                </select>
                                            </div>
                                            <div class="col-6 mt-1">
                                                <label for="">Asset</label>
                                                <input type="text" class="form-control">
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
                                <div class="">
                                    
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6 mt-1">
                                                <label for="">Due Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-6 mt-1">
                                                <label for="">Status</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Draft</option>
                                                    <option value="">Pending</option>
                                                    <option value="">Deffered</option>
                                                    <option value="">On Hold</option>
                                                    <option value="">Assigned</option>
                                                    <option value="">In Progress</option>
                                                    <option value=""> Completed</option>

                                                    <option value="">Closed</option>
                                                    {{-- <option value="">On Hold</option> --}}
                                                </select>
                                            </div>
                                            <div class="col-6 mt-1">
                                                <label for="">Completion Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-6 mt-1">
                                                <label for="">Assigned to</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12">
                                <div class="card-body">
                                    <label for="">Description</label>
                                    <div style="min-height: " id="summernote3"></div>
                                </div>
                            </div>

                        </div>
                        <div class="row ">
                            <div class=" col-12 d-flex justify-content-end">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body">
                {{-- <h4>Tasks</h4> --}}
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>Sr#</th>
                            <th>Description</th>
                            <th>Assigned to</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Task 1</td>
                            <td>Waseem</td>
                            <td>Completed</td>
                            <td class=""><i style="font-size: 15px;margin-right:20px" class="fas fa-eye"></i></td>

                           
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Task 2</td>
                            <td>Asim</td>
                            <td>In Progress</td>
                            <td class=""><i style="font-size: 15px;margin-right:20px" class="fas fa-eye"></i></td>

                           
                        </tr>
                      
                       

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
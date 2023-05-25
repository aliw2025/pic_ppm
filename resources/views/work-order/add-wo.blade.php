@extends('layout.header')
@section('section')
<div class="row">
    <div class="col-12">
        <div id="accordion" class="card">
            <div onclick="replaceIcon()" class="card-header " data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">

                <div class="row  d-flex justify-content-between">
                    <div class="col-3">
                        <h4> Work Order </h4>
                    </div>
                    <div class="col-3 d-flex justify-content-end">
                        <a href="#">
                            <p>
                                <i style="color: black" id="down-icon" class="fas fa-angle-down"></i>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div id="collapseTwo" class=" card-body collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <form method="POST" action="{{isset($workOrder)? route('workOrder.update',$workOrder->id):route('workOrder.store')}}">
                    <div class="row">
                        <div class="col-6">
                            <div class="">
                                @csrf

                                @if(isset($workOrder))

                                    @method('put');

                                @endif
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 mt-1">
                                            <label for="form-label">Request Type</label>
                                            <select name="request_type_id" id="" class="form-control">
                                                @If(isset($requestTypes))
                                                    @foreach($requestTypes as $rt)
                                                    <option @if(isset($workOrder)) @if($workOrder->request_type==$rt->id) @endif @endif value="{{$rt->id}}">{{$rt->name}}</option>
                                                    @endforeach
                                                @endif

                                            </select>
                                        </div>
                                        <div class="col-6 mt-1">
                                            <label for="">Deparment</label>
                                            <select name="department_id" id="dept" class="form-control">
                                                @If(isset($departments))
                                                @foreach($departments as $dep)
                                                <option value="{{$dep->id}}">{{$dep->name}}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-6 mt-1">
                                            <label for="">Category</label>
                                            <select name="category_id" id="cat_body" class="form-control">

                                            </select>
                                        </div>
                                        <div class="col-6 mt-1">
                                            <label for="">Asset</label>
                                            <input name="asset_id" type="text" class="form-control">
                                        </div>
                                        <div class="col-6 mt-1">
                                            <label for="">Priority</label>
                                            <select name="priority_id" id="" class="form-control">
                                                @foreach($priorities as $pt)
                                                <option value="{{$pt->id}}">{{$pt->priority}}</option>
                                                @endforeach

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
                                            <input name="due_date" type="date" class="form-control">
                                        </div>
                                        <div class="col-6 mt-1">
                                            <label for="">Status</label>
                                            <select name="status_id" id="" class="form-control">

                                                @foreach($woStatuses as $st)
                                                <option value="{{$st->id}}">{{$st->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="col-6 mt-1">
                                            <label for="">Completion Date</label>
                                            <input name="completion_date" type="date" class="form-control">
                                        </div>
                                        <div class="col-6 mt-1">
                                            <label for="">Assigned to</label>
                                            <select name="party_type_id" id="party" class="form-control">
                                                @foreach($party_type as $pt)
                                                <option value="{{$pt->id}}">{{$pt->name}}</option>
                                                @endforeach


                                            </select>
                                        </div>
                                        <div id='vendor_div' class="col-6 mt-1">
                                            <label for="">Vendor </label>
                                            <input name="vendor_id" type="text" class="form-control">
                                        </div>
                                        <div id='tech_div' class="col-6 mt-1">
                                            <label for="">Technician</label>
                                            <input name="tech_id" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-3">
                            <div class="card-body">
                                <label for="">Title</label>
                                <input @if(isset($workOrder)) value="{{$workOrder->title}}" @endif name="title" type="text" class="form-control" name="" id="" placeholder="Title">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card-body">
                                <label for="">Description</label>
                                <textarea name="description" id="summernote">@if(isset($workOrder)) {{$workOrder->description}} @endif </textarea>
                            </div>
                        </div>

                    </div>
                    @if(@isset($workOrder))
                    <div class="row ">
                        <div class=" col-12 d-flex justify-content-end">
                            <button class="btn btn-success">Update</button>
                        </div>
                    </div>
                    @else
                    <div class="row ">
                        <div class=" col-12 d-flex justify-content-end">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                    @endif
                </form>

            </div>
            @if(isset($workOrder))
            <div class="card  card-tabs">
                <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                        <!-- <li class="pt-2 px-3"><h3 class="card-title">PPM</h3></li> -->
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-two-res-tab" data-toggle="pill" href="#custom-tabs-two-res" role="tab" aria-controls="custom-tabs-two-res" aria-selected="false">Resolution</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="false">Sub Tasks</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-two-ppm-tab" data-toggle="pill" href="#custom-tabs-two-ppm" role="tab" aria-controls="custom-tabs-two-ppm" aria-selected="false">Event History</a>
                        </li>

                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content " id="custom-tabs-two-tabContent">
                        <div class="tab-pane fade active show" id="custom-tabs-two-res" role="tabpanel" aria-labelledby="custom-tabs-two-res-tab">
                            @include('work-order.resolution')
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                            @include('work-order.tasks')
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-two-ppm" role="tabpanel" aria-labelledby="custom-tabs-two-ppm-tab">
                            @include('work-order.history')
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
<script>
    function replaceIcon() {
        console.log($('#down-icon'));
        if ($(".fa-angle-down")[0]) {
            $('#down-icon').removeClass('fa-angle-down').addClass(' fa-angle-up');
        } else {
            $('#down-icon').removeClass('fa-angle-up').addClass('fa-angle-down');
        }


    }
    
    
    $(document).on('change','#party',function(){
        
        console.log($(this).val());
        if($(this).val()==1){

            $('#vendor_div').hide();
            $('#tech_div').show();
            console.log('self');
        }else{
            $('#tech_div').hide();
            $('#vendor_div').show();
            console.log('vendor');
        }
        

    });


    $(document).on('change', '#dept', function() {

        var id = $(this).val();
        console.log(id);
        getServiceCategory(id);


    });

    function getServiceCategory(id) {

        $.ajax({
            url: "{{ route('dept-service-categories')}}",
            type: "GET",
            data: {
                id: id,
            },
            success: function(dataResult) {
                $("#cat_body").empty();
                console.log('recv');
                console.log(dataResult);
                var i;
                for (i = 0; i < dataResult.length; i++) {
                    var item = dataResult[i];
                    console.log(item);
                    markup = `<option value='` + item.id + `' >` + item.service_category_name + ` <option/>`;
                    $("#cat_body").append(markup);
                }
                // $("#customer_name").val(dataResult.customer_name);
            },
            error: function(xhr, status, error) {
                // $("#customer_name").val("");
                // $("#customer_id").val("");
            },
        });
    }

    $(document).ready(function() {
        var id = $('#dept').val();
        getServiceCategory(id);

    });
</script>
@endsection
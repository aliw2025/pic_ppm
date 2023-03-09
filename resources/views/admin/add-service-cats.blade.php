@extends('layout.header')
@section('section')
    <div class="card">
        <div class="card-header">
            <h4>Service Categories</h4>
        </div>
        <div class="card-body">
            <div class="form">
                <form method="POST" action="{{ route('serviceCategory.store') }}">
                    <div class="row">
                        <div class="col-3">
                            @csrf
                            <label for="">Category Name</label>
                            <input type="text" name="service_category_name" id="" class="form-control"
                                placeholder="category Name">


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
                            <select name="department" id="sel_dept" class="form-control">
                                @foreach ($departments as $dept)
                                    <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
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
                    <tr>
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
<Script>

    $('#sel_dept').on('change',function(){
            
            console.log('department is changed');
    })

</Script>

@endsection

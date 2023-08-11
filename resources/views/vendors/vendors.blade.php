@extends('layout.header')
@section('section')
<div>
  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4>Vendors</h4>
                    <a href="{{route('vendors.create')}}" class="btn btn-primary">Add Vendor</a>
                </div>
            </div>
            <div class="card-body">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th>Vendor Details</th>
                    </tr>
                </thead>
                <tbody>
                   @isset($vendors)
                        @php
                            $count = 1;
                        @endphp
                        @foreach($vendors as $ven)
                            <tr>
                                <td>
                                    <div id="accordion" >
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <div onclick="replaceIcon()"  class="collapsed d-flex justify-content-between" data-toggle="collapse"
                                                     data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    <h4>{{ $ven->business_name.' '.$ven->address }}</h4>
                                                    <a href="#" class="">
                                                        <p>
                                                            <i id="down-icon" class="right fas fa-angle-down"></i>
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="">
                                                        <div class="">
                                                            <div class="row d-flex">
                                                                <div class="col-12">
                                                                    <div style="height: 300px" class="card p-2">
                                                                        <p class="">Contact Person Details</p>
                                                                        <div class="table table-head-fixed text-nowrap">
                                                                            <table>
                                                                                <thead>
                                                                                <th>Name</th>
                                                                                <th>Designation</th>
                                                                                <th>Person Type</th>
                                                                                </thead>
                                                                                <tboady>
                                                                                    @foreach($ven->vendorperson as $person)
                                                                                        <tr>
                                                                                            <td>{{ $person->name }}</td>
                                                                                            <td>{{ $person->designation }}</td>
                                                                                            <td>{{ $person->presontype->pserson_type_name }}</td>
                                                                                        </tr>
                                                                                    @endforeach

                                                                                </tboady>

                                                                            </table>
                                                                        </div>



                                                                    </div>
                                                                </div>
                                                                <div class="col-2">
                                                                    <div class="">
                                                                        <button class="btn btn-primary">Search</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @php
                            $count += 1;
                        @endphp
                        @endforeach
                   @endif
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

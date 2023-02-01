@extends('layout.header')
@section('section')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Assets</h4>
                </div>
                <div class="card-body">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>Sr#</th>
                                <th>Equipment Category Name </th>
                                <th>Equipment Type</th>
                                <th>Manufacturer</th>
                                <th>Model</th>
                                <th>Serial #</th>
                                <th>Equipment Owner</th>
                                <th>FA#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                <td>183</td>
                                <td>Computer</td>
                                <td>Desktop</td>
                                <td>Dell</td>
                                <td>g1277</td>
                                <td>091222225</td>
                                <td>BME</td>
                                <td>1234</td>
                            </tr>
                            <tr>
                                <td>183</td>
                                <td>Computer</td>
                                <td>Desktop</td>
                                <td>Dell</td>
                                <td>g1277</td>
                                <td>091222225</td>
                                <td>BME</td>
                                <td>1234</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class=" bg-dark">
                    {{-- class="modal-title text-center" --}}
                    <h5 class="mt-2 text-center">Equipment Type Name</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h5>Equipment Detail</h5>
                                        <div class="row">
                                            <div class="col-4">
                                                <p style="margin: 0">Name:</p>
                                            </div>
                                            <div class="col-4">
                                                <p style="margin: 0">Computer</p>
                                            </div>
                                        </div>
                                        <p style="margin: 0">Name                   : Computer</p>
                                        <p style="margin: 0">Type                   : Desktop</p>
                                        <p style="margin: 0">Model                  : G123</p>
                                        <p style="margin: 0">Seriel #               : 1234</p>
                                        <p style="margin: 0">Manufacturer           : 1234</p>
                                        <p style="margin: 0">Model                  : 1234</p>
                                        <p style="margin: 0">FA #                   : 1234</p>
                                        <p style="margin: 0">Equipment Sequence #   : 1234</p>
                                        <p style="margin: 0">Manufacture Date       : 1234</p>
                                        <p style="margin: 0">Installation Date      : 1234</p>
                                        <p style="margin: 0">Status                 : 1234</p>
                                        <p style="margin: 0">Vendor                 : 1234</p>

                                    </div>
                                    <div class="col-6">
                                        <h5>Location</h5>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                   
                </div>
                {{-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
            </div>
        </div>
    </div>
@endsection

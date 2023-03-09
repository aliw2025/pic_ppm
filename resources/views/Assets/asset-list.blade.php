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
                            {{--  --}}
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
                        <div class="card-body ">
                            <div class="row d-flex justify-content-center">
                                {{-- src="resources/img/printer.webp" --}}
                                {{-- <div class="col-3">
                                    </div> --}}
                                {{-- style="height: 250px"
                                style="height: 250px"
                                style="height: 250px" --}}
                                {{-- style="height: 250px;"
                                style="height: 250px;"
                                style="height: 250px;" --}}
                                <div class="col-5">
                                    <div  id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="resources/img/printer.webp" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="resources/img/printer.webp" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="resources/img/printer.webp" alt="First slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <h5>Equipment Detail</h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">Name:</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">Computer</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">Type:</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">Desktop</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">Model:</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">G12</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">Seriel # :</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">1234</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">Manufacturer :</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">Dell</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">Model :</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">1234</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">FA #:</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">1234</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">Manufacture Date :</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">1234</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">Manufacture Date :</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">12-Jan-23</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">Installation Datee :</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">12-Jan-23</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">Status :</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">Running</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">Vendor:</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">Apex</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">Equipment Sequence #:</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">1234</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-6">
                                    <h5>Location</h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">Building Block:</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">IPD</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">Floor:</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">Basement</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">Department:</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">BME</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">Department:</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">BME</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">Room / Area:</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">Ward <Dl></Dl></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">Room / Area:</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">Ward <Dl></Dl></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="margin: 0">Section:</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin: 0">Surgical</p>
                                        </div>
                                    </div>
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

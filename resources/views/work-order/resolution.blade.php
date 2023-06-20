<div class="row">

    <div class="col-12">
        <div id="accordion4" class="row">
            <div class="col-12 d-flex justify-content-end">
                <button data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="btn btn-primary">Add Resolution</button>
            </div>
            <div id="collapseFour" class=" card-body collapse " aria-labelledby="headingOne" data-parent="#accordion4">
                <form action="route()"></form>
                <div class="card-body">
                    <label for="">Resolution</label>
                    <textarea name="resolution" id="summernote2">{{$workOrder->resolution}}</textarea>
                </div>
            </div>
            <!-- closing col-12 -->
        </div>

    </div>
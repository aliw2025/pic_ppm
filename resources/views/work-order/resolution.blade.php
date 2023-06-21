<div class="row">

    <div class="col-12">
        <div id="accordion4" class="row">
            <div>
                @foreach($workOrder->resolutions as $res)
                
                   

                    <textarea disabled name="resolution" class="summernotes"> {{$res->resolution}}</textarea>


                @endforeach
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="btn btn-primary">Add Resolution</button>
            </div>

            <div id="collapseFour" class=" card-body collapse " aria-labelledby="headingOne" data-parent="#accordion4">

                <div class="card-body">
                    <form action="{{route('add-resolution')}}" method="POST">
                        @csrf
                        <input type="hidden" name="work_order_id" value="{{$workOrder->id}}">
                        <label for="">Resolution</label>
                        <textarea name="resolution" id="summernote2">{{$workOrder->resolution}}</textarea>
                        <button action="sumbit" class="btn btn-primary">Add</button>
                    </form>

                </div>
            </div>
            <!-- closing col-12 -->
        </div>

    </div>
</div>
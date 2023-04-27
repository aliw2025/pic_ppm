<div class="">

    <!-- <div class="col-6 mt-2">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <img class="w-50" src="resources/img/printer.webp" alt="dfdfd">

                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="mt-1 form-label">Image 1</label>
                        <input placeholder="Machine IP" type="file" class="form-control">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-6 mt-2">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <img class="w-50" src="resources/img/printer.webp" alt="dfdfd">

                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="mt-1 form-label">Image 2</label>
                        <input placeholder="Machine IP" type="file" class="form-control">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-6 mt-2">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <img class="w-50" src="resources/img/printer.webp" alt="dfdfd">

                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="mt-1 form-label">Image 3</label>
                        <input placeholder="Machine IP" type="file" class="form-control">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-6 mt-2">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <img class="w-50" src="resources/img/printer.webp" alt="dfdfd">

                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="mt-1 form-label">Image 4</label>
                        <input placeholder="Machine IP" type="file" class="form-control">
                    </div>

                </div>
            </div>
        </div>
    </div> -->

    <!--     
        <div class="col-12">
            <div class="container">
            <form method="POST" enctype="multipart/form-data" class="form form-vertical" autocomplete="on" action="{{ route('update-images') }}">

                <input type="hidden" value="{{$asset->id}}">
                <div class="row">
                    <div class="col-sm-4 imgUp">
                        <div class="imagePreview"></div>
                        <label class="btn btn-primary">
                            Upload<input name="image1" type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                        </label>
                    </div>
                   
                    <div class="col-sm-4 imgUp">
                        <div class="imagePreview"></div>
                        <label class="btn btn-primary">
                            Upload<input name="image2" type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                        </label>
                    </div>
                    <div class="col-sm-4 imgUp">
                        <div class="imagePreview"></div>
                        <label class="btn btn-primary">
                            Upload<input name="image4" type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                        </label>
                    </div>
                    <div class="col-sm-4 imgUp">
                        <div class="imagePreview"></div>
                        <label class="btn btn-primary">
                            Upload<input name="image4" type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                        </label>
                    </div>
                    <div class="col-12">
                     <input name="image4" type="file" class="uploadFile img" value="Upload Photo">
                    </div>
                </div>
                </form>
            </div>
        </div> -->
    <form method="POST" enctype="multipart/form-data" class="form form-vertical" autocomplete="on" action="{{ route('update-images') }}">
        @csrf
        <div class="row">
            <input name='asset_id' type="hidden" value="{{$asset->id}}">
            <div class="col-6">
                <input  name="image" type="file" class="form-control"  accept=".jpg, .jpeg, .png" >
            </div>
            <div class="col-6 mt-1">
                <button class="btn btn-primary">Add Image</button>
            </div>

        </div>
    </form>

    <div class="row mt-2">
        <div class="col-12">
            <!-- <button class="btn btn-primary">Save</button> -->
        </div>

    </div>


</div>
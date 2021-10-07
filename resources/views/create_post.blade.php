<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
</head>

<body>
<div id="wrapper">
    @include('top_menu')
    <main id="main" role="main">
        <div class="container">
            @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
            <section class="two-block new">

                {{--                    <form>--}}
                <div class="col-sm-12">
                    <form method="post" action="{{route('addProgramData')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="deliveryDate" class="col-sm-2 col-form-label">Delivery Date</label>
                            <div class="col-sm-10">
                                <input type="text" name="delivery_date" id="delivery_date">
                                @if($errors->has('delivery_date'))
                                    <div class="error">{{ $errors->first('delivery_date') }}</div>
                                @endif
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">File(30MB-MP3 EXCLUSIVE)</label>
                            <div class="col-sm-10">
                                <input type="file" name="file_mp3" id="file_mp3">
                                @if($errors->has('file_mp3'))
                                    <div class="error">{{ $errors->first('file_mp3') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">

                                <button type="submit" class="btn btn-primary">Post</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12">
                    <label for="MessageList" class="col-sm-10"><h3>Program Information Confirmation</h3></label>
                    <div class="bg-dark">
                        <div class="p-3 container">
                            @foreach($program_data AS $file)
                                <div class="row mt-3 program_row">
                                    <div class="col col-lg-2">{{$file->delivery_date}}</div>
                                    <div class="col col-lg-2">{{$file->program_file}}</div>
                                    <div class="col col-lg-2">
                                        <button class="btn btn-primary"
                                                onclick="deleteProgramData(this,'{{$file->id}}')">Delete
                                        </button>
                                    </div>
                                </div>
                            @endforeach

                                <form method="post" action="{{route('addProgramInfo')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="deliveryDate" class="col-sm-2 col-form-label">Program Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="program_name" id="program_name" value="{{isset($program_info->program_name)?$program_info->program_name:""}} ">
                                            @if($errors->has('program_name'))
                                                <span class="error">{{ $errors->first('program_name') }}</span>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="file" class="col-sm-2 col-form-label">File(30MB-MP3 EXCLUSIVE)</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="program_file" id="program_file">
                                            @if($errors->has('program_file'))
                                                <span class="error">{{ $errors->first('program_file') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="file" class="col-sm-2 col-form-label">Descritive Text</label>
                                        <div class="col-sm-10">
                                            <textarea name="program_desc" class="form-control" id="program_desc" rows="3"  cols="1"> {{isset($program_info->program_detail)?$program_info->program_detail:""}}</textarea>
                                            @if($errors->has('program_desc'))
                                                <span class="error">{{ $errors->first('program_desc') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="file" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">

                                            <button type="submit" class="btn btn-primary">{{isset($program_info)?'Update':'Add'}}</button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <label for="MessageList" class="col-sm-10"><h3>List of Past Messages</h3></label>
                    <div class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Name</h5>
                            <small class="text-muted">date&time</small>
                        </div>
                        <p class="mb-1">Message</p>

                    </div>
                    <div class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Name</h5>
                            <small class="text-muted">date&time</small>
                        </div>
                        <p class="mb-1">Message</p>

                    </div>
                    <div class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Name</h5>
                            <small class="text-muted">date&time</small>
                        </div>
                        <p class="mb-1">Message</p>

                    </div>
                    <div class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Name</h5>
                            <small class="text-muted">date&time</small>
                        </div>
                        <p class="mb-1">Message</p>

                    </div>
                </div>


                {{--                    </form>--}}

            </section>
        </div>
    </main>
    <footer id="footer">
        <div class="container">
            <div class="footer-holder">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><a href="#">©credit</a></li>
                            <li><a href="#">©credit</a></li>
                            <li><a href="#">©credit</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="js/custom.js"></script>

<script>
    $(function () {
        $('#delivery_date').datepicker({
            format: 'mm-dd-yyyy'
        });
    });

    function deleteProgramData(obj, id) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            "type": "POST",
            "url": "{{URL("delete_program_data")}}",
            data: {
                program_id: id,
            },
            success: function (response) {
                if (response.code == 200) {
                    $(obj).closest(".program_row").remove();
                }
            },
            error: function () {
                //  $obj.contentDiv.html("Something went wrong, please try again later."); // sets the content straightaway.
                // Handle it your way
            }
        });
    }
</script>
</html>

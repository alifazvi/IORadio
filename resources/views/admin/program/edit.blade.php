@extends('layouts.admin')
@section('content')


    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('global.user.title') }}
        </div>

        <div class="card-body">

            <main id="main" role="main">
                <div class="container">
                    <section class="two-block new">
                        <div class="col-lg-8 mx-auto text-center form p-4 ">
                            <form method="post" action="{{route('admin.program.publish')}}">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputProgramName" class="col-sm-2 col-form-label">Program Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="program_name" id="program_name" class="form-control"
                                               value="{{isset($program_info->program_name)?$program_info->program_name:""}} ">
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="inputDayOfWeek" class="col-sm-2 col-form-label">Time Slot</label>
                                    <div class="col-sm-10">
                                        <select name="" id="time_slot_id" class="form-control" name="time_slot_id">
                                            <option>Please Select</option>
                                            @foreach($time_slots As $time_slot)

                                                <option
                                                    {{($program_info->time_slot_id == $time_slot->id)?"selected":"" }}
                                                    value="{{$time_slot->id}}">{{$time_slot->day." ".$time_slot->time_from."-".$time_slot->time_from}}</option>
                                            @endforeach
                                        </select></div>
                                </div>

                                <input type="hidden" id="program_id" name="program_id" value="{{$program_info->id}}">
                                <input type="hidden" id="is_public" name="is_public" value="">

                                <div class="form-group row">
                                    <label for="publicStatus" class="col-sm-2 col-form-label">Public Status</label>
                                    <div class="col-sm-10">
                                        <button data-is_public="1" onclick="submitForm(this)" class="btn btn-light">
                                            Release
                                        </button>
                                        <button data-is_public="0" onclick="submitForm(this)" class="btn btn-primary">
                                            Private
                                        </button>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <label for="MessageList" class="col-sm-10"><h3>List of Past Messages</h3></label>
                                    @if($program_info && $program_info->donations)

                                        @foreach($program_info->donations AS $donation)
                                            <div
                                                class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">{{$donation->name}}</h5>
                                                    <small
                                                        class="text-muted">{{date('h:i:s m/d/Y',strtotime($donation->create_at))}}</small>
                                                </div>
                                                <p class="mb-1">{{$donation->message}}</p>

                                            </div>
                                        @endforeach
                                    @endif
                                </div>


                            </form>
                        </div>
                    </section>
                </div>
            </main>
            {{--            <footer id="footer">--}}
            {{--                <div class="container">--}}
            {{--                    <div class="footer-holder">--}}
            {{--                        <div class="row">--}}
            {{--                            <div class="col-md-12">--}}
            {{--                                <ul>--}}
            {{--                                    <li><a href="#">©credit</a></li>--}}
            {{--                                    <li><a href="#">©credit</a></li>--}}
            {{--                                    <li><a href="#">©credit</a></li>--}}
            {{--                                </ul>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </footer>--}}
        </div>
    </div>

@stop


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    function submitForm(obj) {
        var is_public = $(obj).data('is_public');
        console.log(is_public);
        $("#is_public").val(is_public);
        $("#target").submit();

    }
</script>


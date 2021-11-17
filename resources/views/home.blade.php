<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
</head>
<body>
<style>

    .audio_container{
        margin: 0;
        position: absolute;
        top: 50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        width:100%;
    }
    audio {
        /*border-radius: 90px;*/
        width: 100%;
        height: 45px;
        margin-top: 5px;
        margin-bottom: 5px;

    }

    audio::-webkit-media-controls-mute-button {
        display: none !important;
    }

    audio::-webkit-media-controls-volume-slider {
        display: none !important;
    }

    audio::-webkit-media-controls-volume-control-container.closed {
        display: none !important;
    }

    audio::-webkit-media-controls-volume-control-container {
        display: none !important;
    }
</style>
<div id="wrapper">
    <div class="container">
        @include('top_menu')
        <div class="main-slider">

            <div>

                <img src="{{URL::asset('/cstmView/images/slider-bar.png')}}" alt="banner">


            </div>
            {{-- <div><img src="{{URL::asset('/cstmView/images/slider-bar.png')}}" alt="banner"></div>
            <div><img src="{{URL::asset('/cstmView/images/slider-bar.png')}}" alt="banner"></div> --}}
        </div>
        <div class="main-slider mobile">
            <div><img src="{{URL::asset('/cstmView/images/slider01.png')}}" alt="banner"></div>
            {{-- <div><img src="{{URL::asset('/cstmView/images/slider01.png')}}" alt="banner"></div>
            <div><img src="{{URL::asset('/cstmView/images/slider01.png')}}" alt="banner"></div> --}}
        </div>
    </div>
    <main id="main" role="main">
        <div class="container">
            <section class="two-block">
                <div class="row">
                    <div class="col-sm-12 d-lg-none">
                        <div class="text">
                            <h1>Listen to the program currently on air</h1>
                        </div>
                    </div>
                    <div class="col-sm-6 col-6">
                        <div class="text d-none d-lg-block">
                            <h1>Listen to the program currently on air</h1>
                        </div>
                        <div class="img-holder">
                            @if($recent_program && isset($recent_program->program_photo))
                                <img src="{{URL::asset('uploads/'.$recent_program->program_photo)}}" alt="">
                            @else
                                <img src="{{URL::asset('/cstmView/images/no_image.jpg')}}" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6 col-6">
                        @if($recent_program && $recent_program->latestProgramData)

                            @php
                                $program_data = $recent_program->latestProgramData;
                            @endphp
                            @if($program_data && isset($program_data->program_file))
                                <div class="audio_container">
                                    <audio controls>

                                        <source src="{{URL('uploads/'.$program_data->program_file)}}" type="audio/mpeg">

                                    </audio>
                                </div>
                            @endif
                        @else
                            <div class="video-block">
                                <a href="#"><img src="{{URL::asset('/cstmView/images/video-icon.png')}}" alt=""></a>
                            </div>
                        @endif
                    </div>
                </div>
            </section>
            <section class="form-area">
                <form method="POST" action="submit_donate">
                    <div class="row">
                    @csrf <!-- {{ csrf_field() }} -->
                        <div class="col-md-6">
                            <div class="upper-text">
                                <h2>Your thoughts<br> Let's donate</h2>
                                <p>You can donate from<br>the donation button below<br>* Use Stripe Connect</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-block">

                                <div class="form-group">
                                    <label for="inputAddress">Program name</label>
                                    <input type="text" name="program_name"  value="{{($recent_program)?$recent_program->program_name:""}}" class="form-control" id="inputAddress" >
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">amount</label>
                                        <input type="number" name="amount" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">message</label>
                                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1"
                                              rows="4"></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="hidden" name="program_id" id="program_id" value="{{$recent_program->id}}">
                            <button type="submit" class="btn btn-donate">To Donate</button>
                        </div>
                    </div>
                </form>
            </section>
            <section class="sehedule-block d-none d-sm-block">
                <div class="row">
                    <div class="col-md-12">
                        <h2>- A TV schedule -</h2>
                    </div>
                </div>
            </section>
            <section class="sehedule-block d-sm-none">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-slider">
                            <div><h2>- A TV schedule -</h2></div>
                            <div><h2>- A TV schedule -</h2></div>
                            <div><h2>- A TV schedule -</h2></div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-area">
                            <div class="table-responsive text-nowrap">
                                <table class="table" cellspacing="0" cellpadding="0">

                                    <tr>
                                        <th></th>
                                        @foreach($days As $day)
                                            <th>{{$day->day}}</th>
                                        @endforeach
                                    </tr>
                                    @foreach($time_slots As $time_slot)
                                        <tr>
                                            @php
                                                $i=0;
                                            @endphp
                                            @foreach($time_slot As $slot)
                                                @if($i == 0)
                                                    <td>{{$slot->time_from}}<br>-{{$slot->time_to}}</td>
                                                    @php
                                                        $i++;
                                                    @endphp
                                                @endif


                                                @if( $slot->programInfo && !is_null($slot->programInfo) && $slot->programInfo->count() > 0)
                                                    <td>
                                                        <a href="{{ URL('/archive/'.$slot->programInfo->first()->id) }}">
                                                            <img
                                                                src="{{URL::asset('uploads/'.$slot->programInfo->first()->program_photo)}}"
                                                                alt=""></a>
                                                    </td>
                                                @else
                                                    <td><img src="{{URL::asset('/cstmView/images/no_image.jpg')}}"
                                                             alt=""></td>
                                                @endif



                                            @endforeach
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="btn-area">
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="btn inq-btn">inquiry</a>
                    </div>
                </div>
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
<script src="js/custom.js"></script>
</html>

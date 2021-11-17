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
            <section class="two-block new">
                <div class="block d-none d-md-block">
                    <div class="row mb-5">
                        <div class="col-sm-6 pr-0">
                            <div class="text-black">
                                <h2>{{($program_info)?$program_info->program_name:""}}</h2>
                                <p>{{($program_info)?$program_info->program_detail:""}}</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pl-0">
                            <div class="img-holder">
                                @if(isset($program_info) && isset($program_info->program_photo) && $program_info->program_photo != "")
                                    <img
                                        src="{{URL::asset('uploads/'.$program_info->program_photo)}}"
                                        alt="">

                                @else
                                    <img src="/cstmView/images/no_image.jpg" alt="">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="mid-text">
                            <h2>-archive-</h2>
                        </div>
                    </div>
                    @foreach($program_info->programData AS $program_data)
                        <div class="col-md-4">
                            <div class="bord-area">
                                <h2>Broadcast</h2>
                                <audio controls>

                                    <source src="{{URL('uploads/'.$program_data->program_file)}}" type="audio/mpeg">

                                </audio>
                            </div>
                        </div>
                    @endforeach
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

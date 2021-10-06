<!DOCTYPE html>
<html lang="en">
<head>
@include('header')
</head>
<body>
    <div id="wrapper">
        <div class="container">
            @include('top_menu')
            <div class="main-slider">
                

                <img style="width: 100%;" src="{{URL::asset('/cstmView/images/slider-bar.png')}}" alt="banner">
     
            
            
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
                                <img src="{{URL::asset('/cstmView/images/sound-bar.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-6">
                            <div class="video-block">
                                <a href="#"><img src="{{URL::asset('/cstmView/images/video-icon.png')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="form-area">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="upper-text">
                                <h2>Your thoughts<br> Let's donate</h2>
                                <p>You can donate from<br>the donation button below<br>* Use Stripe Connect</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-block">
                                <form>
                                    <div class="form-group">
                                        <label for="inputAddress">Program name</label>
                                        <input type="text" class="form-control" id="inputAddress">
                                      </div>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputEmail4">name</label>
                                        <input type="text" class="form-control">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4">amount</label>
                                        <input type="text" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputAddress2">message</label>
                                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-donate">to donate</button>
                        </div>
                    </div>
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
                                            <th>Sunday</th>
                                            <th>Monday</th>
                                            <th>Tuesday</th>
                                            <th>Wednesday</th>
                                            <th>Thursday</th>
                                            <th>Friday</th>
                                            <th>Saturday</th>
                                        </tr>
                                        <tr>
                                            <td>18:00<br>-18:30</td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>18:30<br>-19:00</td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>19:00<br>-19:30</td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>19:30<br>-20:00</td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>20:00<br>-20:30</td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>20:30<br>-21:00</td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>21:00<br>-21:30</td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>21:30<br>-22:00</td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>22:00<br>-22:30</td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>22:30<br>-23:00</td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>23:00<br>-23:30</td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>23:00<br>-24:00</td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                            <td><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="mob-slider d-none">
                    <div class="row">
                        <div class="col-3 pr-0">
                            <div class="mob-table">
                                <ul>
                                    <li></li>
                                    <li>18:00<br>-18:30</li>
                                    <li>18:30<br>-19:00</li>
                                    <li>19:00<br>-19:30</li>
                                    <li>19:30<br>-20:00</li>
                                    <li>20:00<br>-20:30</li>
                                    <li>20:30<br>-21:00</li>
                                    <li>21:00<br>-21:30</li>
                                    <li>21:30<br>-22:00</li>
                                    <li>22:00<br>-22:30</li>
                                    <li>22:30<br>-23:00</li>
                                    <li>23:30<br>-24:00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-9 pl-0">
                            <div class="slider-mob">
                                <div>
                                    <ul>
                                        <li>Sunday</li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                    </ul>
                                    <ul>
                                        <li>Monday</li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul>
                                        <li>Tuesday</li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                    </ul>
                                    <ul>
                                        <li>Wednesday</li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul>
                                        <li>Thursday</li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                    </ul>
                                    <ul>
                                        <li>Friday</li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul>
                                        <li>Friday</li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                    </ul>
                                    <ul>
                                        <li>Saturday</li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                        <li><img src="{{URL::asset('/cstmView/images/small-sound.png')}}" alt=""></li>
                                    </ul>
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
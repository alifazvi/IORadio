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
            <h1>Thanks for your order!</h1>
            <p>
                We appreciate your business!
                If you have any questions, please email
                <a href="mailto:orders@example.com">orders@example.com</a>.
            </p>
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

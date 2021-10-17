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

                    <form>

                        <div class="form-group row">
                            <label for="inputProgramName" class="col-sm-2 col-form-label">Program Name</label>
                            <div class="col-sm-10">
                            <select name="" id="" class="form-control">
                                <option value="abc">abc</option>
                            </select></div>

                          </div>
                          <div class="form-group row">
                            <label for="inputDayOfWeek" class="col-sm-2 col-form-label">Day Of Week</label>
                            <div class="col-sm-10">
                            <select name="" id="" class="form-control">
                                <option value="mon">MON</option>
                                <option value="tue">TUE</option>
                                <option value="wed">WED</option>
                                <option value="thu">THU</option>
                                <option value="fri">FRI</option>
                                <option value="sat">SAT</option>
                                <option value="sun">SUN</option>
                            </select></div>
                          </div>
                          <div class="form-group row">
                            <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                            <div class="col-sm-10">
                                <select name="" id="" class="form-control">
                                    <option value="1800_1830">18:00~18:30</option>
                                    <option value="1830_1900">18:30~19:00</option>
                                    <option value="1900_1930">19:00~19:30</option>
                                    <option value="1930_2000">19:30~20:00</option>
                                    <option value="2000_2030">20:00~20:30</option>
                                    <option value="2030_2100">20:30~21:00</option>
                                    <option value="2100_2130">21:00~21:30</option>
                                    <option value="2130_2200">21:30~22:00</option>
                                    <option value="2200_2230">22:00~22:30</option>
                                    <option value="2230_2300">22:30~23:00</option>
                                    <option value="2300_2330">23:00~23:30</option>
                                    <option value="2330_2400">23:30~24:00</option>
                                </select></div>
                          </div>
                          <div class="form-group row">
                            <label for="publicStatus" class="col-sm-2 col-form-label">Public Status</label>
                            <div class="col-sm-10">
                                <button type="input" class="btn btn-light">Release</button>
                                <button type="input" class="btn btn-primary">Private</button>
                          </div></div>

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



                    </form>

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

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
                            <label for="deliveryDate" class="col-sm-2 col-form-label">Delivery Date</label>
                            <div class="col-sm-10">
                              <input type="text" name="delivery_date" id="delivery_date">
                            </div>
                       
                          </div>
                          <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">File(30MB-MP3 EXCLUSIVE)</label>
                            <div class="col-sm-10">
                              <input type="file" name="file_mp3" id="file_mp3" >
                            </div>
                          </div>
               
                          <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                              
                                <button type="input" class="btn btn-primary">Post</button>
                          </div></div>
                          <div class="col-sm-12">
                            <label for="MessageList" class="col-sm-10"><h3>Program Information Confirmation</h3></label>
                            <div class="bg-dark"> 
                              <div class="p-3 container">
                              <div class="row mt-3">
                                <div class="col col-lg-2">1. Date</div>
                                <div class="col col-lg-2">MP3 File Name</div>
                                <div class="col col-lg-2"> <button type="input" class="btn btn-primary">Delete</button></div>
                              </div>
                              <div class="row mt-3">
                                <div class="col col-lg-2">2. Date</div>
                                <div class="col col-lg-2">MP3 File Name</div>
                                <div class="col col-lg-2"> <button type="input" class="btn btn-primary">Delete</button></div>
                              </div>
                              <div class="row mt-3">
                                <div class="col col-lg-2">3. Date</div>
                                <div class="col col-lg-2">MP3 File Name</div>
                                <div class="col col-lg-2"> <button type="input" class="btn btn-primary">Delete</button></div>
                              </div>
                              <div class="form-group row">
                                <label for="deliveryDate" class="col-sm-2 col-form-label">Program Name</label>
                                <div class="col-sm-10">
                                  <input type="text" name="delivery_date" id="delivery_date">
                                </div>
                           
                              </div>
                              <div class="form-group row">
                                <label for="file" class="col-sm-2 col-form-label">File(30MB-MP3 EXCLUSIVE)</label>
                                <div class="col-sm-10">
                                  <input type="file" name="file_mp3" id="file_mp3" >
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="file" class="col-sm-2 col-form-label">Descritive Text</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" id="description" rows="3" cols="1"></textarea>
                                </div>
                              </div>
                   
                              <div class="form-group row">
                                <label for="file" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                  
                                    <button type="input" class="btn btn-primary">Post</button>
                              </div></div>
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
       <script type="text/javascript" src="./view/ajax/login.js"></script> 
        <!-- Modal  login -->
        <div class="modal fade" id="Login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                       


                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-wrap">
                            <form name="login_form" id="login_form" method="POST" class="row g-3 needs-validation" novalidate>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Username or Email Address</label>
                                    <input type="text" name="useremail" class="form-control" id="validationCustom01" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                               
                                
                                <div class="col-md-12">
                                    <label for="validationDefaultpass" class="form-label">Password</label>
                                    <div class="input-group">
                                      
                                      <input type="password" name="password" class="form-control" id="validationDefaultpass" aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                    <div class="link-wrap d-flex justify-content-between ">
                                        
                                       
                                        <a href="#">Lost Password</a> <a href="#">Register</a>
                                    </div>
                                  </div>
                                
                                  <div class="col-12">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                      <label class="form-check-label" for="invalidCheck">
                                        Remember me
                                      </label>
                                      <div class="invalid-feedback">
                                        You must agree before submitting.
                                      </div>
                                    </div>
                                  </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                </div>
            </div>
        </div>
        


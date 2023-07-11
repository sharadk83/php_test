<script type="text/javascript" src="./view/ajax/register.js"></script>
<!-- Modal  Signup -->
        <div class="modal fade" id="Signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Sign UP</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-wrap">
                            <form method="POST" class="row g-3 needs-validation" id="register" name="register" novalidate>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="full_name" value=""
                                        required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom06" class="form-label">Phone No.</label>
                                    <input type="number" class="form-control" id="validationCustom06" name="phone_number" value=""
                                        required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom03" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="validationCustom03" name="email" value=""
                                        required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                               
                                
                                <div class="col-md-12">
                                    <label for="validationDefaultpass" class="form-label">Choose a Password </label>
                                    <div class="input-group">
                                      
                                      <input type="password" class="form-control" id="validationDefaultpass" name="password" aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                  </div>
                              
                                
                                <div class="col-md-12">
                                    <label for="validationDefaultpass" class="form-label">Confirm Password</label>
                                    <div class="input-group">
                                      
                                      <input type="password" class="form-control" id="validationDefaultpass" aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                      <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                      </label>
                                      <div class="invalid-feedback">
                                        You must agree before submitting.
                                      </div>
                                    </div>
                                  </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Sign Up</button>
                                </div>
                            </form>
                        </div>
                        <div class="user_success"></div>
                    </div>                    
                </div>
            </div>
        </div>
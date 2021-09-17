
<?php
    if(!isset($_SESSION['email']) && !isset($_SESSION['username']))
    {
?>


<ul class="d-flex align-items-center">
                  <li class="h4 list-unstyled"><a class="h4 text-dark" href="#carousel-example" role="button" data-slide-to="0">Login</a></li>
                  <li class="h4 ml-5"><a class="h4 text-dark" href="#carousel-example" role="button" data-slide-to="1">Register</a></li>
                  <li class="h4 list-unstyled ml-5 ml-auto"><a class="h4 text-dark" href="#"><i class="fas fa-minus"></i></a>
                </ul>
      
                <hr>
      
                <div id="carousel-example" class="carousel slide" data-interval="false">

             
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h3 class="mb-3">Login</h3>
                            <form method="POST" id="login">
                                <div class="form-group">
                                  <label class="h4" for="username">Username</label>
                                  <input type="text" class="form-control" name="username" id="username" aria-describedby="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                  <label class="h4" for="exampleInputPassword1">Password</label>
                                  <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <div class="form-group form-check">
                                  <input type="checkbox" class="form-check-input" id="remember">
                                  <label class="form-check-label ml-2 h4" for="remember">Remember me</label>
                                </div>
                                <button name="login" id="submit" type="submit" class="btn btn-primary w-100 rounded-5">Login</button>
                              </form>
                        </div>
                        <div class="carousel-item">
                            <h3 class="mb-3">Register</h3>
                            <form method="POST" id="register">
                                <div class="form-group">
                                  <label class="h4" for="username">Username</label>
                                  <input type="text" class="form-control" id="username" name="username" aria-describedby="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label class="h4" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Email">
                                  </div>
                                <div class="form-group">
                                  <label class="h4" for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label class="h4" for="email">Signature</label>
                                    <input type="text" maxlength="100" class="form-control" id="signature" name="signature" aria-describedby="signature" placeholder="Signature">
                                  </div>
                                <button id="submit" name="register" type="submit" class="btn btn-primary w-100 rounded-5">Register</button>
                              </form>
                        </div>
                    </div>
                </div>

          <hr>

          <a href="#" class="h4 text-dark">I forgot my password</a>

          <?php
    }

?>

<html>
    <head>
        <title>TernVagler | Users</title>
        <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/main.css">
        <script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center">Login</h5>
                  <form>
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <center>
                            <input type="button" value="Login" class="btn btn-primary"/>
                        </center>
                      </div>
                  </form>
                        <center>
                            <label>Or</label>
                        </center>
                        <center>
                            <input type="button" value="Sign-in with Google" class="btn btn-primary"/>
                        </center>
                  <hr/>
                    <center>
                    <p>Don't have account <a href=<?php echo site_url('ternvagler/register')?>>register now!</a></p>
                    </center>
                  
                </div>
              </div>
            </div>
          </div>
    </body>
</html>
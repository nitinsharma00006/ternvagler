<html>
    <head>
        <title>TernVagler | Users Register</title>
        <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/main.css">
        <script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type='text/javascript'>
            $(function(){
                    var dtToday = new Date();
                    
                    var month = dtToday.getMonth() + 1;
                    var day = dtToday.getDate();
                    var year = dtToday.getFullYear();
                    if(month < 10)
                        month = '0' + month.toString();
                    if(day < 10)
                        day = '0' + day.toString();
                                        
                    var maxDate = year + '-' + month + '-' + day;
                    // alert(maxDate);
                    $('#dob').attr('max', maxDate);
                });
        </script>
    </head>
    <body>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center">User Register</h5>
                  <form method="post"  action="<?php echo base_url()?>index.php/Ternvagler/user_register">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder='Enter name'/>
                    </div>
                    <div class="form-group">
                        <label>Gender</label><br/>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="defaultInline1" name="gender">
                            <label class="custom-control-label" for="defaultInline1">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="defaultInline2" name="gender">
                            <label class="custom-control-label" for="defaultInline2">Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email id</label>
                        <input type="email" class="form-control" placeholder='Enter email id'/>
                    </div>
                    <div class="form-group">
                        <label>Date Of Birth</label>
                        <input type="date" id='dob' class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="number" class="form-control" placeholder='Enter phone number'/>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder='Enter password'/>
                    </div>
                    <div class="form-group">
                        <center>
                        <input type="submit" value="Register" class="btn btn-primary"/>
                        </center>
                    </div>
                  </form>

                  <hr/>
                    <center>
                        <p>Go to <a href=<?php echo site_url('ternvagler/login')?>><b>Login</b></a></p>
                    </center>
                  
                </div>
              </div>
            </div>
          </div>
    </body>
</html>
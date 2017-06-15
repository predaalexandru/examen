<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Registration</title>
<link href="css/bootstrap.min.css" rel="stylesheet"> 
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</head>
<body>
<div class="signin-form">

<div class="container">
            <form class="form-horizontal" method="post" id="register-form" role="form">
                <h2>Registration Form</h2>
                <div id="error">
            </div>
                <div class="form-group">
                    <label for="firstName" class="col-sm-4 control-label">First Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="firstName" placeholder="Enter First Name" class="form-control" autofocus> 
                    </div>
                </div>
                 <div class="form-group">
                    <label for="firstName" class="col-sm-4 control-label">Last Name</label>
                    <div class="col-sm-8">     
                        <input type="text" id="lastName" placeholder="Enter Last Name" class="form-control" autofocus> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-4 control-label">Date of Birth</label>
                    <div class="col-sm-8">
                        <input type="date" id="birthDate" class="form-control">
                    </div>
                </div>

              
                <div class="form-group">
                    <label class="control-label col-sm-4">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" value="Male"><strong>Male</strong>
                                </label>
                            </div>
                            <div class="col-sm-3">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" value="Female"><strong>Female</strong>
                                </label>
                            </div>
                           
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                     <div class="form-group">
                    <label for="country" class="col-sm-4 control-label">Country</label>
                    <div class="col-sm-8">
                        <select id="country" class="form-control">
                            <option>USA</option>
                            <option>Romania</option>
                            <option>Germany</option>
                            <option>Denmark</option>
                            <option>France</option>
                            <option>Fiji</option>
                            <option>Russia</option>
                            <option>Haiti</option>
                        </select>
                    </div>
                </div> <!-- /.form-group -->
                     <div class="form-group">
                    <label for="email" class="col-sm-4 control-label">
                    <span id="check-e"></span>Email
                    </label>
                    <div class="col-sm-8">
                        <input type="email" id="email" placeholder="Enter Email ........" class="form-control">
                    </div>
                </div><!-- /.form-group -->
                                     <div class="form-group">
                    <label for="email" class="col-sm-4 control-label">Phone</label>
                    <div class="col-sm-8">
                        <input type="phone" id="phone" placeholder="Enter Phone ......." class="form-control">
                    </div>
                </div><!-- /.form-group -->                        
                <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="password" placeholder="" class="form-control">
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">Confirm Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="cpassword" placeholder="" class="form-control">
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">I agree to the Terms of Use
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                
                <br><br><br>
                
                <!-- Submit -->
                <div class="form-group">
                  <label class="col-md-10 control-label" for="submit"></label>
                  <div class="col-md-8">
                   <button type="submit" class="btn btn-default">Cancel</button>
                     <button type="submit" class="btn btn-primary" name="btn-save" id="btn-submit">
                    <span class="glyphicon glyphicon-log-in"></span> &nbsp; Register
                </button>
                  </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
	</div> <!-- ./signin-form -->
<script src="js/bootstrap.min.js"></script>
	</body>
</html>
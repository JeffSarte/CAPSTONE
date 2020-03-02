<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>



    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-7">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="saveboarders.php" method="post">
                            <h3 class="text-center text-info">Register</h3>
                            
                            
                            <input type="text" name="fname" class=" " placeholder="FirstName">
                            <input type="text" name="mname" class=" " placeholder="MiddleName">
                            <input type="text" name="lname" class=" " placeholder="LastName">
                            <input type="text" name="age" class="form-control " placeholder="Age">
                            <input type="text" name="school" class=" form-control" placeholder="School">
                            <input type="text" name="status" class=" form-control" placeholder="Status">
                            <input type="text" name="gender" class="form-control " placeholder="Gender">
                            <input type="text" name="number" class="form-control " placeholder="Mobile Number">
                            <input type="text" name="email" class="form-control " placeholder="Email">
                             <input type="text" name="username" class=" form-control" placeholder="UserName">
                             <input type="text" name="password" class=" form-control" placeholder="Password">


                            <div class="form-group">
                                
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
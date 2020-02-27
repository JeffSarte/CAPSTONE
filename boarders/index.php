<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Istaran</title>
</head>
<body>


<div id="overlay">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                
                <h5 class="modal-title">Boarders</h5>
                <button type="button" class="close"></button>
                <span aria-hidden = "true"> &times;</span>




                </div>

                <div class="modal-body p-4">
                
                
                <form action="saveboarders.php" method="POST">

                    <input type="text" name="fname" class="form-control form-control-lg" placeholder="FirstName">
                    <input type="text" name="mname" class="form-control form-control-lg" placeholder="MiddleName">
                    <input type="text" name="lname" class="form-control form-control-lg" placeholder="LastName">
                    <input type="text" name="age" class="form-control form-control-lg" placeholder="Age">
                    <input type="text" name="school" class="form-control form-control-lg" placeholder="School">
                    
                    <input type="text" name="status" class="form-control form-control-lg" placeholder="Status">
                    <input type="text" name="username" class="form-control form-control-lg" placeholder="Username">
                    <input type="text" name="password" class="form-control form-control-lg" placeholder="Password">
                    
                    <input type="text" name="gender" class="form-control form-control-lg" placeholder="Gender">

                    <input type="text" name="number" class="form-control form-control-lg" placeholder="Number">
                
                    <input type="text" name="email" class="form-control form-control-lg" placeholder="Email">
                
                <button >Save</button>
                </form>
                
                
                </div>
            </div>
        </div>
    </div>    
    </div>
</body>
</html>
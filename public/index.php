
<!-- <
<div class="container">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center align-items-center mt-5">

            <div class="card p-3">
    
                <div class="col-lg-12">
                    <form action="./backend/login.php" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control" required name="name" id="" placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" id="" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="mb-3 text-center">
                            <input type="email" name="email" id="" placeholder="Email">
                             <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<?php 
include '../core/Database.php' ; 
include '../config/database.php' ;



$db =new Database(DB_HOST, DB_USER, DB_PASS , DB_NAME);


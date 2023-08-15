<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>

<?php

include 'connection.php' ;
session_start();

if (isset($_SESSION['Role']) && $_SESSION['Role'] === 'Admin') {
    header("Location: https://funtargetgame.co.in/DashBoard");
    exit();
}

if(isset($_SESSION['Role']) && $_SESSION['Role'] === 'SubAdmin'){
    header("Location: https://funtargetgame.co.in/ShopDashBoard");
    exit();
}

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM TeenPattiGoldTable WHERE UserName='$username '";
    $result = $conn->query($sql);

    $emailcount = mysqli_num_rows($query);

    if($result->num_rows > 0){
        
        $resultArray = array();
        
        while ($row = $result->fetch_assoc()) {
            $resultArray[] = array(
                "id" => $row["id"],
                    "username" => $row["username"],
                    "Password" => $row["Password"],
                    "Role" => $row["Role"]
                );
            // );
        }

        $loopLength = count($resultArray);

        if ($loopLength == 1) {

            if ($resultArray[0]['Password'] == $password) {

                $_SESSION['UserName'] = $username;
                $_SESSION['Role'] = $resultArray[0]['Role'];

                if ($resultArray[0]['Role'] == "Admin") {

                    header("Location: https://funtargetgame.co.in/DashBoard");

                } else {

                    header("Location: https://funtargetgame.co.in/ShopDashBoard");

                }
                
                exit();

            } else {
                
                $errorMessage = 2;
                
            }

        }
            
    }else {
        
        $errorMessage = 1;
        
    }

}

?>

<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block"></span>
                </a>
              </div>

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>
                  
                  <form action="" method="POST" class="row g-3 needs-validation">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" class="form-control" required>
                        
                        <?php 
                        
                        if ($errorMessage == 1) {
                            
                            echo '<div class="invalid-feedback" style="display: block;">Account Does Not Find</div>';
                            
                        }

                        ?>
                        
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" required>
                      
                        <?php 
                        
                        if ($errorMessage == 2) {
                            
                        echo '<div class="invalid-feedback" style="display: block;">Invalid Password</div>';
                        
                        }

                        ?>
                        
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/js/main.js"></script>
  
</body>
</html>

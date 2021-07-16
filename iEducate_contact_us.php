


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contactStyle.css">
    <title>Form</title>
  </head>
  <body>

  <?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
       $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $feedback = $_POST['feedback'];
        




      $severname="localhost";
 $username="root";
 $passward="";
 $database="iEducate";


$conn = mysqli_connect($severname,$username,$passward,$database);


if(!$conn){
    die("oops!!!failed to connect<br>".mysqli_connect_error());
}
else{

   
    $sql = "INSERT INTO `contact` (`Name`, `Email`, `Phone`, `Description`) VALUES ('$name', '$email', '$contact', '$feedback')";
$result=mysqli_query($conn,$sql);
if($result){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Your entry has submitted successfully!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else{
    echo "Table is not created succesfully,becuse the error is---->>>".mysqli_error($conn);
}

}
    }




?>
    


    <div class="container">
    <h1 class="my-4">Contact Us</h1>
    <div class="form">


      <form action="/phptuts/education project/iEducate_contact_us.php" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label label">Name</label>
              <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
              
            </div>
            <div class="mb-3">
              <label for="email" class="form-label label">Email</label>
              <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
              <label for="contact" class="form-label label">Contact Number</label>
              <input type="phone" name="contact" class="form-control" id="contact">
            </div>
            
            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="feedback"></textarea>
              <label for="floatingTextarea2">Comments</label>
            </div>
    
      
        <button  type="submit" class="btn btn-primary my-4">Submit</button>
   
    
      </form>
    </div>
  
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <footer>
            <p class="text-footer">
                
                Copyright &copy; 2021 - www.iEducate.com - All rights reserved
            </p>
    </footer>
    <script src="js/resp.js"></script>
  </body>
</html>
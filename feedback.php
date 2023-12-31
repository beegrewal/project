

<!DOCTYPE html>
<html lang="en"> 
<head>
    <link rel="icon" type="image/x-icon" href="https://cdn.iconscout.com/icon/free/png-512/free-feedback-1901782-1607981.png?f=avif&w=256">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feeback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="feedback.css">
    
  />
</head>
<body class="mt-4">

    <div id="google_translate_element" class="d-flex justify-content-end"></div>

<div class="text-light text-center mb-5">
    <h1>Please share your Feedback </h1>
    <h4>Regarding our website</h4>
    </div>

<div class="d-flex justify-content-center">
<div class="formm ptb ml-6 w-75 contact_rd mb-4">
    <div class="d-flex justify-content-center"><h5 class="text-center mb-5 ff border rounded w-55 p-2 border-secondary">Please leave your Feedback if you would like to make any changes.</h5> </div>   
           <div class="container">       
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <form action='#' method='post'>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="sr-only">Name</label>
                                <input type="text" class="form-control" placeholder="Your Name" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="sr-only">Email</label>
                                <input type="email" class="form-control" placeholder="Email Address" name="mail">
                            </div>
                        </div>
                    </div>
                    <!--end of /.row-->
                    <div class="form-group">
                        <label class="sr-only">Message</label>
                        <textarea class="form-control" rows="7" placeholder="Write Your Message" name="msg"></textarea>
                    </div>
                    <button type="submit" class="btn btn-info text" name='submit' value='submit' id='send' onclick='msg()'>Submit Feedback</button>
                </form>
            </div>
            <!-- /.col-md-8 -->
        </div>
        <!-- /.row --> 
  
        <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {  
     echo '<div class="alert alert-success text-center" role="alert">Thank you for your message!</div>';
    exit();
}
?> 



    </div>
    <!-- /.container -->
</div>
</div>



 <!-- transletor  -->
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        function googleTranslateElementInit(){
            new google.translate.TranslateElement(
                {pageLanguage: 'en'},
                'google_translate_element'
            );
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    
    <script src='msg.js'></script>
<script>
   

import self from life 
if(self.tired){
    relax
}
else{
    keepcoding()
}



</script>







</body>
</html>

<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'weather';
$conn = mysqli_connect($server, $user, $password, $database);
if(isset($_POST['submit']))
{
    $a = $_POST['name'];
    $b = $_POST['mail'];
    $c = $_POST['msg'];

    $query = "INSERT INTO feedaback(name, mail, msg) values('$a','$b','$c')";
    mysqli_query($conn, $query);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Feedback Box</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</head>
<body>

<div class="jumbotron text-center">
  <a href=""><img src="FeedbackBox.svg" class="img-fluid" alt="Feedback Box" width="250"></a>
</div>
  
<div class="container">
  <center>
    <h1> Thank you! </h1> 
    <?php

      $xml = simplexml_load_file("./data/quotes.xml") or die("ERROR: Cannot load quotes.xml.");

     

       echo $xml->quote[0] . "<br>";
      ?>
  
      
      
      
  


  </center>
</div>

</body>
</html>




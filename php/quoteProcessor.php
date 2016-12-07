<!DOCTYPE html>
<html lang="en">
<head>
  <title>Feedback Box</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
 var xmlDoc=null;
 if (window.ActiveXObject)
 {// code for IE
  xmlDoc=new ActiveXObject("Microsoft.XMLDOM");
 }
 if (xmlDoc!=null)
 { 
  xmlDoc.async=false;xmlDoc.load("/data/quotes.xml");
  var x=xmlDoc.getElementsByTagName("z:row");
  var i = Math.floor((Math.random()*1000)%x.length);
  {
   document.write(x[i].getElementsByTagName("roy")[0]
    .childNodes[0].nodeValue);
  }
 }
</script>
</head>
<body>

<div class="jumbotron text-center">
  <a href=""><img src="FeedbackBox.svg" class="img-fluid" alt="Feedback Box" width="250"></a>
</div>
  
<div class="container">
  <center>
    <h1> Thank you! </h1> 
    <?php
    if (isset($_POST['submit'])) {
    // load previous XML from file
      $xml = simplexml_load_file("./data/quotes.xml") or die("ERROR: Cannot load quotes.xml.");

     

       echo $xml->roy . "<br>";
      
  
      
      
      
  
} else {
      // nothing happened --go back to feedback form
      header("Location: ../index1.html");
}
?>
  </center>
</div>

</body>
</html>




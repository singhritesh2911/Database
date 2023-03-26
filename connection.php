<?php
$servername = 'localhost';
$db = "students";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if ($conn) {
    
    ?>
    
  <script> 
      alert("Connection done");
  </script>
  
  <?php
}else{
    
    ?>
<script> 
      alert("Connection done");
  </script>
  
      <?php    
}

?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Details</title>
    <style>
        .heading{
            font-size: 16px;
            text-align: center;
            margin-bottom: 20px;
            margin-top: 10px;
        }
      
      
      
      </style>
  </head>
  <body>
    <h1 class="heading"> Details of candidate which was apply for WEB DEVELOPMENT Internship</h1>
    
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Degree</th>
      <th scope="col">Mobile no.</th>
      <th scope="col">Email</th>
      <th scope="col">Refer</th>
      <th scope="col">Job Profile</th>
    </tr>
  </thead>
  <tbody>
   
   
   <?php

include 'connection.php';

$selectquery = "SELECT * FROM `job_resigration` ";

$query = mysqli_query($conn, $selectquery);

$nums = mysqli_num_rows($query);



while($res = mysqli_fetch_array($query)){
 
    ?>
    
    
    <tr>
      <th scope="row"><?php echo $res['ID'] ; ?> </th>
      <td> <?php echo $res['NAME'] ; ?> </td>
      <td> <?php echo $res['DEGREE'] ; ?> </td>
      <td> <?php echo $res['MOBILE'] ; ?> </td>
      <td> <?php echo $res['EMAIL'] ; ?> </td>
      <td> <?php echo $res['REFER'] ; ?> </td>
      <td> <?php echo $res['JOB POST'] ; ?> </td>
    </tr> 
 <?php   
    
}

?>
  </tbody>
</table>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
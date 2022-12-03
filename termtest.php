<?php

 $id = $_POST['password'];
 if(!empty($id)){
     
 $db = mysqli_connect('localhost','','','')
 or die('Error connecting to MySQL server.');

$sql = "SELECT * FROM termmarks2020 WHERE ID=$id";
$result = mysqli_query($db, $sql);
    
}

 
 ?>
 
 <?php

if ($result)
 {
  while($row = mysqli_fetch_array($result))
 {

?>
<html>
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">


        <title>Student Online Marksheet</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
       
       
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
<style> 

    .image{
  background-image: url("lumbini.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: 600px;
  position: relative;
    
}
div.d {
  line-height: 400%;
}

.center {
  margin-left: auto;
  margin-right: auto;
}
tr {
   
    border-bottom: 1px solid #000;
    height:34px;
}
table {
    border-collapse: collapse;
    
}
  .container {
    width: 1170px;
  }
h4,h5{
    text-align:center;
}
</style>


</head>
    <body>

<div class="container-fluid">
 <div class = "image">   
  <h5>Lumbini College Colombo 05</h5> 
     <h4> <?php echo $row["Name"]; ?> - Online Marksheet 2020</h4> 
      <h5>Class - <?php echo $row["Grade"]; ?>   </h5>
        <div class="form-group"></div>
        <div class="form-group"></div>
        <div class="form-group"></div>
       
         <div class="form-group"></div>
        <div class="form-group"></div>
          <div class="form-group"></div>
          
          <div class="d">
<div class = "form-group">
    <table class="center">
        <tr>
            <td><?php echo $row["Sub1"];?></td>
            <td>&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row["Marks1"]; ?></td>
            
        </tr>
       
        <tr>
            <td><?php echo $row["Sub2"];?></td>
             <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row["Marks2"];?></td>
        </tr>
    
         <tr>
            <td><?php echo $row["Sub3"];?></td>
             <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row["Marks3"]; ?></td>
            
        </tr>
        
        <tr>
            <td><?php echo $row["Sub4"];?></td>
             <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row["Marks4"];?></td>
        </tr>
        
         <tr>
            <td><?php echo $row["Sub5"];?></td>
             <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row["Marks5"]; ?></td>
            
        </tr>
        
        <tr>
            <td><?php echo $row["Sub6"];?></td>
             <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row["Marks6"];?></td>
        </tr>
        
         <tr>
            <td><?php echo $row["Sub7"];?></td>
             <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row["Marks7"]; ?></td>
            
        </tr>
        
        <tr>
            <td><?php echo $row["Sub8"];?></td>
             <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row["Marks8"];?></td>
        </tr>
       
         <tr>
            <td><?php echo $row["Sub9"];?></td>
             <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row["Marks9"]; ?></td>
            
        </tr>
        
        <tr>
            <td><?php echo $row["Sub10"];?></td>
             <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row["Marks10"];?></td>
        </tr>
        
         <tr>
            <td><?php echo $row["Sub11"];?></td>
             <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row["Marks11"]; ?></td>
            
        </tr>
        
        <tr>
            <td><?php echo $row["Sub12"];?></td>
            
             <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row["Marks12"];?></td>
        </tr>
    </table>
    <table class="center">
        
        <tr>
            <td>Total</td>
            
             <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row["Total"];?></td>
     
      <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>Average</td>
            
             <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row["Average"];?></td>
       
       <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>Rank</td>
            
             <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $row["Rank"];?></td>
       </tr>
    </table>
    


</div></div>
</div>
</div>
</body> 
</html>
<?php
 }
 }
else {
    echo "Registration Number does not exist.";
}
?>

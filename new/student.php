<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>COLLEGE NETWORKING</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
		<div class="navbar navbar-fixed-top navbar-default" role="navigation">
			<div class="container">
				
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home">HOME</a></li>
						<li><a href="#service">SERVICE</a></li>
						<li><a href="#team">SCHOLARS</a></li>
						<li><a href="#portfolio">PORJECT IDEAS</a></li>
						<li><a href="chatsystem/login.php">STUDENT LOGIN</a></li>
					</ul>
				</div>
			</div>
        </div>
        <div id="team">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="wow bounce">J O B &nbsp; H O L D E R S</h2>
					</div>
					<div class="col-md-2 col-sm-2 wow fadeIn" data-wow-delay="0.3s">

<?php
    $con=mysqli_connect("localhost", "root", "","student");
    if(!$con)
    {
        die('could not connect'.mysql_error());
    }
?>
    <table cellspacing="10">
        <tr>
            <?php
                $query1= "SELECT image FROM student";
                $result1=mysqli_query($con,$query1);

                $query2= "SELECT name FROM student";
                $result2=mysqli_query($con,$query2);
                

                $query3= "SELECT company_name FROM student";
                $result3=mysqli_query($con,$query3);
                

                $query4= "SELECT languages FROM student";
                $result4=mysqli_query($con,$query4);
                

                $query5= "SELECT batch FROM student";
                $result5=mysqli_query($con,$query5);

                $query6= "SELECT contact_no FROM student";
                $result6=mysqli_query($con,$query6);
               
                
                $i=0;
                while(($row=mysqli_fetch_array($result1,MYSQLI_BOTH)) && ($column1=mysqli_fetch_array($result2,MYSQLI_BOTH)) && ($column2=mysqli_fetch_array($result3,MYSQLI_BOTH)) && ($column3=mysqli_fetch_array($result4,MYSQLI_BOTH)) && ( $column4=mysqli_fetch_array($result5,MYSQLI_BOTH))&&($column5=mysqli_fetch_array($result6,MYSQLI_BOTH)))
                {
                    $i=$i+1;
                    if($i%6!=0)
                    {
            ?>
            <td><?php echo '<img height="200" width="200" src="data:image;base64,'.$row[0].'">';?>
                <br>
                <h3><?php echo $column1['name']; ?></h3>
                <br>
                <?php echo $column4['batch']; ?>
                <br>
                <?php echo $column2['company_name']; ?>
                <br>
                <?php echo $column3['languages']; ?>
                <br>
                <h2><?php echo $column5['contact_no']; ?></h2>
                <!-- <ul class="social-icon text-center">
                    <li><a href="#" class="wow fadeInUp fa fa-facebook" data-wow-delay="2s"></a></li>
                    <li><a href="#" class="wow fadeInDown fa fa-twitter" data-wow-delay="2s"></a></li>
                </ul> -->
       			<br>
       			<br>
            </td>
            
            <?php
                    }
                    else{
            ?>
        </tr>
        <tr>//fetch wala part
            <td><?php echo '<img height="200" width="200" src="data:image;base64,'.$row[0].'">';?>
            <br>
                <?php echo $column1['name']; ?>
                <br>
                <?php echo $column4['batch']; ?>
                <br>
                <h4><?php echo $column2['company_name']; ?></h4>
                <br>
                <?php echo $column3['languages']; ?>
                <br>
                <h2><?php echo $column5['contact_no']; ?></h2>
                <!-- <ul class="social-icon text-center">
                    <li><a href="#" class="wow fadeInUp fa fa-facebook" data-wow-delay="2s"></a></li>
                    <li><a href="#" class="wow fadeInDown fa fa-twitter" data-wow-delay="2s"></a></li>
                </ul> -->
       			<br>
       			<br>
            </td>
            <?php
                        }
                }
            ?>
        </tr>
    </table>
    </div>
            </div>
            </div>
            <div>
            </body>
</html>
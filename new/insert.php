<html>
    <head>
        <link rel='stylesheet' href='student_record_style.css' type='text/css' />
    </head>
    <body>

<?php

$con=mysqli_connect("localhost", "root", "","student");

if(!$con)
{
    die('could not connect');
}

if (isset($_POST['submit'])) {
   
    if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
    {
        echo "Please select an image";
    }
    else{
        $image= addslashes($_FILES['image']['tmp_name']);
        $name_image= addslashes($_FILES['image']['tmp_name']);
        $image=file_get_contents($image);
        $image=base64_encode($image);
        $name=$_POST['name'];
        $batch=$_POST['batch'];
        $company_name=$_POST['company_name'];
        $languages=$_POST['languages'];
        $contact_details=$_POST['mobile_number'];

        $sql="INSERT INTO student SET name='$name',batch='$batch',company_name='$company_name',languages='$languages',image_name='$name_image',image='$image',contact_no='$contact_details'";
        
        if(!mysqli_query($con,$sql)){
            die('ERROR');
        }
        else{
        ?>
        
        <h1>DATA SUBMITTED SUCCESSFULLY!</h1>
        <?php
            }
    }
}
?>
    </body>
</html>


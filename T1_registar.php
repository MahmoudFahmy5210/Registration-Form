<?php
include'T1_conn_db.php';
$title=$name=$phone=$country=$city=$email=$street1=$street2=$zip=$position=$company=$region="";
$nameerr=$phoneerr=$cityerr=$emailerr=$ziperr=$positionerr=$streeterr=$titleerr=$companyerr=$regionerr="";
if(isset($_POST['submit']))
{
    echo"submitted";
    $title=test_input($_POST['title']);
    $name=test_input($_POST['name']);
    $position=test_input($_POST['position']);
    $company=test_input($_POST['company']);
    $email=test_input($_POST['email']);
    $street1=test_input($_POST['street1']);
    $street2=test_input($_POST['street2']);
    $country=test_input($_POST['country']);
    $phone=test_input($_POST['phone']);
    $city=test_input($_POST['city']);
    $region=test_input($_POST['region']);
    $zip=test_input($_POST['zip']);
   
    if(!preg_match("/^[a-zA-Z ]*$/", $name))
    {
        $nameerr="*Name must contain letter and whitespace only ";
    }
    elseif(!preg_match("/[^A-Za-z0-9]+/",$position))
    {
        $titleerr="*Invalid position use letter only";
    }
    elseif(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,10}$/",$email))
    {
     $emailerr="*example@gmail.com";   
    }
    elseif(!preg_match("/[^A-Za-z0-9]+/",$street1))
    {
        $streeterr="*Invalid street name use letter only";
    }
    elseif(!preg_match("/[^A-Za-z0-9]+/",$street2))
    {
        $streeterr="*Invalid street name use letter only";
    }
    elseif (!preg_match("/^(010|011|012)[0-9]{8}$/",$phone))
    {
     $phoneerr="*Phone must be 11 number start with 012 or 011 or 010";    
    }
    elseif(!preg_match("/[^A-Za-z0-9]+/",$company))
    {
        $companyerr="*Invalid company name use letter only";
    }
    elseif (!preg_match("/^[a-zA-Z ]*$/", $city)) 
    {
    $cityerr="*City must contain letter and whitespace only ";
    }
    elseif (!preg_match("/[^A-Za-z0-9]+/",$region))
    {
     $regionerr="*Region name contain letters and numbers";    
    }
    elseif (!preg_match("/^[0-9]{5}$/",$zip)) {
    $ziperr="*Postal zip code must contain 5 number";
    }
    else
    {
        $sql_="INSERT INTO users(title,name,position,company,email,street1,street2,country,region,city,phone,zip) VALUE('$title','$name','$position','$company','$email','$street1','$street2','$region','$country','$city','$phone','$zip')";
        mysqli_query($conn, $sql_);
    }
    
}
    
function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
mysqli_close($conn);
?>
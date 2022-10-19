<?php
$hasError=0;
if(isset($_REQUEST["submit"]))//assest define that my value is null or not
{
    if($_REQUEST["fname"]=="")// (empty($_REQUEST["Fname"]))//empty dfine zero
    {
        echo "<b>First name is required</b>";
        echo"<br>";
        $hasError=1;
    }

    else 
    {
        echo $_REQUEST["fname"];
        echo"<br>";
    }
    
    
}

if(isset($_REQUEST["submit"]))//assest define that my value is null or not
{
    if($_REQUEST["lname"]=="")// (empty($_REQUEST["Fname"]))//empty dfine zero
    {
        echo "<b> Last name is required </b>";
        echo"<br>";
    }

    else 
    {
        echo $_REQUEST["lname"];
        echo"<br>";
    }
    
    
}

if(isset($_REQUEST["submit"]))//assest define that my value is null or not
{
    if($_REQUEST["Fname"]=="")// (empty($_REQUEST["Fname"]))//empty dfine zero
    {
        echo "<b>Father name is required</b>";
        echo"<br>";
    }

    else 
    {
        echo $_REQUEST["Fname"];
        echo"<br>";
    }
    
    
}
//echo"<br>";
//echo $_REQUEST["Mname"];
//echo"<br>";
//echo $_REQUEST["age"];






if(isset($_REQUEST["Mname"]))//assest define that my value is null or not
{
    if($_REQUEST["Mname"]=="")// (empty($_REQUEST["Fname"]))//empty dfine zero
    {
        echo "<b>Mother name is required</b>";
        echo"<br>";
    }

    else 
    {
        echo $_REQUEST["Mname"];
        echo"<br>";
    }
    
    
}



if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["date"]=="")
    {
        echo "<b>Date of Birth is required</b>";
        echo"<br>";
    }

    else 
    {
        echo $_REQUEST["date"];
        echo"<br>";
    }
    
    
}

if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["age"]=="")
    {
        echo "<b>Age is required</b>";
        echo"<br>";
    }

    else 
    {
        echo $_REQUEST["age"];
        echo"<br>";
    }
    
    
}




if(isset($_REQUEST["Gender"]))
{
    echo "<b>radio is checked</b>";
    echo"<br>";
    if($_REQUEST["Gender"]=="male")//value = male
    {
        echo "you have choosen".$_REQUEST["Gender"];
    }
    else{
        echo "you have choosen".$_REQUEST["Gender"];
    }
}
else{
    echo "<b>radio is not checked</b>";
    echo"<br>";
}

if(isset($_REQUEST["Doctor"]))
{
    echo "<b>checkbox is checked</b>";
    echo"<br>";
    
    if($_REQUEST["Doctor"]=="Doctor")//value = male
    {
        echo "<b>you have choosen </b>".$_REQUEST["Doctor"];
        echo"<br>";
    }
   
   if(isset($_REQUEST["Family"]))
   {
    if($_REQUEST["Family"]=="Family"){
        echo "<b>you have choosen</b>".$_REQUEST["Family"];
        echo"<br>";
    }
   }
   
   if(isset($_REQUEST["Internet"]))
   {
    if($_REQUEST["Internet"]=="Internet"){
        echo "<b>you have choosen</b>".$_REQUEST["Internet"];
        echo"<br>";
    }
   }
 
   if(isset($_REQUEST["Other"]))
   {
    if($_REQUEST["Other"]=="Other"){
        echo "<b>you have choosen</b>".$_REQUEST["Other"];
        echo"<br>";
    }
   }
   
}
else{
    echo "<b>checkbox is not checked</b>";
    echo"<br>";
}


if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["WRTP"]=="")
    {
        echo "<b>Didn't mention the name of the person who referred the patient</b>";
        echo"<br>";
    }

    else 
    {
        echo $_REQUEST["WRTP"];
        echo"<br>";
    }
    
    
}


if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["email"]=="")
    {
        echo "<b>Did not mention the email ID</b>";
        echo"<br>";
    }

    else 
    {
        echo $_REQUEST["email"];
        echo"<br>";
    }
    
}



if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["no"]=="")
    {
        echo "<b>Mobile no is required</b>";
        echo"<br>";
    }

    else 
    {
        echo $_REQUEST["no"];
        echo"<br>";
    }
    
}


if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["address"]=="")
    {
        echo "<b>Street number is not mentioned</b>";
        echo"<br>";
    }

    else 
    {
        echo $_REQUEST["address"];
        echo"<br>";
    } 
}



if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["state"]=="")
    {
        echo "<b>state is required</b>";
        echo"<br>";
    }

    else 
    {
        echo $_REQUEST["state"];
        echo"<br>";
    }
    
}

if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["postcode"]=="")
    {
        echo "<b>Postcode is required</b>";
        echo"<br>";
    }

    else 
    {
        echo $_REQUEST["postcode"];
        echo"<br>";
    }
    
}

if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["Ename"]=="")
    {
        echo "<b>Emergency contact name is required</b>";
        echo"<br>";
    }

    else 
    {
        echo $_REQUEST["Ename"];
        echo"<br>";
    }
    
}

if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["RP"]=="")
    {
        echo "<b>Relationship with patient is required</b>";
        echo"<br>";
    }

    else 
    {
        echo $_REQUEST["RP"];
        echo"<br>";
    }
    
}

if(isset($_REQUEST["submit"]))
{
    if($_REQUEST["eno"]=="")
    {
        echo "<b>Emergency cotact number is required</b>";
        echo"<br>";
    }

    else 
    {
        echo $_REQUEST["eno"];
        echo"<br>";
    }
    
}

if($hasError==0)
{
$phpArray=array("fname:"=>$_REQUEST["fname"], "lname:"=>$_REQUEST["lname"],"Fname:"=>$_REQUEST["Fname"], "Mname:"=>$_REQUEST["Mname"], "date:"=>$_REQUEST["date"],
"age:"=>$_REQUEST["age"], "Gender:"=>$_REQUEST["Gender"], "Doctor:"=>$_REQUEST["Doctor"], "Family:"=>$_REQUEST["Family"], "Internet:"=>$_REQUEST["Internet"],
"Other:"=>$_REQUEST["Other"], "WRTP:"=>$_REQUEST["WRTP"], "email:"=>$_REQUEST["email"], "no:"=>$_REQUEST["no"], "address:"=>$_REQUEST["address"],
"state:"=>$_REQUEST["state"], "postcode:"=>$_REQUEST["postcode"], "Ename:"=>$_REQUEST["Ename"], "RP:"=>$_REQUEST["RP"], "eno:"=>$_REQUEST["eno"]);

$phpdata=json_decode(file_get_contents("..data/data.json"));
$alldata=$phpdata;
$alldata[]=$phpArray;

$myJsonObj=json_encode($phpArray,JSON_PRETTY_PRINT);
if(file_put_contents("../data/data.json",$myJsonObj))
{
    echo"json data written";
}
else{
    echo"error occured";
}

}
foreach($phpdata as $myobject)
{
    foreach($myobject as $key=>$value)
    {
        echo "your".$key."is".$value."<br>";
    }
}
//5 unique validation must....
//background note in report...
//every user should have 12 features...



    

?>


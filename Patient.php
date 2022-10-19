<?php
include("../Process/Result.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <form action="http://localhost/SecH/Login/login.php " method="post" >
        <table>
            <h1 align="center">NEW PATIENT'S REGISTRATION FORM</h1>
            <img src="logo.jpg" alt="logo" width="300" height="400">
            
            <tr align="center">
            
                <td for="fname"><b>Patient Name</b></td>
                
                <td>
                    <input type="text" id="fname" name="fname" placeholder="Enter Patient's First name">
                    <input type="text" id="lname" name="lname" placeholder="Enter Patient's Last name">

                </td>




            </tr>


            <tr align="center">
                <td for="Fname"><b>Father Name</b></td>

                <td>
                    <input type="text" id="Fname" name="Fname" placeholder="Enter Patient's father name">

                </td>




            </tr>


            <tr align="center">
                <td for="Mname"><b>Mother name</b></td>
                <td>
                    <input type="text" id="Mname" name="Mname" placeholder="Enter Patient's mother name">



                </td>

            </tr>




              <tr align ="center">

                <td><b>Date of birth</b></td>
                <td>

                    <input type="date" id="date" name="date">
                </td>

              </tr>

              <tr align ="center">

                <td><b>Age</b></td>
                <td>

                    <input type="number" name="age" placeholder="Enter Patient's Age">
                </td>

              </tr>

              <tr align="center">
                <td for="Gender"><b>Gender</b></td>

                <td>

                    <input type="radio" id="male" name="Gender" value="male">Male
                    <input type="radio" id="female" name="Gender" value="Female">Female
                    <input type="radio" id="other" name="Gender" value="other">other


                </td>

              </tr>
              
              <tr align="center">
                <td for="Referred"><b>Referred by</b></td>

                <td>

                    <input type="checkbox" id="Doctor" name="Doctor" value="Doctor">Doctor
                    <input type="checkbox" id="Family" name="Family" value="Family">Family
                    <input type="checkbox" id="Internet" name="Internet" value="Internet">Internet
                    <input type="checkbox" id="Other" name="Other" value="Other">Other


                </td>

              </tr>

              <tr align="center">
                <td for="WRTP"><b>Name of person who referred the patient's</b></td>
                <td>
                    <input type="text" id="WRTP" name="WRTP" placeholder="Optional">



                </td>
              </tr>
              


              <tr align="center">
                <td for="email"><b>EMail Id</b></td>

                <td>
                    <input type="email" id="email" name="email" placeholder="Enter Your Email">


                </td>


              </tr>
              
              <tr align="center">
                <td for="password"><b>Password</b></td>

                <td>
                    <input type="password" id="password" name="password" placeholder="Enter Your Password">


                </td>
              </tr>

              

              <tr align="Center">

                <td for="no"><b>Mobile number</b></td>

                <td>
                    <input type="text" id="no" name="no" placeholder="Enter Patient's Mobile No">
                </td>



              </tr>

              <tr align="center">
                <td for="Address"><b>Street Adress</b></td>

                <td>
                    <textarea input type="text" id="address" name="address" placeholder="Patient's Address" rows="4" cols="20"></textarea>
                </td>

              </tr>
              
              

              
              
              <tr align="center">
              <td for="state"><b>State</b></td>

              <td>

                <input type="text" id="State" name="state" placeholder="state">
              </td>
              </tr>

              <tr align="center">
                <td for="postcode"><b>Postcode</b></td>

                <td>
                   <input type="number" id="postcode" name="postcode" placeholder="Enter Postcode">
                </td>
              </tr>

             

              <tr align="Center">
               
                  <td for="Ename"><b>Emergency Contact name</b></td>

                <td>
                  <input type="text" id="Ename" name="Ename" placeholder="Enter name">
                </td>

             <tr align="Center">
              <td for="RP"><b>Relationship To patient</b></td>
              <td>
                <input type="text" id="RP" name="RP" placeholder="who are you to the patient">

                <tr align="Center">

                <td for="eno"><b>Emergency contact number</b></td>

                <td>
                    <input type="number" id="eno" name="eno" placeholder="Enter Relative Mobile No">
                </td>


                <tr>
                <td>

                    <td>
                        <input type="submit" name="submit">
                        <input type="Reset">
                        <a href="http://localhost/SecH/Login/login.php"><b>Already registered? LOG IN<b></a> 

                    </td>
                </td>

              </tr>

              
          
              
              

        </table>


    </form>
</body>
</html>
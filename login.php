<?php
include("../Process/login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <form action="https://www.w3schools.com/php/php_json.asp " method="post" >
        <table>
            <h1 align="center">PATIENT'S LOG IN FORM</h1>


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

              <tr>
                <td>

                    <td>
                        <input type="submit" name="submit">
                        <input type="Reset">
                    </td>
                </td>

              </tr>


              </table>


</form>
</body>
</html>

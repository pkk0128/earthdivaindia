<?php include_once '../connect.php' ;
    $wholesale = new wholesale;
?>

<div class="login_tab">
       
            <legend>Wholesale Login</legend>
            <br>
            <form method="POST">
            <table>
                <tr>
                    <td>Username:* </td>
                    <td><input type="text" name="UName" placeholder="Type your username here.."autofocus="" required="" /></td>
                </tr>
                <tr>
                    <td>Password: *</td>
                    <td> <input type="password" name="pass" placeholder="Type your password here.."autofocus="" required="" /></td>
                </tr>    
                <tr>
                    <td style=""> <input type="submit" align="center" name="wholesale_sub" value="Login"  autofocus="" /></td>
                    <td> <input type="reset" align="center" name="cancel" value="Cancel/reset" autofocus="" /></td>
                </tr>
                <tr>
                    <td style="background-color: bisque; "></td>
                    <td id="signup_a"><a href="#"><input type="button" id="signup_b" name="signup" value="Sign Up" /></a>Here..</td>
                </tr>
            </table>
            </form>

        
    </div>

    <?php 
    if(isset($_POST['wholesale_sub'])){
        $username=$_POST['UName'];
        $password=$_POST['pass'];
        
        $wholesale->wholesale_login($username,$password);
    }

    ?>


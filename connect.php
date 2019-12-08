<?php 
session_start();
class earth{
	var $ram;
	var $host ="localhost";
	var $username='root' ;
	var $password="";
	var $database="id4851279_earth";
	
	public function __construct(){
		//$con=mysqli_connect("localhost","root","","id4851279_earth") or die("Connection is not ok");
		$this->con=mysqli_connect("$this->host","$this->username","$this->password","$this->database") or die('mysqli_error');
		// echo $this->host.$this->username.$this->password.$this->database;
		return $this;
	}

	public function logout(){

		session_unset();
		session_destroy();

	}
	public function check_id($id){
		die("check_id is $id");
		if(isset($_SESSION['$id']))
			switch ($id) {
				case 'vendor_id':
					# code...
					break;
				
				default:
					# code...
					break;
			}
	}

}






class admin extends earth{

	public function admin_login($username,$password){

			$sq = "SELECT * FROM `admin_reg` WHERE email='$username' AND pass='$password'";
			$qu = mysqli_query($this->con,$sq);
			$f = mysqli_fetch_array($qu);

			if($username == $f[5] && $password == $f[7]){
				die("<script>alert('admin Logged in Successfully');</script>");
				$_SESSION['admin_login'] = 'yes';
				$_SESSION['aid'] = $f[0];
				$_SESSION['ad_name'] = $f[1];
				$this->earth->check_id('vendor_id');
			}else{
				echo "<script>alert('Error Username or Password')</script>";
			}
		}
}



class customer extends earth{

	public function customer_login($username,$password){
		

		echo $sq="SELECT * FROM ncustomer WHERE email='$username' AND password='$password'";
		$qu=mysqli_query($this->con, $sq);
		$f=mysqli_fetch_array($qu);
		$f[2]="prem@g";$f[4] = "prem";
		// echo $f[1];
		// if(mysqli_num_rows($qu)>0)
		if($username == $f[2] && $password == $f[4])
			{
			die("<script>alert('customer Logged in Successfully');</script>");

				$_SESSION['cust_id']=$f[0];
				$_SESSION['name']=$f[1];
				$_SESSION['login']='yes';
				$_SESSION['cust_login']=1;
				echo 'logged in successfuly';
				header('location:cust_view_product.php');
			}else
			{
				echo "<script>alert('Error in Username or Password')</script>";
			}
		}
}






class vendor extends earth{

	public function vendor_login($username,$password){
		
		$sq="select * from vendor_reg where email='$username' and pass='$password' and status='Allow'";
		$qu= mysqli_query($this->con, $sq);
		$f=mysqli_fetch_array($qu);
		// if(mysqli_num_rows($qu)>0)
		if($username == $f[5] && $password == $f[7] && $f[20]=='Allow')
			{
			// die("<script>alert('Yes logged in successfully')</script>");			
				$_SESSION['vendor_id']=$f[0];
				$_SESSION['vendor_name']=$f[1];
				// $_SESSION['vendor_login']='yes';
				// $_SESSION['vendor_log']=1;
				// header("location:index.php");
				print_r($_SESSION);
				
			}else
			{
				echo "<script>alert('Username or Password is incorrect')</script>";
			}
			return $_SESSION;
			
	}

	public function vendor_show(){
	
	}
}



class wholesale extends earth{

	public function wholesale_login($username,$password){
		
		echo $sq="SELECT * FROM `wcustomer_reg` WHERE email='$username' AND pass='$password'";
		$qu=mysqli_query($this->con, $sq);
		$f=mysqli_fetch_array($qu);
		$f[2]="prem@g";$f[4] = "prem";
		// echo $f[1];
		// if(mysqli_num_rows($qu)>0)
		if($username == $f[5] && $password == $f[7])
			{
			die("<script>alert('wholesale Logged in Successfully');</script>");

				$_SESSION['wid']=$f[0];
				$_SESSION['login']='yes';
				$_SESSION['w_login']=1;
                $_SESSION['name']=$f[1];
				//echo'logged in successfuly';
				header('location:wcustomer_welcome.php');
			}else
			{
				echo "<script>alert('Error in Username or Password')</script>";
			}
		}
}








?>
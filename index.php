<?php
require_once('db.php');
?>
<!DOCTYPE html>
<html>

       <head>
                <meta name="keywords" content="Esanosys Sign Up, Mansi Maloo MBM Jodhpur. ESANOSYS : Sales Automation Simplified">
                <meta name="description" content="Esanosys Sign Up by Mansi Maloo MBM Jodhpur. ESANOSYS : Sales Automation Simplified. Grow more Leads, Close more Deals, Delight Customers.">
                <title>Esanosys Task: Sign Up Page</title>
		<link href="style.css" rel="stylesheet" type="text/css"/>
	</head>

	<body>
                <h4 align='right'><a style='color:#fff;'href='ReadMeFirst.txt' target='_blank'>Read Me First</a>
                <h2 style="text-align:center;"><a href="http://salesautomation.esanosys.com/" style="color:white" target="_blank">Esanosys</a> : Sales Automation Simplified. </h2>

                 <img src="http://esanosys.com/img/header-bg.jpg" alt="ESANOSYS: Bengaluru" width="100%" height="40%">
                 <p align='center' title='Esanosys Services' style='color:yellow'><b><i>Talk to us for demand generation, lead nurturing and 360° marketing services for your SaaS product, mobile app or services.<br></b></i></p>
                 <p align='center' title='About Esanosys'> We work with startups, growth stage companies and market leaders for B2B and B2C marketing solutions.We are a startup just like you were sometime back. Our team of marketers, designers, writers and developers are experts in their chosen domain. Before being part of the awesome Esanosys team, we have worked with large corporates and startups alike and realized, the world needs a better marketing company. We are different, not just different but a whole lot different. We are not just a marketing automation company which sells costly software nor a traditional marketing agency for creating content and creatives. We are marketing automation agency which helps clients implement marketing automation and realize it's full potential with best in class content, creatives and deliverables.</p>

		<h3 style="text-align:center;"> Sign Up on Esanosys Project </h3>
			<form name='myform' align='center' method='post' action='index.php'>
		<?php
		echo"<table align='center' title='Esanosys Signup Form'>";
		echo "<tr title='Esanosys Customer Name'><td><label for='name'>Name :</label><br><br></td>";
		echo"<td><input type='text' name ='user' placeholder='eg. Ravi Shah' required><br><br></td></tr>";
		echo "<tr title='Esanosys Customer Mobile'><td><label for='mob'>Mobile :</label><br><br></td>";
		echo "<td><input type='text' name='mob' maxlength=10 minlength=10 placeholder='eg. 9414112345' required><br><br></td></tr>";
		echo "<tr title='Esanosys Customer Email'><td><label for='email'>Email id :</label><br><br></td>";
		echo"<td><input type='email' name='mail' placeholder='eg. ravishah@gmail.com' required><br><br></td></tr>";
		echo"<tr title='Esanosys Customer Company'><td><label for='company'>Company:</label><br><br></td>";
		echo"<td><input type='text' name='company' placeholder='eg. Esanosys' required><br><br></td></tr>";
		echo"<tr><td colspan=2 align='center'><input type='submit' value='SUBMIT' name='submit'><br></td></tr></table>";



	?>
	</form>
	</body>

</html>
<?php
if(!empty($_POST["submit"]))
{
	if(!empty($_POST["user"]&&$_POST["mob"]&&$_POST["mail"]&&$_POST["company"]))
	{
$name=$_POST["user"];
$mob=$_POST["mob"];
$mail=$_POST["mail"];
$company=$_POST["company"];


$query="insert into register(name,contact,mail,company)values('$name','$mob','$mail','$company')";
$result = mysqli_query($con,$query);
		if(!$result)
			echo "Error : " . mysqli_error($con);
		else
		{
                        $to="$mail";
			$subject="Hi $name, Thank You for signing up.";
			$msg="
			<html>
			<body>
					<h3 align='center'>THANK YOU!!!</h3>
					<p style='color:blue;background-color:#ffcc00;'>This mail is to inform you that you have successfully registered your firm ( $company ) on the esanosys project sign up page.Thank you for signing up.</p>
			                <p>Regards,<br>Mansi Maloo</p>
                        </body>
			</html>
			";
			$msg = wordwrap($msg,70);
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <mansi.esanosys.mail@designerninja.xyz>' . "\r\n";
			mail($to,$subject,$msg,$headers);
			echo "<script type='text/javascript'>";
                        echo "alert('You have successfully signed up!!Check mail for confirmation.!! ');";
                        echo "</script>";
		        }
}
}
?>

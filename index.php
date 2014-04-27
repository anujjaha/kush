<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>
		
		
		Cybera Print Art MIS By ( ANUJ JAHA IT GOLD MEDALIST )

</title>

<style>
#login_box .input
{
background-color: #FFFFFF;
    border: 1px solid #CCCCCC;
    border-radius: 3px 3px 3px 3px;
    color: #555555;
    display: inline-block;
    font-size: 13px;
    height: 18px;
    line-height: 18px;
    margin-bottom: 9px;
    padding: 4px 4px 4px 23px;
    width: 210px;
}
.btn
{
-moz-border-bottom-colors: none;
    -moz-border-image: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
  background-color: #DA4F49;
    background-image: -moz-linear-gradient(center top , #EE5F5B, #BD362F);
    background-repeat: repeat-x;
    border-color: #E6E6E6 #E6E6E6 #B3B3B3;
    border-radius: 4px 4px 4px 4px;
    border-style: solid;
    border-width: 1px;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset, 0 1px 2px rgba(0, 0, 0, 0.05);
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-size: 13px;
    line-height: 18px;
    margin-bottom: 0;
    padding: 4px 10px;
    text-align: center;
    text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
    vertical-align: middle;
    float:right;
}
#login_box
{
padding:60px 30px 30px 30px;
border:solid 1px #dedede;
width:238px;
background-color:#fcfcfc;
margin-top:70px;

}
#img_box
{
   background-color: #FFFFFF;
    border: 1px solid #DEDEDE;
   
   
    margin-left: 77px;
    margin-top: -108px;
    position: absolute;
    width: 86px;
 height: 86px;
}
.user
{
background:url(icons/user.png) 4px no-repeat ;
}
.passcode
{
background:url(icons/lock.png) 4px no-repeat;
}
.avatar_img
{
padding:3px;
}
#login_container
{
background:url(blue.jpg) #006699;
    overflow: auto;
    width: 300px;

}
</style>
	<link rel="shortcut icon" href="img/favicon.ico" />
</head>
<body bgcolor="#CCCCCC">
<center>	
<table align="center" border="0">
	<tr>
		<td>
			<h1>
				Login System
			</h1>
		</td>
	</tr>
</table>
<script type="text/javascript">
	function data()
	{
		var a = document.getElementById("username").value;
		var b = document.getElementById("password").value;
		if ( a == "" )
		{
			document.getElementById("username").focus();
			alert("Please Fill Name ");
			return false;
		}
		if ( b == "" )
		{
			document.getElementById("password").focus();
			alert("Please Provide Pass Word ");
			return false;
		}
		
	}
</script>
<div id='login_container'>
<div id='login_box'>
<div id='img_box'>
<img src='icons/logo.png' class='avatar_img'/></div>
<form method='post' action='ck.php'>

<input type='text' id='username' name="username" class='input user'/> <br/>
<input type='password' id='password' name="password" class='input passcode'/> <br/>

<input type='submit' value=' Login ' class='btn'  onClick="return data()"/>
<div style='clear:both'></div>

</form>
</div>
</div>

</div>
</center>
</body>
</html>
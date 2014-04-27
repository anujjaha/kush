<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Maheetee</title>
<link href="css/index_style.css" rel="stylesheet" type="text/css" />
</head>
    <body>
    	<div class="main">
        	<div class="top">
       	    <div class="phone_img" style="float:left;padding-left:5px;">
            
            <a href="login.php" title="Customer Login"><img src="images/customer_login.png" width="143" height="38" /></a>
            
            <a href="user_register.php" title="User Registration"><img src="images/join_now.png" width="113" height="38" /></a>
            
            </div>
        <div class="phone_img"><img src="images/phone.png" /></div>
                
                <div class="logo"><img src="images/logo.png" /></div>
            </div>
            
            <div class="middle">
            	<style>
	
	input[type="text"]
{

font-size:24px;
display:block;
margin-bottom:10px;

}
input[type="button"]
{
width:420px;
margin-left:35px;
display:block;
color:#FFFFFF;
}
   </style>

<link rel="stylesheet" type="text/css" href="css/jkmegamenu.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type='text/javascript' src='js/jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="js/jquery.autocomplete.css" />

<script type="text/javascript">
var J = jQuery.noConflict();

J().ready(function() {
	J("#course_city").autocomplete("get_city.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
});

J().ready(function() {
	J("#course_key").autocomplete("get_key.php", {
		width: 560,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
});

J().ready(function() {
	J("#course_loc").autocomplete("get_loc.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
});
</script>
<script type="text/javascript">
	function data()
	{
		document.getElementById("course_key").focus();

		
	}
</script>
<script type="text/javascript">
function vali()
{
//var x=document.forms["myForm"]["fname"].value;
var x = document.getElementById("course_key").value;
if (x==null || x=="")
  {
  alert("Please Enter Key Words");
  
  return false;
  }
}
</script>

<script type="text/javascript" language="javascript">
function changedropdown()
{



	var country = $("#course_city").val();
	$.ajax({
	   type: "get",
	   url: "cat_bk.php",
	   data: "course_city=" + course_city + "&action=state",

	   success: function(msg)
	   {
			$("#state").html(msg);
	   }
	 });
}

function changecitydropdown()
{

	var state = $("#state").val();
	//alert(state);
	$.ajax({
	   type: "POST",
	   url: "cat_view_bk.php",
	   data: "state=" + state + "&action=city",

	   success: function(msg)
	   {
			$("#city").html(msg);
	   }
	 });
}
</script>

<form action="data.php" method="post" onSubmit="return vali()">


<table align="center" style="margin-left:20px;">

<tr>
		<td align="center" colspan="2">
		<table align="center" border="0">
		<tr>
			<td width="220">
			
				<input type="text" name="course_city" id="course_city" placeholder="Enter City Name" class="test_small" size="14" onblur="return changedropdown()"/>
				
				<input type="text" name="state" id="state" placeholder="state Name" class="test_small" size="14" />
			
				
			</td>
			
		</tr>
		<tr>
			<td colspan="3" align="center">	
					&nbsp;&nbsp;&nbsp;
				
		</td>
		</tr>
	</table>
	</td></tr>
	</table>

		
	</form>
                </div>
                
                <div class="bottom">
                	<div class="footer_main">
                    	<div class="footer_link">
                        	 <a href="about.php">About Us</a>|
                             <a href="http://cms.maheetee.com">Employee Portal</a>|
                             <a href="user_register.php">Membership form</a>|
                             <a href="contact.php">Feedback</a>|
                             <a href="contact.php">Contact Us</a>
                        </div>
                        
                        <div class="copy">Copyright &copy; 2012 maheetee.com</div>
                        <div class="sitemap">Legal Disclaimer : <a href="privacy_policy.php">Privacy Policy</a> |  <a href="#">Sitemap</a></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

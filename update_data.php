<?php
//include ("cn.php");
include ("val.php");
include ("menu.php");
include ("cn.php");
$id = $_GET['id'];
//echo $id;
$q = "select * from master_data where id ='$id'";
$r = mysql_query($q);
while ( $row = mysql_fetch_assoc($r))
{
	$p_num = $row['p_num'];
	$date = $row['date'];
	$name = $row['name'];
	$num = $row['txt_num'];
	$add = $row['txt_add'];
	$j_name = $row['j_name'];
	$m_name = $row['m_name'];
	$p_name = $row['p_name'];
	$c_size = $row['c_size'];
	$more = $row['more'];
	$print_det = $row['print_det'];
	$lami_det = $row['lami_det'];
	$tot_shet = $row['tot_shet'];
	$p_ling = $row['p_ling'];
	$paper_by = $row['paper_by'];
	
}
?>
<script language="javascript" type="text/javascript">
    <!--
    //Browser Support Code
    function ajaxFunction(){
	
	var data = document.getElementById("name").value;
	document.getElementById("c_name").innerHTML = data;
    var ajaxRequest; // The variable that makes Ajax possible!
    try{
    // Opera 8.0+, Firefox, Safari
    ajaxRequest = new XMLHttpRequest();
    } catch (e){
    // Internet Explorer Browsers
    try{
    ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
    try{
    ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (e){
    // Something went wrong
    alert("Your browser broke!");
    return false;
    }
    }
    }
    // Create a function that will receive data sent from the server
    ajaxRequest.onreadystatechange = function(){
    if(ajaxRequest.readyState == 4){
  //  var ajaxDisplay = document.getElementById('ajaxDiv');
    //ajaxDisplay.innerHTML = ajaxRequest.responseText;
	document.getElementById("txt_num").value = ajaxRequest.responseText;
//	document.getElementById("txt_add").value = ajaxRequest.responseText[1];
    }
    }
    var name = document.getElementById('name').value;
    var queryString = "?name=" + name;
    ajaxRequest.open("GET", "data.php" + queryString, true);
    ajaxRequest.send(null);
    }
	
	// second fucntion
	
	
	
	function ajaxFunction2(){
	
	var c_num = document.getElementById("txt_num").value;
	document.getElementById("c_num").innerHTML = c_num;
	
    var ajaxRequest; // The variable that makes Ajax possible!
    try{
    // Opera 8.0+, Firefox, Safari
    ajaxRequest = new XMLHttpRequest();
    } catch (e){
    // Internet Explorer Browsers
    try{
    ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
    try{
    ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (e){
    // Something went wrong
    alert("Your browser broke!");
    return false;
    }
    }
    }
    // Create a function that will receive data sent from the server
    ajaxRequest.onreadystatechange = function(){
    if(ajaxRequest.readyState == 4){
  //  var ajaxDisplay = document.getElementById('ajaxDiv');
    //ajaxDisplay.innerHTML = ajaxRequest.responseText;
	document.getElementById("txt_add").value = ajaxRequest.responseText;
//	document.getElementById("txt_add").value = ajaxRequest.responseText[1];
    }
    }
    var name = document.getElementById('name').value;
    var queryString = "?name=" + name;
    ajaxRequest.open("GET", "data_1.php" + queryString, true);
    ajaxRequest.send(null);
    }
    //-->
    </script>
   

<link rel="stylesheet" type="text/css" href="css/jkmegamenu.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type='text/javascript' src='js/jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="js/jquery.autocomplete.css" />

<script type="text/javascript">
var J = jQuery.noConflict();

J().ready(function() {
	J("#name").autocomplete("get_name.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	
	
	J("#j_name").autocomplete("job_name.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	
	J("#m_name").autocomplete("get_mname.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	
	
	J("#p_name").autocomplete("get_pname.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	
	J("#c_size").autocomplete("get_csize.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	
	
	J("#print_det").autocomplete("get_print_det.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	
	J("#lami_det").autocomplete("get_lami_det.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	
	J("#p_ling").autocomplete("get_pull_det.php", {
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
<script type="text/javascript" >
function jname()
{
	var jname = document.getElementById("j_name").value;
	document.getElementById("s_j_name").innerHTML = jname;
	if ( jname == "" )
		{
			alert("Please Insert Job Name");
			document.getElementById("j_name").focus();
			return false;
		}
}	

function mname()
{
	var mname = document.getElementById("m_name").value;
	if ( mname == "" )
		{
			alert("Please Insert Machine Name");
			document.getElementById("m_name").focus();
			return false;
		}
		document.getElementById("s_m_name").innerHTML = mname;
}	

function tots()
{
	var tots = document.getElementById("tot_shet").value;
	document.getElementById("tot_shit").innerHTML = tots;
	var ttos = document.getElementById("tot_shet").value;
	if ( ttos == "" )
		{
			alert("Please Insert Total Sheets");
			document.getElementById("tot_shet").focus();
			return false;
		}

}

function pname()
{
	var pname = document.getElementById("p_name").value;
	document.getElementById("s_p_name").innerHTML = pname;
	
		var ppname = document.getElementById("p_name").value;
	if ( ppname == "" )
		{
			alert("Please Insert Paper Details");
			document.getElementById("p_name").focus();
			return false;
		}

}	
function csize()
{
	var csize = document.getElementById("c_size").value;
	document.getElementById("s_c_size").innerHTML = csize;

	var csizee = document.getElementById("c_size").value;
	if ( csizee == "" )
		{
			alert("Please Insert Cutting Size");
			document.getElementById("c_size").focus();
			return false;
		}

}	

function printd()
{
	var printd = document.getElementById("print_det").value;
	document.getElementById("s_print_det").innerHTML = printd;
	var printdd = document.getElementById("print_det").value;
	if ( printdd == "" )
		{
			alert("Please Insert Printing Details ");
			document.getElementById("print_det").focus();
			return false;
		}

	
}


function pling()
{
	var pling = document.getElementById("p_ling").value;
	if ( pling == "" )
		{
			alert("Please Insert Pulling Details ");
			document.getElementById("p_ling").focus();
			return false;
		}
}


function laming()
{
	var lmings = document.getElementById("lami_det").value;
	if ( lmings == "" )
		{
			alert("Please Insert Lamination Details ");
			document.getElementById("lami_det").focus();
			return false;
		}
}


</script>
<script type="text/javascript">
	function chk()
	{
		var key;
//		alert("Key PRes");
		key = document.getElementById("key").value;
		skey = document.getElementById("key_c").value;
		if ( key == "" )
		{
			alert("Please Insert Security Key");
			document.getElementById("key").focus();
			return false;
		}
		if ( key != skey)
		{
			alert("Please Insert Valid Security Key");
			document.getElementById("key").value ="";
			document.getElementById("key").focus();
			return false;
		}
	}
</script>
<script type="text/javascript">
	function st()
	{
		document.getElementById("name").focus();
	}
	
	function pbar()
	{
	var pbar =	document.getElementById("p_by").value;
	document.getElementById("s_p_by").innerHTML = pbar;
		
	}
</script>
<body onLoad="st()">
    <form name='myForm' method="post" action="save_up.php" onSubmit="return chk()">
   <table align="center" border="1" style="border-bottom-style:groove;">
   <tr>
   		<td colspan="2" align="center">
		<img src="img/new_ent.jpg" width="600" height="90">
		</td>
   </tr>	
	<tr>	
		<td>
    
	<table align="center" border="2" style="border-bottom-style:groove;">
	
		<tr>
			<td align="right">
				Order Form : 
			</td>
			<td>
			<input type="text" id="f_num1" name="f_num1" value="<?php echo $id;?>"  disabled="disabled" size="30" />
			</td>
		</tr>
		<tr>
			<td align="right">
				User Name : 
			</td>
			<td>
			<input type="text" name="p_num1" id="p_num1" value="<?php echo $_SESSION['u_name'];?>" disabled="disabled" size="30" />
			</td>
		</tr>
		<tr>
			<td align="right">
				Date : 
			</td>
			<td>
			<input type="text" name="date" value="<?php echo $date;?>" size="30" />
			</td>
		</tr>
		<tr>
			<td align="right">
				Client Name : 
			</td>
			<td>
			<input type="text" name="name" id='name' onBlur='ajaxFunction()' size="30" maxlength="20"  value="<?php echo $name;?>"/>
			</td>
		</tr>
		
		<tr>
			<td align="right">
				Contact Number : 
			</td>
			<td>
			<input type="text" name="txt_num" id="txt_num" onBlur='ajaxFunction2()' size="30"    value="<?php echo $num;?>"/>
			</td>
		</tr>
		
		<tr>
			<td align="right">
				Address :
			</td>
			<td>
			<input type="text" name="txt_add" id="txt_add" size="30" maxlength="30"   value="<?php echo $add;?>"/>
			</td>
		</tr>
		
		<tr>
			<td align="right">
				Job Name :
			</td>
			<td>
			<input type="text" name="j_name" id="j_name" size="30" maxlength="30" onBlur="jname();"   value="<?php echo $j_name;?>"/>
			</td>
		</tr>
		
		</table>
	</td>
	<td>
	<table align="center" border="2" style="border-bottom-style:groove;">
		
		<!-- Table Part two -->
	
		
		
		<tr>
			<td align="right">
				Machine Name : 
			</td>
			<td>
			<input type="text" name="m_name" id="m_name" size="18" maxlength="12" onBlur="mname()"   value="<?php echo $m_name;?>"/>
			</td>
		</tr>
		
		<tr>
			<td align="right">
				Paper Details :
			</td>
			<td>
			<input type="text" name="p_name" id="p_name" size="18" onBlur="pname()" maxlength="25"   value="<?php echo $p_name;?>"/>
			</td>
		</tr>
		
		<tr>
			<td align="right">
				Cutting Size : 
			</td>
			<td>
			<input type="text" name="c_size" id="c_size" size="18" onBlur="csize();" maxlength="20"   value="<?php echo $c_size;?>"/>
			</td>
		</tr>
		
		
		<tr>
			<td align="right">
				Printing Details :
			</td>
			<td>
			<input type="text" name="print_det" id="print_det" size="18" onBlur="printd()" maxlength="25"   value="<?php echo $print_det;?>"/>
			</td>
		</tr>
		<tr>
			<td align="right">
				Lamination Details :
			</td>
			<td>
			<input type="text" name="lami_det" id="lami_det" size="18" onBlur="laming();" maxlength="25"   value="<?php echo $lami_det;?>"/>
			</td>
		</tr>
		
		<tr>
			<td align="right">
				Total Sheets :
			</td>
			<td>
			<input type="text" name="tot_shet" id="tot_shet" size="18" onBlur="tots();" maxlength="10"   value="<?php echo $tot_shet;?>" />
			</td>
		</tr>
		

<!--		<tr>
			<td align="right">
				Pulling Details : 
			</td>
			<td>
			<input type="text" name="p_ling" id="p_ling" size="18" onBlur="pling()" />
			</td>
		</tr>-->
		
		<tr>
			<td align="center" colspan="2">
				Paper By : 
			<select name="p_by" id="p_by" onBlur="pbar()"  value="<?php echo $paper_by;?>">
				<option>
					Krishna
				</option>
				<option>
					Party
				</option>
			</select>
			</td>
		</tr>
		
		
	</table>
</td>
</tr>
<tr>
	<td colspan="2">
	<table align="center" border="2" style="border-bottom-style:groove;">
	
	<!--<tr>
			<td align="center" colspan="2">
				Papder By : 
			<select name="p_by" id="p_by" onBlur="pbar()">
				<option>
					Krishna
				</option>
				<option>
					Client
				</option>
			</select>
			</td>
		</tr>-->
		
	<tr>
			<td align="right">
				Details Description :
			</td>
			<td>
<!--<textarea name="more" cols="40" rows="4">
</textarea>-->
<textarea name="more" rows="4" cols="20">
<?php echo $more;?>
</textarea>			<!--<input type="text" name="m6"  size="60">-->

			
			</td>
		</tr>
		
	</table>
	</td>
</tr>
<tr>
	<td colspan="2" align="center">
		<h2>
			Cutting Slip
		</h2>
	</td>
</tr>
<tr>
	<td>
		Client Name : <span id="c_name"></span>
	</td>
	<td align="right">
		Contact Number : <span id="c_num"></span>
	</td>
</tr>

<tr>
	<td>
		Paper Details : <span id="s_p_name"></span>
	</td>
	
	<td align="right">
		Cutting Size : <span id="s_c_size"></span>
	</td>
	
</tr>

<tr>
	<td>
		Prenting Details : <span id="s_print_det"></span>
	</td>
	<td align="right">
		Total Sheets : <span id="tot_shit"></span>
	</td>
	
</tr>


<tr>
	<td>
		Job Name : <span id="s_j_name"></span>
	</td>
	<td align="right">
		Paper By : <span id="s_p_by"></span>
	</td>
</tr>

<tr>
	<td align="left" colspan="2">
		Machine Name : <span id="s_m_name"></span>
	</td>
	
</tr>


<tr>	
			<td colspan="2" align="center">
			<br>

			<font style="color:#FF0000; font-size:18px; font-weight:bold;">
				<?php 
					$rnd = rand(1111,9999);
					echo $rnd;
				?>
			</font>
			:
			<input type="text" name="key"  id="key" size="3" maxlength="4">
				<br>
				<br>
				<input type="hidden" name="p_num" id="p_num" value="<?php echo $_SESSION['u_name'];?>" />
				<input type="hidden" id="f_num" name="f_num" value="<?php echo $id;?>" />
				<input type="hidden" name="key_c" id="key_c" value="<?php echo $rnd;?>">
				<input type="submit" name="Save" value="Save"  />
				<input type="reset" name="Reset" value="Reset" />
			</td>
		</tr>
</table>
</form>
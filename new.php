<?php
	error_reporting (0);

include ("val.php");
	include ("menu.php");
	include ("cn.php");

	

	$q = "select * from master_data order by id";
	$r = mysql_query($q);
	while ( $row = mysql_fetch_assoc($r))
	{
		$vnum = $row['vnum'];
	}
	$s_vnum = $vnum + 1;
?>
   <html>
    <body>
    <script language="javascript" type="text/javascript">
    <!--
    //Browser Support Code
    function ajaxFunction(){
	
	var data = document.getElementById("name").value;
//	document.getElementById("c_name").innerHTML = data;
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
	document.getElementById("mob").value = ajaxRequest.responseText;
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
	
	//var c_num = document.getElementById("mob").value;
//	document.getElementById("c_num").innerHTML = c_num;
	
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
	document.getElementById("email").value = ajaxRequest.responseText;
//	document.getElementById("txt_add").value = ajaxRequest.responseText[1];
    }
    }
    var name = document.getElementById('name').value;
    var queryString = "?name=" + name;
    ajaxRequest.open("GET", "data_2.php" + queryString, true);
    ajaxRequest.send(null);
    }
	
	
	
	function ajaxFunction3(){
	
	var c_num = document.getElementById("mob").value;
//	document.getElementById("c_num").innerHTML = c_num;
	
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
	document.getElementById("add").value = ajaxRequest.responseText;
//	document.getElementById("txt_add").value = ajaxRequest.responseText[1];
    }
    }
    var name = document.getElementById('name').value;
    var queryString = "?name=" + name;
    ajaxRequest.open("GET", "data_1.php" + queryString, true);
    ajaxRequest.send(null);
    }
    //-->
	
	function ajaxFunction4(){
	////for Customer Tin Number
	var c_num = document.getElementById("mob").value;
//	document.getElementById("c_num").innerHTML = c_num;
	
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
	document.getElementById("tin").value = ajaxRequest.responseText;
//	document.getElementById("txt_add").value = ajaxRequest.responseText[1];
    }
    }
    var name = document.getElementById('name').value;
    var queryString = "?name=" + name;
    ajaxRequest.open("GET", "data_3.php" + queryString, true);
    ajaxRequest.send(null);
    }//for Customer Tin Number
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
	
	
	J("#p1").autocomplete("get_p.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	J("#p2").autocomplete("get_p.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	J("#p3").autocomplete("get_p.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	J("#p4").autocomplete("get_p.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	J("#p5").autocomplete("get_p.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	J("#p6").autocomplete("get_p.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	J("#p7").autocomplete("get_p.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	J("#p8").autocomplete("get_p.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	J("#p9").autocomplete("get_p.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	J("#p10").autocomplete("get_p.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
	
	
	/*
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
	*/
	
});
</script>   

<script type="text/javascript">
	function chk()
	{
		var mtot = document.getElementById("mtot").value;
		if ( mtot == "0" )
		{
		document.getElementById("mtot").focus();
		//alert("data e");
		return false;
		}
	
	else
	{
		
		var key;
		var mob;
//		alert("Key PRes");
		key = document.getElementById("key").value;
		mob = document.getElementById("mob").value;
		skey = document.getElementById("key_c").value;
		if(mob == "")
		{
			alert("Please Provide Mobile Number");
			document.getElementById("mob").focus();
			return false;
		}
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
	
	}
	
</script>
<script type="text/javascript">
	function pone()
	{
		var q1 = document.getElementById("q1").value;
		var pp1 = document.getElementById("pp1").value;
		var t1 = parseFloat(q1) * parseFloat(pp1);
		t1 = t1.toFixed(2);
		document.getElementById("t1").value = t1;
	}
	function ptwo()
	{
		var q2 = document.getElementById("q2").value;
		var pp2 = document.getElementById("pp2").value;
		var t2 = q2 * pp2;
		t2 = t2.toFixed(2);
		document.getElementById("t2").value = t2;
	}
	function pthree()
	{
		var q3 = document.getElementById("q3").value;
		var pp3 = document.getElementById("pp3").value;
		var t3 = q3 * pp3;
		t3 = t3.toFixed(2);
		document.getElementById("t3").value = t3;
	}
	function pfour()
	{
		var q4 = document.getElementById("q4").value;
		var pp4 = document.getElementById("pp4").value;
		var t4 = q4 * pp4;
		t4 = t4.toFixed(2);
		document.getElementById("t4").value = t4;
	}
	function pfive()
	{
		var q5 = document.getElementById("q5").value;
		var pp5 = document.getElementById("pp5").value;
		var t5 = q5 * pp5;
		t5 = t5.toFixed(2);
		document.getElementById("t5").value = t5;
	}
	function psix()
	{
		var q6 = document.getElementById("q6").value;
		var pp6 = document.getElementById("pp6").value;
		var t6 = q6 * pp6;
		t6 = t6.toFixed(2);
		document.getElementById("t6").value = t6;
	}
	function pseven()
	{
		var q7 = document.getElementById("q7").value;
		var pp7 = document.getElementById("pp7").value;
		var t7 = q7 * pp7;
		t7 = t7.toFixed(2);
		document.getElementById("t7").value = t7;
	}
	function peight()
	{
		var q8 = document.getElementById("q8").value;
		var pp8 = document.getElementById("pp8").value;
		var t8 = q8 * pp8;
		t8 = t8.toFixed(2);
		document.getElementById("t8").value = t8;
	}
	function pnine()
	{
		var q9 = document.getElementById("q9").value;
		var pp9 = document.getElementById("pp9").value;
		var t9 = q9 * pp9;
		t9 = t9.toFixed(2);
		document.getElementById("t9").value = t9;
	}
	function pten()
	{
		var q10 = document.getElementById("q10").value;
		var pp10 = document.getElementById("pp10").value;
		var t10 = q10 * pp10;
		t10 = t10.toFixed(2);
		document.getElementById("t10").value = t10;
	}
	
	function myvat()
	{
	/*
		var t1,t2,t3,t4,t5,t6,t7,t8,t9,t10;
		t1 = document.getElementById("t1").value;
		t2 = document.getElementById("t2").value;
		t3 = document.getElementById("t3").value;
		t4 = document.getElementById("t4").value;
		t5 = document.getElementById("t5").value;
		t6 = document.getElementById("t6").value;
		t7 = document.getElementById("t7").value;
		t8 = document.getElementById("t8").value;
		t9 = document.getElementById("t9").value;
		t10 = document.getElementById("t10").value;
		var gtot;
		gtot = (parseFloat(t1) + parseFloat(t2) + parseFloat(t3) + parseFloat(t4) + parseFloat(t5) + parseFloat(t6) + parseFloat(t7) + parseFloat(t8) + parseFloat(t9) + parseFloat(t10));
	//	alert(gtot);
		var vat = document.getElementById("vat").value;
		var vat_tax = (parseFloat(gtot) * parseFloat(vat) / 100);
	//	alert(vat_tax);
		document.getElementById("gtot").value = parseFloat(gtot) + parseFloat(vat_tax);
		*/
		var ctype = document.getElementById('ctype').value;
		if(ctype == "Credit")
		{
			document.getElementById("tax").value = 0;
			document.getElementById("vat").value = 0;
		}
		else
		{
			var mtot = document.getElementById("mtot").value;
			var tax = (parseFloat(mtot) * 1 / 100);
//		alert (tax);
			document.getElementById("tax").value = tax;
		}
	}
	
	function mytax()
	{
		/*
		var gtot = document.getElementById("gtot").value;
		var tax = document.getElementById("tax").value;
		var set_tax = (parseFloat(gtot) * parseFloat(tax) / 100);
//		alert(set_tax);
		document.getElementById("gtot").value = parseFloat(gtot) + parseFloat(set_tax);
		var a = document.getElementById("cour").value;
		var b = document.getElementById("gtot").value;
		var c = document.getElementById("dis").value;
//		alert(a);
		var tot = parseFloat(a) + parseFloat(b);
		tot = tot - c;
		document.getElementById("gtot").value = tot;
		*/
		
		var mtot = document.getElementById("mtot").value;
		var cour = document.getElementById("cour").value;
		var vat = document.getElementById("vat").value;
		var tax = document.getElementById("tax").value;
		var gtot = parseFloat(mtot) + parseFloat(cour) + parseFloat(vat) + parseFloat(tax);
		//alert (gtot);
		
		document.getElementById("ra").value = gtot;
		var diff = parseFloat(gtot) - parseInt(gtot);
		//diff = diff.toFixed(2);
		//alert (diff);
		if ( diff > 0.50 )
		{
			stot  = gtot + diff; 
		//	alert("greater total");
		//alert(stot);
			document.getElementById("ok").innerHTML = "+";
		}
		else
		{
			stot  = gtot - diff; 
		//	alert(stot);
			document.getElementById("ok").innerHTML = "-";
		//	alert("NOt  total");
		}
		document.getElementById("ra").value = diff;
		document.getElementById("atot").value =parseFloat(gtot);
		//alert (diff);
		//stot = toFixed(2);
		document.getElementById("gtot").value =parseInt(stot);
		
		//alert (diff);
		/*
		if ( diff > 0.50 )
		{
			gtot  = gtot + diff; 
		}
		*/
	}
	
	
	function myra()
	{
	/*
		var gtot = document.getElementById("ra").value;
		document.getElementById("gtot").value = parseFloat(gtot);
	*/
	}
	
	function mytot()
	{
//	 alert("test");
	
		var t1,t2,t3,t4,t5,t6,t7,t8,t9,t10;
		t1 = document.getElementById("t1").value;
		t2 = document.getElementById("t2").value;
		t3 = document.getElementById("t3").value;
		t4 = document.getElementById("t4").value;
		t5 = document.getElementById("t5").value;
		t6 = document.getElementById("t6").value;
		t7 = document.getElementById("t7").value;
		t8 = document.getElementById("t8").value;
		t9 = document.getElementById("t9").value;
		t10 = document.getElementById("t10").value;
		var mtot;
		mtot = (parseFloat(t1) + parseFloat(t2) + parseFloat(t3) + parseFloat(t4) + parseFloat(t5) + parseFloat(t6) + parseFloat(t7) + parseFloat(t8) + parseFloat(t9) + parseFloat(t10));
	//	alert(gtot);
	mtot = mtot.toFixed(2);
	
	 document.getElementById("mtot").value = mtot;
	
	
	}

	function test()
	{
		var mtot = document.getElementById("mtot").value;
//		alert (mtot);
		var vat_tax = (parseFloat(mtot) * 4 / 100);
//		alert (vat_tax);
		document.getElementById("vat").value = vat_tax;
		
		/*var ctype = document.getElementById("ctype").value;
		if(ctype != "Cash")
		{
			document.getElementById("vat").value = 0;
			document.getElementById("tax").value = 0;
		}*/
		
	}
function fone()
{

	var f1 = document.getElementById("s1").value;
	var z1 = document.getElementById("j1").value;
	var fz1 = parseFloat(f1) * parseFloat(z1);
	document.getElementById("q1").value = parseFloat(fz1);
}
function ftwo()
{
	var f2 = document.getElementById("s2").value;
	var z2 = document.getElementById("j2").value;
	var fz2 = parseFloat(f2) * parseFloat(z2);
	document.getElementById("q2").value = fz2;
}
function fthree()
{
	var f3 = document.getElementById("s3").value;
	var z3 = document.getElementById("j3").value;
	var fz3 = parseFloat(f3) * parseFloat(z3);
	document.getElementById("q3").value = fz3;
}
function ffour()
{
	var f4 = document.getElementById("s4").value;
	var z4 = document.getElementById("j4").value;
	var fz4 = parseFloat(f4) * parseFloat(z4);
	document.getElementById("q4").value = fz4;
}
function ffive()
{
	var f5 = document.getElementById("s5").value;
	var z5 = document.getElementById("j5").value;
	var fz5 = parseFloat(f5) * parseFloat(z5);
	document.getElementById("q5").value = fz5;
}
function fsix()
{
	var f6 = document.getElementById("s6").value;
	var z6 = document.getElementById("j6").value;
	var fz6 = parseFloat(f6) * parseFloat(z6);
	document.getElementById("q6").value = fz6;
}
function fsevent()
{
	var f7 = document.getElementById("s7").value;
	var z7 = document.getElementById("j7").value;
	var fz7 = parseFloat(f7) * parseFloat(z7);
	document.getElementById("q7").value = fz7;
}
function feight()
{
	var f8 = document.getElementById("s8").value;
	var z8 = document.getElementById("j8").value;
	var fz8 = parseFloat(f8) * parseFloat(z8);
	document.getElementById("q8").value = fz8;
}
function fnine()
{
	var f9 = document.getElementById("s9").value;
	var z9 = document.getElementById("j9").value;
	var fz9 = parseFloat(f9) * parseFloat(z9);
	document.getElementById("q9").value = fz9;
}
function ften()
{
	var f10 = document.getElementById("s10").value;
	var z10 = document.getElementById("j10").value;
	var fz10 = parseFloat(f10) * parseFloat(z10);
	document.getElementById("q10").value = fz10;
}

</script>

<script type="text/javascript">
function setP1()
{
	var sp1  = document.getElementById('p1').value;
	var i = sp1.length;
	for(j=i;j<=30;j++)
	{
		sp1 = sp1 + " ";	
	}
	var k = sp1.length;
	//alert(k);
	//alert(sp1);	
	document.getElementById('p1').value = sp1; 
}

function setP2()
{
	var sp1  = document.getElementById('p2').value;
	var i = sp1.length;
	for(j=i;j<=30;j++)
	{
		sp1 = sp1 + " ";	
	}
	var k = sp1.length;
	//alert(k);
	//alert(sp1);	
	document.getElementById('p2').value = sp1; 
}

function setP3()
{
	var sp1  = document.getElementById('p3').value;
	var i = sp1.length;
	for(j=i;j<=30;j++)
	{
		sp1 = sp1 + " ";	
	}
	var k = sp1.length;
	//alert(k);
	//alert(sp1);	
	document.getElementById('p3').value = sp1; 
}
</script>
<body>
    <form name='myForm' method="post" action="save.php" onSubmit="return chk()" > 
	<table align="center" border="2">
		<tr>
			<td align="right">
				Client Name :
			</td>
			<td>
			<select name="name" id="name"  onBlur="ajaxFunction()">
				<option> -- Select Name -- </option>
				<?php
				function show_customers()
				{
					include('cn.php');
					$query = "SELECT * FROM master_customers WHERE status = 'Y' order by name";
					$run = mysql_query($query);
					while($row = mysql_fetch_assoc($run))
					{
					?>
					<option> <?php echo $row['name'];?> </option>
					<?php
					}
					
				}
					show_customers();
				?>
			</select>
			<!--<input type="text" name="name" id="name" onBlur="ajaxFunction()" size="50" width="55" >-->
			</td>
			<td align="right">
				Today Date : 
			</td>
			<td>
			<?php $myDate = date('d-m-Y');?>
				<input type="text" name="date" value="<?php echo $myDate;?>">
			</td>
		</tr>
		
		<tr>
			<td align="right">
				Contact Number : 
			</td>
			<td>
<input type="text" name="mob" id="mob" onBlur="ajaxFunction2()">
			</td>
			<td align="right">
				Voucher Number  : 
			</td>
			<Td>
				<input type="text" name="vnum1" value="<?php echo $s_vnum;?>" disabled="disabled">
			</Td>
		</tr>
		
		<tr>
			<td align="right">
				Email id :
			</td>
			<td>
				<input type="text" name="email" id="email" onBlur="ajaxFunction3()" style = "width:220px;">
			</td>
			<td align="right">
				Reciever Name : 
			</td>
			<Td>
				<input type="text" name="rname">
			</Td>
		</tr>
		
		<tr>
			<td align="right">
				Address :
			</td>
			<td>
				<input type="text" name="add" id="add" onBlur="ajaxFunction4()" style = "width:260px;">
			</td>
			<td align="right">
				Customer Type :
			</td>
			<Td>
				<select name="ctype" id="ctype">
					<option> Credit </option>
					<option> Cash </option>
				</select>
			</Td>
		</tr>
		<tr>
			<td align="right">
				Delivery Time  : 
			</td>
			<td>
				<input type="text" name="times" id="times">
			</td>
			<td colspan="2" align="center">
			<span style="color:#000066; font-size:12px">
				Developed by ANUJ JAHA [ anuj_jaha@yahoo.com ]
			</span>
			</td>
		</tr>
		<tr>
			<td colspan="4">
			<!-- Inner Table Column Start -->
				<table align="center" border="2">
					<tr>
						<td colspan="8" align="center">
							<h2>Purchased Products</h2>
							 <script type="text/javascript">
                            function calc()
                            {
                            window.open('calc.html','welcome','width=360,height=320')
                          //  window.open('calc.html','Calculator','height=650','width=100')
                            }
                            </script>
                            <button type="button" name="Calculator" value="Calculator" onClick="calc()">
                             Calculator
                            </button>
						</td>
					</tr>
					<tr>
						<td>
							Sr No.
						</td>
						<td align="center">
							Product Name 
						</td>
						<!--<td align="center">
							Product
							<br>
							Description 
						</td>-->
						<td align="center">
							Page
						</td>
						<td align="center">
							Sets
						</td>
						<td align="center">
							Quantity
						</td>
						<td align="center">
							Price 
							<br>
							Per/Piece
						</td>
						<td align="center">
							Total
						</td>
					</tr>
					<tr>
						<td>
							1.
						</td>
						<td>
							<input type="text" name="p1" id="p1" size="36" maxlength="32" onBlur="setP1()">
						</td>
						<!--<td>
							<input type="text" name="d1" id="d1" size="12">
						</td>-->
						<td align="center">
							<input type="text" name="s1" id="s1" size="5" maxlength="6">
						</td>	
						<td align="center">
							<input type="text" name="j1" id="j1" size="5" maxlength="6" onBlur="fone()">
						</td>	
						<td>
							<input type="text" name="q1" id="q1" size="8">
						</td>	
						<td>
							<input type="text" name="pp1" id="pp1" size="8" onBlur="pone()">
						</td>	
						<td align="right">
							<input type="text" name="t1" id="t1" size="12" value="0">
						</td>	
					</tr>
					
					<tr>
						<td>
							2.
						</td>
						<td>
							<input type="text" name="p2" id="p2" size="36" maxlength="32" onBlur="setP2()">
						</td>
						<!--<td>
							<input type="text" name="d2" id="d2" size="12">
						</td>-->
						<td align="center">
							<input type="text" name="s2" id="s2" size="5" maxlength="6">
						</td>	
						<td align="center">
							<input type="text" name="j2" id="j2" size="5" maxlength="6" onBlur="ftwo()">
						</td>		
						<td>
							<input type="text" name="q2" size="8" id="q2">
						</td>	
						<td>
							<input type="text" name="pp2" size="8" onBlur="ptwo()" id="pp2">
						</td>	
						<td  align="right">
							<input type="text" name="t2" size="12" id="t2" value="0">
						</td>	
					</tr>
					
					<tr>
						<td>
							3.
						</td>
						<td>
							<input type="text" name="p3" id="p3" size="36" maxlength="32" onBlur="setP3()">
						</td>
						<!--<td>
							<input type="text" name="d3" id="d3" size="12">
						</td>-->		
						<td align="center">
							<input type="text" name="s3" id="s3" size="5" maxlength="6">
						</td>	
						<td align="center">
							<input type="text" name="j3" id="j3" size="5" maxlength="6" onBlur="fthree()">
						</td>	
						<td>
							<input type="text" name="q3" id="q3" size="8">
						</td>	
						<td>
							<input type="text" name="pp3"  id="pp3" size="8" onBlur="pthree()">
						</td>	
						<td  align="right">
							<input type="text" name="t3" size="12" id="t3" value="0">
						</td>	
					</tr>
					
					<tr>
						<td>
							4.
						</td>
						<td>
							<input type="text" name="p4" size="36" id="p4" maxlength="20">
						</td>	
						<!--<td>
							<input type="text" name="d4" id="d4" size="12" >
						</td>-->
						<td align="center">
							<input type="text" name="s4" id="s4" size="5" maxlength="6">
						</td>	
						<td align="center">
							<input type="text" name="j4" id="j4" size="5" maxlength="6" onBlur="ffour()">
						</td>	
						<td>
							<input type="text" name="q4" size="8" id="q4">
						</td>	
						<td>
							<input type="text" name="pp4" size="8" id="pp4" onBlur="pfour()" >
						</td>	
						<td  align="right">
							<input type="text" name="t4" size="12" id="t4" value="0">
						</td>	
					</tr>
					
					<tr>
						<td>
							5.
						</td>
						<td>
							<input type="text" name="p5" size="36" id="p5" maxlength="20">
						</td>	
						<!--<td>
							<input type="text" name="d5" id="d5" size="12"  >
						</td>-->	
						<td align="center">
							<input type="text" name="s5" id="s5" size="5" maxlength="6">
						</td>	
						<td align="center">
							<input type="text" name="j5" id="j5" size="5" maxlength="6" onBlur="five()">
						</td>	
						<td>
							<input type="text" name="q5" size="8" id="q5">
						</td>	
						<td>
							<input type="text" name="pp5" size="8" id="pp5" onBlur="pfive()"> 
						</td>	
						<td  align="right">
							<input type="text" name="t5" size="12" id="t5" value="0" >
						</td>	
					</tr>
					
					<tr>
						<td>
							6.
						</td>
						<td>
							<input type="text" name="p6" size="36" id="p6" maxlength="20">
						</td>
						<!--<td>
							<input type="text" name="d6" id="d6" size="12"  >
						</td>-->		
						<td align="center">
							<input type="text" name="s6" id="s6" size="5" maxlength="6">
						</td>	
						<td align="center">
							<input type="text" name="j6" id="j6" size="5" maxlength="6" onBlur="fsix()">
						</td>	
						<td>
							<input type="text" name="q6" size="8" id="q6">
						</td>	
						<td>
							<input type="text" name="pp6" size="8" id="pp6" onBlur="psix()">
						</td>	
						<td  align="right">
							<input type="text" name="t6" size="12" id="t6" value="0">
						</td>	
					</tr>
					
					<tr>
						<td>
							7.
						</td>
						<td>
							<input type="text" name="p7" size="36" id="p7" maxlength="20">
						</td>
						<!--<td>
							<input type="text" name="d7" id="d7"  size="12" >
						</td>-->
						<td align="center">
							<input type="text" name="s7" id="s7" size="5" maxlength="6">
						</td>	
						<td align="center">
							<input type="text" name="j7" id="j7" size="5" maxlength="6" onBlur="fseven()">
						</td>			
						<td>
							<input type="text" name="q7" size="8" id="q7">
						</td>	
						<td>
							<input type="text" name="pp7" size="8" id="pp7" onBlur="pseven()">
						</td>	
						<td  align="right">
							<input type="text" name="t7" size="12" id="t7" value="0">
						</td>	
					</tr>
						
					<tr>
						<td>
							8.
						</td>
						<td>
							<input type="text" name="p8" size="36" id="p8" maxlength="20">
						</td>
						<!--<td>
							<input type="text" name="d8" id="d8"  size="12" >
						</td>	-->
						<td align="center">
							<input type="text" name="s8" id="s8" size="5" maxlength="6">
						</td>	
						<td align="center">
							<input type="text" name="j8" id="j8" size="5" maxlength="6" onBlur="feight()">
						</td>	
						<td>
							<input type="text" name="q8" size="8" id="q8">
						</td>	
						<td>
							<input type="text" name="pp8" size="8" id="pp8" onBlur="peight()">
						</td>	
						<td align="right">
							<input type="text" name="t8" size="12" id="t8" value="0">
						</td>	
					</tr>	
					
					<tr>
						<td>
							9.
						</td>
						<td>
							<input type="text" name="p9" size="36" id="p9" maxlength="20">
						</td>
						<!--<td>
							<input type="text" name="d9" id="d9" size="12"  >
						</td>-->
						<td align="center">
							<input type="text" name="s9" id="s9" size="5" maxlength="6">
						</td>	
						<td align="center">
							<input type="text" name="j9" id="j9" size="5" maxlength="6" onBlur="fnine()">
						</td>		
						<td>
							<input type="text" name="q9" size="8" id="q9">
						</td>	
						<td>
							<input type="text" name="pp9" size="8" id="pp9" onBlur="pnine()">
						</td>	
						<td align="right">
							<input type="text" name="t9" size="12" id="t9" value="0">
						</td>	
					</tr>
					
					<tr>
						<td>
							10.
						</td>
						<td>
							<input type="text" name="p10" size="36" id="p10" maxlength="20">
						</td>
						<!--<td>
							<input type="text" name="d10" id="d10" size="12" >
						</td>-->
						<td align="center">
							<input type="text" name="s10" id="s10" size="5" maxlength="6">
						</td>	
						<td align="center">
							<input type="text" name="j10" id="j10" size="5" maxlength="6" onBlur="ften()">
						</td>			
						<td>
							<input type="text" name="q10" size="8" id="q10">
						</td>	
						<td>
							<input type="text" name="pp10" size="8" id="pp10" onBlur="pten()">
						</td>	
						<td align="right">
							<input type="text" name="t10" size="12" id="t10" value="0">
						</td>	
					</tr>	
						
						
				</table>
			<!-- Inner Table Column End -->
			</td>
		</tr>
		
		<tr><!-- Tax Calculation Text Box Start-->
			<td colspan="8" align="right">
				<!-- Table inside Table -->
					<table align="center" border="1">
					<tr>
						<td width="480" align="center">
							<font style="font-size:18px;">
								Remarks
							</font>
							<br>
<textarea name="msg" rows="6" cols="65">
</textarea>
						</td>
						<td align="right">
							<strong>Main Total :</strong> <input type="text" name="mtot" id="mtot" size="8" value="0" onBlur="mytot()">
							<br>
							<strong>Transportation Charges :</strong> <input type="text" name="cour" id="cour" size="8" onBlur="test()" value="0">
							<br>
							<!--<strong>Discount ( RS ) :</strong> <input type="text" name="dis" id="dis" size="8" value="0">
							<br>-->
							<strong>Vat ( 4 % ) :</strong> <input type="text" name="vat" size="8" id="vat" onBlur="myvat()" value="0">
							<br>
							<strong>Tax ( 1 % ):</strong> <input type="text" name="tax" size="8" id="tax" onBlur="mytax()" value="0">
							<br>
							
							
							<strong>Complete Total :</strong> <input type="text" name="atot" size="8" id="atot" value="0">
							<br>

							<strong>Adjustment ( Round off Amount ):</strong> <span id="ok"> </span><input type="text" name="ra" size="8" id="ra" onBlur="myra()" value="0" >
							<br>
							<hr>
							<strong>Grand Total  :</strong> <input type="text" name="gtot" size="10" id="gtot" value="0">
							</td>
						</tr>
					</table>
			</td>
		</tr><!-- Tax Calculation Text Box End-->
		<tr>
			<td colspan="2" align="right">
				Voucher Created By :
			</td>
			<td>
				<?php echo $_SESSION['u_name'];?>	
			</td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				Enter Security Number :
			</td>
			<td>
				<font style="color:#FF0000; font-size:18px">
					<?php 
					$key = rand(1111,9999);
					echo $key;
					?>
				</font>
				<input type="text" name="key" id="key" maxlength="4" size="3">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				Add to Job Order :
			</td>
			<td>
				<input type="checkbox" name="addjob" value="true">
			</td>
		</tr>
		<tr>
			<td colspan="4" align="center">
				<input type="submit" name="Save" value="Save">
				<input type="reset" name="Reset" value="Reset">
				<input type="hidden" name="key_c" id="key_c" value="<?php echo $key;?>">
				<input type="hidden" name="user" id="user" value="<?php echo $_SESSION['u_name'];?>">
	         <input type="hidden" name="vnum" value="<?php echo $s_vnum;?>" >
			</td>
		</tr>
	</table>
  	</form>

    </body>
    </html>
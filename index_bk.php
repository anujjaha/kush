<?php
	include ("cn.php");
?>
   <html>
    <body>
    <script language="javascript" type="text/javascript">
    <!--
    //Browser Support Code
    function ajaxFunction(){
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
    var deviceid = document.getElementById('deviceid').value;
    var queryString = "?deviceid=" + deviceid;
    ajaxRequest.open("GET", "data.php" + queryString, true);
    ajaxRequest.send(null);
    }
	
	// second fucntion
	
	
	
	function ajaxFunction2(){
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
    var deviceid = document.getElementById('deviceid').value;
    var queryString = "?deviceid=" + deviceid;
    ajaxRequest.open("GET", "data_1.php" + queryString, true);
    ajaxRequest.send(null);
    }
    //-->
    </script>
    <form name='myForm' method="post" action="test.php">
	<table align="center" border="2">
	<tr>
		<td align="right">
		    Device ID: 
		</td>
		<td>
			<input type='text' id='deviceid' onBlur='ajaxFunction()' />
		</td>
	</tr>
	<tr>
		<td align="right">
			Contact Number : 
		</td>
		<td>
			<input type="text" name="txt_num" id="txt_num" onBlur='ajaxFunction2()'>
		</td>
	</tr>
	<tr>
		<td align="right">
			Contact Addreess : 
		</td>
		<td>
			<input type="text" name="txt_add" id="txt_add">
		</td>
	</tr>
	<tr>
		<td colspan="2">
		   <input name="Submit" type="submit" value="submit" />
		 </td>
	</tr>
</table>
    </form>
    </body>
    </html>
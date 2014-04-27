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
    var name = document.getElementById('name').value;
    var queryString = "?name=" + name;
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
    var name = document.getElementById('name').value;
    var queryString = "?name=" + name;
    ajaxRequest.open("GET", "data_1.php" + queryString, true);
    ajaxRequest.send(null);
    }
    //-->
    </script>
    
	<table align="center" border="2">
	 <form name='myForm' method="post" action="test.php">
		<tr>
			<td align="right">
				Order Form : 
			</td>
			<td>
			<input type="text" name="f_num" />
			</td>
		</tr>
		<tr>
			<td align="right">
				Date : 
			</td>
			<td>
			<input type="text" name="f_num" />
			</td>
		</tr>
		<tr>
			<td align="right">
				Client Name : 
			</td>
			<td>
			<input type="text" name="name" id='name' onBlur='ajaxFunction()' />
			</td>
		</tr>
		
		<tr>
			<td align="right">
				Contact Number : 
			</td>
			<td>
			<input type="text" name="txt_num" id="txt_num" onBlur='ajaxFunction2()' />
			</td>
		</tr>
		<tr>
			<td align="right">
				Address :
			</td>
			<td>
			<input type="text" name="txt_add" id="txt_add"/>
			</td>
		</tr>
	
		<tr>
			<td align="right">
				Job Name :
			</td>
			<td>
			<input type="text" name="f_num" />
			</td>
		</tr>
		
		<tr>
			<td align="right">
				Machine Name : 
			</td>
			<td>
			<input type="text" name="f_num" />
			</td>
		</tr>
		
		<tr>
			<td align="right">
				Paper Details :
			</td>
			<td>
			<input type="text" name="f_num" />
			</td>
		</tr>
		
		<tr>
			<td align="right">
				Cutting Size : 
			</td>
			<td>
			<input type="text" name="f_num" />
			</td>
		</tr>
		<tr>
			<td align="right">
				Order Form : 
			</td>
			<td>
<textarea name="more" cols="20" rows="4">
</textarea>
			</td>
		</tr>
		<tr>	
			<td colspan="2" align="center">
				<input type="submit" name="Save" value="Save" />
				<input type="reset" name="Reset" value="Reset" />
			</td>
		</tr>
	</form>
</table>

    </body>
    </html>
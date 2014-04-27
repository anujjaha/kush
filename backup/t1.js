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
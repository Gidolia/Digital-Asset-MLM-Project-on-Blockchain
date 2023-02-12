<?php include("./database_connect.php");
function for_finding_under_id_number($d_id, $u_d_id)
{
    global $con;
    $a=0;
    $sel="SELECT d_id,s_id FROM `distributor` WHERE `d_id`='$d_id'";
    $que=$con->query($sel);
    $fet=$que->fetch_assoc();
    if($d_id==$u_d_id)
    {
       $a=1;
    }
    
    /////////////////////////for level One
    $temp=array();
    $temp1=array();
    
    $sel1="SELECT d_id,s_id,a_status FROM `distributor` WHERE `s_id`='$fet[d_id]'";
    $que1=$con->query($sel1);
    while($fet1=$que1->fetch_assoc())
    {
        
        $temp[]=$fet1[d_id];
        if($fet1[d_id]==$u_d_id)
        {
           $a=1;
        }
    }
    /////////////////////////for level second
    
    for($x=0;$x<count($temp);$x++)
    {
    	$sel3="SELECT d_id,s_id,a_status FROM `distributor` WHERE `s_id`='$temp[$x]'";
    	$que3=$con->query($sel3);
    	while($fet3=$que3->fetch_assoc())
    	{
    	    //echo "<br>".$fet3[d_id];
    		$temp1[]=$fet3[d_id];
    		if($fet3[d_id]==$u_d_id)
            {
               $a=1;
            }
    	}
    }
    unset($temp);
    $temp=array();
    /////////////////////////////////////////////////////////////////////////////////////////////level 3
    for($x=0;$x<count($temp1);$x++)
    {
    	$sel5="SELECT d_id,s_id,a_status FROM `distributor` WHERE `s_id`='$temp1[$x]'";
    	$que5=$con->query($sel5);
    	while($fet5=$que5->fetch_assoc())
    	{
    	//echo "<br>".$fet5[d_id];
    		$temp[]=$fet5[d_id];
    				//echo "&nbsp;B.V".find_own_rbv($fet5[ibo_id])."<br>";
    		if($fet5[d_id]==$u_d_id)
            {
               $a=1;
            }
    	}
    }
    unset($temp1);
    $temp1=array();
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    for ($rff = 0; $rff <= 150; $rff++)
    {   //echo $rff."rff<br>";
    //echo count($temp1)."temp1";
    if(count($temp)==0){ if(count($temp1)==0){ break;}}
    	for($x=0;$x<count($temp);$x++)
    	{
    
    	$sel13=$con->query("SELECT d_id,s_id,a_status FROM `distributor` WHERE `s_id`='$temp[$x]'");
    	
    		while($fet13=$sel13->fetch_assoc())
    		{
    			$temp1[]=$fet13[d_id];
    			if($fet13[d_id]==$u_d_id)
                {
                   $a=1;
                }
    		}
    	
    	}
    
    unset($temp);
    $temp=array();
    	  
    	  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    	  for($x=0;$x<count($temp1);$x++)
    	  {
    		 
    		  $sel5=$con->query("SELECT d_id,s_id,a_status FROM `distributor` WHERE `s_id`='$temp1[$x]'");
    	
    		  while($fet15=$sel5->fetch_assoc())
    		  {
    			  $temp[]=$fet15[d_id];
    			    if($fet15[d_id]==$u_d_id)
                    {
                       $a=1;
                    }
    		  }
    	
    	  }
    unset($temp1);
    $temp1=array();
    	
    }
    return $a;
}
$q = $_REQUEST["q"];
$p = $_REQUEST["p"];
function isNumber($c) {
        return preg_match('/[0-9]/', $c);
    }
    $string=$q;
    $chars = '';
    $d_id = '';
    for ($index=0;$index<strlen($string);$index++) {
        if(isNumber($string[$index]))
        {
            $d_id .= $string[$index];
        }
        else {
            $chars .= $string[$index];}
    }
    $stringp=$p;
    $charsp = '';
    $p_id = '';
    for ($index=0;$index<strlen($stringp);$index++) {
        if(isNumber($stringp[$index]))
        {
            $p_id .= $stringp[$index];
        }
        else {
            $charsp .= $stringp[$index];}
    }
$hint = "";
$qel="SELECT * FROM `distributor` WHERE `d_id`='$d_id'";
$que=$con->query($qel);
$cer=$que->fetch_assoc();
// lookup all hints from array if $q is different from ""
if ($q !== "") {
  
	if(for_finding_under_id_number($p_id, $d_id) == 1)
	{
	    if($cer[status]==1){
		$hint="";}else{
		    $hint="Sponser Not Active (Not Allowed to Register Other Account)";
		}
	}else{
	    $hint="Sponser Is Not in Proposal Downline";
	}
	
}
echo $hint;
?>
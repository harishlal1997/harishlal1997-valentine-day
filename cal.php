<?php


$day = 9;
$month = 9;
$year = 2007;

$date=array();
        array_push($date,$day);
        array_push($date,$month);
        array_push($date,$year);
        $total=0;
        for($i=0;$i<count($date);$i++)
        {
        	echo $date[$i];echo ",";
            $date[$i]=(int)$date[$i];
            
                $total =$total+sumofnum_lifenumber($date[$i]);
          
        }
        echo "$total";

        if($total!=11 && $total!=22 && $total!=33){
        $calcu = sumofnum_lifenumber($total,1);
		 $calculation = arrtostr($calcu);
		 echo "answer";echo $calculation;
		 }else{
 $calculation=$total;
 echo "answer";
 echo $calculation;}//echo $calculation;
 // echo "result";
 // echo $calculation;

function arrtostr($inputarray)
{
	// echo "string";
	
    for($i=0;$i<count($inputarray);$i++)
    {
    	if($inputarray[$i]!=11 && $inputarray[$i]!=22 && $inputarray[$i]!=33){
    	//echo $inputarray[$i];echo ",";
        if($i!=count($inputarray)-1)
            $constr .=$inputarray[$i].'/';
        else
            $constr .=$inputarray[$i];
    }else{
    	$constr .=$inputarray[$i];
    }
    }
    return $constr;
}
function sumofnum_lifenumber($n,$flag=0)//not reduced master number
{
    $sum=0;
    if($flag==1){
    	$redarray=array();
    	array_push($redarray, $n);
    }
    while($n > 0 || $sum > 9) 
	{ 
		if($n == 0) 
		{ 
			$n = $sum; 
			$sum = 0; 
		} 
		$sum += $n % 10; 
		$n /= 10;
		if(($sum===11 || $sum===22 || $sum===33) && $n==0)
			break;
		//echo $sum;
		if($flag==1 && $sum>9)
		{
			array_push($redarray,$sum);
			//echo json_encode($redarray);
		}
	} 
	
    if($flag==1){
    	array_push($redarray,$sum);
    	return array_values(array_unique($redarray));
    }
    else
    	//echo $sum;
    	return $sum; 
}

?>
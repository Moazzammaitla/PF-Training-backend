<?php
            class pfcalculator
            {
                private $fnum ,$snum;
                public function constructor($val1,$val2)
                {
                    $fnum=$val1;
                    $snum=$val2;
                }
                public function adition($val1,$val2)
                {
                    return $val1 + $val2;
                }
                public function subtraction($val1,$val2)
                {
                    return $val1 - $val2;
                }
                public function multiplication($val1,$val2)
                {
                    return $val1 * $val2;
                }
                public function division($val1,$val2)
                {
                    return $val1 / $val2;
                }

            }


            

            if(isset($_POST['calulator']))
            {
                $result=0;
                $num1=$_POST['number1'];
                $num2=$_POST['number2'];
                $value=$_POST['calulator'];
                $mycal = new pfcalculator($num1 , $num2);
                if($value=="+")
                {
                    $result=$mycal->adition($num1,$num2);
                }
                else if($value=="-")
                {
                    $result=$mycal->subtraction($num1,$num2);
                }
                else if($value=="*")
                {
                    $result=$mycal->multiplication($num1,$num2);
                }
                else if($value=="/")
                {
                    $result=$mycal->division($num1,$num2);
                }
                
            }
       

?>








<!DOCTYPE html>
<html>
<head>
	<title> Simple Calculator </title>
</head>
<body>

	<form action=" " method="POST">
        <h1>Simple calculator</h1><br>
		Enter Your First Number
		<input type="text" name="number1" placeholder="Enter your Number"> <br> <br>

		Enter Your Second Number
		<input type="text" name="number2" placeholder="Enter your Number"> <br>

		<input type="submit" value="+" name="calulator">
        <input type="submit" value="-" name="calulator">
        <input type="submit" value="*" name="calulator">
        <input type="submit" value="/" name="calulator">

        <br>
	</form>


	<b>CalculatorResult</b>
    <input readonly="readonly" name="CalculatorResult" value="<?php echo $result; ?>"> 

</body>
</html>
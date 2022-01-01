<?php
// Php Program
// Find median of two sorted arrays
class MyArray
{
	//Function which is display array elements
	public	function display( $arr, $size)
	{
		for ($i = 0; $i < $size; ++$i)
		{
			echo " ". $arr[$i];
		}
		echo "\n";
	}
	//Find the median of given two sorted arrays
	public	function median( $arr1, & $arr2)
	{
		//Get the size of array
		$s1 = count($arr1);
		$s2 = count($arr2);
		//This two variables indicate index of arr1 and arr2
		$first = 0;
		$second = 0;
		//This variable are used to control loop
		$counter = 0;
		//This variables are used to store result
		$result = 0;
		$temp = 0;
		//Calculating median of given two sorted arrays 
		while ($counter <= intval(($s1 + $s2) / 2))
		{
			//Get current calculated result
			$temp = $result;
			if ($first < $s1 && $second < $s2)
			{
				//When both array elemement exist
				if ($arr1[$first] < $arr2[$second])
				{
					//When first array element are small
					$result = $arr1[$first];
					$first++;
				}
				else
				{
					//When second array element are small
					$result = $arr2[$second];
					$second++;
				}
			}
			else if ($first < $s1)
			{
				$result = $arr1[$first];
				$first++;
			}
			else
			{
				$result = $arr2[$second];
				$second++;
			}
			$counter++;
		}
		echo " First Array : ";
		$this->display($arr1, $s1);
		echo " Second Array : ";
		$this->display($arr2, $s2);
		if (($s1 + $s2) % 2 != 0)
		{
			echo " Median : ". $result ." \n\n";
		}
		else
		{
			echo " Median Elements [". $result ." ". $temp ."] \n";
			$result = intval(($result + $temp) / 2);
			echo " Median : ". $result ." \n\n";
		}
	}
}

function main()
{
	$obj = new MyArray();
	//When provide similar size of array elements
	$a1 = array(1, 2, 10);
	$a2 = array(4, 15, 16);
	$obj->median($a1, $a2);
	//When given
	$a3 = array(3, 11, 14);
	$a4 = array(6, 7, 22, 24);
	$obj->median($a3, $a4);
	$a6 = array(-3, 5, 8, 9);
	$a7 = array(-6, -5, -3, -1, 9, 13);
	$obj->median($a6, $a7);
}
main();
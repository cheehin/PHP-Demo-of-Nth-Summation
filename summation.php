<?php
//return the sum 1+ 2+ 3+ ...+ n
	function sum($n){
		return ($n==1)?$n:$n+sum($n-1);
	}
?>
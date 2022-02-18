<?php

function plus(...$num)
{
	$num = rand(1,23);
	if($num < 5) {
	return $num ** 2;
} else {
return $num + 1;
}
}

print_r(plus());

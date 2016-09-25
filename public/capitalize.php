<?php

function capitalize (){
	$uncapitalized = ['arches', 'badlands', 'carlsbad', 'denali'];

	$to_capitalize = ['badlands', 'denali'];

	foreach ($uncapitalized as $key => $word){
		foreach($to_capitalize as $cap){
			if ($word == $cap){
				$uncapitalized[$key] = ucfirst($word);
			}
		}
	}
	return $uncapitalized;
}

	
	print_r(capitalize());
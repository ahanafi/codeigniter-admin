<?php

function assets($file = NULL){
	$path = base_url("assets/".$file);
	return $path;
}

function linkTo($path = NULL) {
	return base_url($path);
}

?>
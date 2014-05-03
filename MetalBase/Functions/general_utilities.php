<?php
function fullPathTo($locationInMetalBaseFolder) {
	$rootLocation = $_SERVER['DOCUMENT_ROOT'] . '/MetalBase/';
	$full_path = $rootLocation . $locationInMetalBaseFolder;
	return $full_path;
}
?>
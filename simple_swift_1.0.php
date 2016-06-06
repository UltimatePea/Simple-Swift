<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
	

header("Content-Type: text/json");

//making directory
$dirname = uniqid();
$dirpath = getcwd() . '/' . $dirname;
//echo "mkdir at " . $dirpath;
mkdir($dirpath);

//writing file
$swift_filename = "simple_swift.swift";
$swift_filepath = $dirpath . '/' . $swift_filename;
$handle = fopen($swift_filepath, "w");
fwrite($handle, $_GET['swift_script']);
fclose($handle);

//executing
$binary_path = "/home/chenzb/packages/swift-2.2.1-RELEASE-ubuntu15.10/usr/bin/";
$cmd = "timeout 10 " . $binary_path . "swift " . $swift_filepath . " 2>&1";
//echo "executing command " . $cmd;
exec($cmd, $output, $status);



$dictionary = ["output" => $output, "status" => $status];

echo json_encode($dictionary);

//	$cmd = "timeout swift
?>

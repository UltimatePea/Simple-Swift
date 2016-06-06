<?php
require_once("functions.php");
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
	
	print_r($_GET);

//making directory
$dirname = uniqid();
$dirpath = getcwd() . '/' . $dirname;
echo "mkdir at " . $dirpath;
mkdir($dirpath);

//writing file
$swift_filename = "simple_swift.swift";
$swift_filepath = $dirpath . '/' . $swift_filename;
$handle = fopen($swift_filepath, "w");
fwrite($handle, $_GET['swift_script']);
fclose($handle);

//executing
$binary_path = "/home/chenzb/packages/swift-2.2.1-RELEASE-ubuntu15.10/usr/bin/";
$cmd = "timeout 10 " . $binary_path . "swift " . $swift_filepath;
echo "executing command " . $cmd;
my_shell_exec($cmd, $output, $output_err, $status);



$dictionary = ["output" => $output, "err" => $output_err, "status" => $status];

echo json_encode($dictionary);

//	$cmd = "timeout swift
?>

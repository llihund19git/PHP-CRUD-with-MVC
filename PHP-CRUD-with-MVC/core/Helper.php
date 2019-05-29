<?php

function view($file, $data = []) {
	extract($data);
	
	require "view/$file";
}
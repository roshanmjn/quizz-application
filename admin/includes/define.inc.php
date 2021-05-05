<?php 
define(
	'siteurl',
	(isset($_SERVER['HOST'])&&$_SERVER['HOST']==='on')?"https":"http"."://".$_SERVER['HTTP_HOST'].'/projectw/'//.'/'.$_SERVER['PHP_SELF']
);
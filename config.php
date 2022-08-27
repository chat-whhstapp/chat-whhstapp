<?php

$url= ((isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https' : 'http';
$url .= '://' . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '');
$url .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);





$banner = glob ('../banner/*');
$banner_ram= rand(0,count($banner)-1);


$fotos = glob ('../fotos/*');
$fotos_ram= rand(0,count($fotos)-1);

$aleatorio= rand ( 100,1900 );




 
      $pag= array(
            /* "BZJClkM7gli8LZm1zJE", 
             "C58zipls9PK",
             "FNv15m8cuIU3YrQDF", */
             "G5Xz77EsHxj8enN8QC",
            /* "GpZdT2XnfBkln", 
             "GSebYjxukshCfYt07nhb",
             "HxSD38UjfImLt0Bpqws", 
             "JPNTRCZtZ8ABLCgem",
             "Kcqh14Ks03rAakE7FXytr", */
           );
             
            $pag_ram = rand(0,count($pag)-1);  



     $url1=str_replace("/xxx","",$url);
       
            

             $url3=$url1.''.$pag[$pag_ram];  







$redirection= array(

	         
            // "xxxxxxx",
           //  "xxxxxxx",    
             //"xxxxxxx" ,
           );
             

             $redirection_ram = rand(0,count($redirection)-1);


$seg= array(

            // "0",
	        // "5",
            // "200",
             "",
           );
             

             $seg_ram = rand(0,count($seg)-1);





$segundos=$seg[$seg_ram];
$redireccionar=$redirection[$redirection_ram];
<?php

$cpa= array(
		  	 "https://www.highperformancegate.com/pyir7udjq?key=60c5def1764d01c367af5f08ef00a331", 
	       "https://www.highperformancegate.com/pyir7udjq?key=60c5def1764d01c367af5f08ef00a331", 
		  
           );
             
            $cpa_ram = rand(0,count($cpa)-1);





            
// reemplaza UA-156810917-1  por  tu codigo de tu codigo de google analitics

$codigo="UA-143240149-1";

$analiti='
<script async src="https://www.googletagmanager.com/gtag/js?id='.$codigo.'"></script>
 <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag("js", new Date());

   gtag("config", "'.$codigo.'");
 </script>';
			

 
 ?>
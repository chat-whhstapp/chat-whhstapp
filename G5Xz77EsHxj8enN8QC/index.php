<?php

$pag= array(
            // "HxSD38UjfImLt0BpqwsES7", 
             "../xxx", 
           );
             
            $pag_ram = rand(0,count($pag)-1);


 header("Location: $pag[$pag_ram]"); 
 
 
 ?>
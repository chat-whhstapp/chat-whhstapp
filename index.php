<?php





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


 header("Location: $pag[$pag_ram]"); 
 
 
 
 
 
 ?>
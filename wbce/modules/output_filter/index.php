<?php
//Classic compatibility fix

//no direct file access
if(count(get_included_files())==1) die(header("Location: ../index.php",TRUE,301));

include(filter_routines.php);



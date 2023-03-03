<?php
$lp=($_REQUEST["logpopox"]);
$pp=stripcslashes($_REQUEST["passpopox"]);
if($lp=="simon" & $pp=="123456"){
    echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQP7ARHenfnGXcxCIhmDxObHocM8FPbjyaBg&usqp=CAU">'; 
}else{
    echo "oh no".$lp.$pp;
}
?>
<?php
// $lp=($_REQUEST["logpopox"]);
$lp=($_REQUEST["logpopox"]);
// if($lp=="s"){
if($lp.checked){
    echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQP7ARHenfnGXcxCIhmDxObHocM8FPbjyaBg&usqp=CAU">'; 
}else{
    echo "oh no".$lp;
}
?>
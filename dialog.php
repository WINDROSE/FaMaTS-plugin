<label>Welcome to FaMa</label>
<?php
// For config related stuff, we need to include the common.php
require_once('../../common.php');   
// also we check for authenitification
checkSession();

switch($_GET['question']){
	case 'valid':
?>	
	   <p>Is the model valid? </p> <p> TRUE </p>
<?php
    break;
	case 'products':
?>	
	   <p>Is the model valid? </p> <p> TRUE </p>
<?php
    break;
	case 'numberofproducts':
?>	
	   <p>Is the model valid? </p> <p> TRUE </p>
<?php
    break;
	case 'validconfiguration':
?>	
	   <p>Is the model valid? </p> <p> TRUE </p>
<?php
    break;
	case 'validproduct':
?>	
	   <p>Is the model valid? </p> <p> TRUE </p>
<?php
    break;
	case 'deadfeatures':
?>	
	   <p>Is the model valid? </p> <p> TRUE </p>
<?php
    break;
	case 'corefeatures':
?>	
	   <p>Is the model valid? </p> <p> TRUE </p>
<?php
    break;
}
?>

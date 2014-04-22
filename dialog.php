<label>Welcome to FaMa</label>
<?php
$rootpath='/Users/malawito/Documents/repositories/Codiad/workspace/'.$_GET['datapath'];
// For config related stuff, we need to include the common.php
require_once('../../common.php');   
// also we check for authenitification
checkSession();

//read the model (currently only when in the same server)

switch($_GET['question']){
	case 'valid':
	$response = file_get_contents('http://localhost:8081/valid?model='.$rootpath);
	print $response;

    break;
	case 'products':
	$response = file_get_contents('http://localhost:8081/products?model='.$rootpath);
	print $response;

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

function getWorkspacePath($path) {
        if (strpos($path, "/") === 0) {
            //Unix absolute path
            return $path;
        }
        if (strpos($path, ":/") !== false) {
            //Windows absolute path
            return $path;
        }
        if (strpos($path, ":\\") !== false) {
            //Windows absolute path
            return $path;
        }
        return "../../workspace/".$path;
    }
?>

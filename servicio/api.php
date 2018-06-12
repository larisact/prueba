<?php 
		// parte imprescindible definir el tipo de dato a devolver en el msg
	header("Content-Type:application/json");
	require "../models/modelo.php";
	
	if(!empty($_GET['nombre']))	{ 
		$conn = new Service();
		$nombre=$_GET['nombre']; 
		$precio = $conn->get_price($nombre);
	if(empty($precio))
	{
	response(200,"Product Not Found",NULL);
	}
	else
	{
	response(200,"Product Found",$precio); }
	}
	else
	{
	response(400,"Invalid Request",NULL);
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $data = new Service();
    $input=$data->setServicio($_POST['name'],$_POST['price']);
    response(201,"Ok created",$input);
	 
}




	function response($status,$status_message,$data) {
	//header("HTTP/1.1 ".$status);
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data']=$data;
	$json_response = json_encode($response);
	echo $json_response;
	}


 ?>
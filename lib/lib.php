<?PHP
///////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////INFORMAÇÕES DE DESENVOLVIMENTO/////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////
////                                                                                               ////
////	NOME ARQUIVO.....................: LIB.PHP   		                                       ////
////	OBJETIVO.........................: BIBLIOTECA DE CONVERSORES PARA SISTEMAS EM PHP          ////
////	DESENVOLVIDO POR.................: WELBERT H. OLIVEIRA                                     ////
////	E-MAIL...........................: welbert.oliveira@gmail.com                              ////
////	CELULAR..........................: +55 (31) 98582-3150                                     ////
////	DATA DE DESENVOLVIMENTO..........: 28/05/2020                                              ////
////                                                                                               ////
///////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////INFORMAÇÕES DE ALTERAÇÕES///////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////
////                                                                                               ////
////	ALTERADO POR.....................:                                                         ////
////	E-MAIL...........................:                                                         ////
////	CELULAR..........................:                                                         ////
////	DATA DE ALTERAÇÃO................:                                                         ////
////                                                                                               ////
///////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////REDIRECIONA PARA UMA DETERMINADA PÁGINA////////////////////////////
function redirect($url){ 
  	echo "<script>document.location.href=\"$url\";</script>";
    die();
}
////////////////////////////////////DATA PARA O PADRÃO MYSQL
function data_ing($data){
	$datatrans = explode ("/", $data);
    $data = "$datatrans[2]-$datatrans[1]-$datatrans[0]";
	return $data;
}
////////////////////////////////////DATA E HORA PARA O PADRÃO MYSQL
function data_hora_ing($data){
	$datatrans = explode (" ", $data);
	$data = "$datatrans[0]";
	$data2 = explode ("/", $data);
	$data = "$data2[2]-$data2[1]-$data2[0]";
	$hora = "$datatrans[1]";
	return $data." ".$hora;
}
////////////////////////////////////DATA PARA O PADRÃO BRASILEIRO
function data_port($data){
	$datatrans = explode ("-", $data);
	$data = "$datatrans[2]/$datatrans[1]/$datatrans[0]";
	return $data;
}
////////////////////////////////////DATA E HORA PARA O PADRÃO BRASILEIRO
function data_hora($data){
	$datatrans = explode (" ", $data);
	$data = "$datatrans[0]";
	$data2 = explode ("-", $data);
	$data = "$data2[2]/$data2[1]/$data2[0]";
	$hora = "$datatrans[1]";
	return $data." - ".$hora;
}
////////////////////////////////////DATA PARA O PADRÃO BRASILEIRO
function data_niver($data){
	$datatrans = explode ("-", $data);
	$data = "$datatrans[2]/$datatrans[1]";
	return $data;
}

////////////////////////////////////REMOVEDOR DE CARACTERES////////////////////////////////////////////
function dados_ing($valor){
	$valor = preg_replace('/[^0-9]/', '', $valor);
   	return $valor;
}
////////////////////////////////////REMOVEDOR DE CARACTERES////////////////////////////////////////////
function limpa_caracter($valor){
	$valor = preg_replace("/\D+/", "", $valor);
	return $valor;
}
////////////////////////////////////INSERI MASCARAS EM CAMPOS//////////////////////////////////////////
function mask($val, $mask){
	$maskared = '';
	$k = 0;
	for($i = 0; $i<=strlen($mask)-1; $i++){
		if($mask[$i] == '#'){
			if(isset($val[$k]))
			$maskared .= $val[$k++];
		}else{
			if(isset($mask[$i]))
			$maskared .= $mask[$i];
		}
	}
	return $maskared;
}
////////////////////////////////////INSERI MASCARAS EM MOEDAS//////////////////////////////////////////
function moeda($val){
	$maskared = '';
	if (strlen($val) ==3){
		echo mask($val, "#,##");
	}elseif (strlen($val) ==4){
		echo mask($val, "##,##");
	}elseif (strlen($val) ==5){
		echo mask($val, "###,##");
	}elseif (strlen($val) ==6){
		echo mask($val, "#.###,##");
	}elseif (strlen($val) ==7){
		echo mask($val, "##.###,##");
	}elseif (strlen($val) ==8){
		echo mask($val, "###.###,##");
	}
	return $maskared;
}

function mask_iestadual($estado, $val){
	if($estado== "AC"){
		echo mask($val, "##.###.###/###-##");
	}if($estado == "AL"){
		echo mask($val, "#########");
	}if($estado == "AP"){
		echo mask($val, "#########");
	}if($estado == "AM"){
		echo mask($val, "##.###.###-#");
	}if($estado == "BA"){
		echo mask($val, "###.###.##-#");
	}if($estado == "CE"){
		echo mask($val, "########-#");
	}if($estado == "DF"){
		echo mask($val, "##########-##");
	}if($estado == "ES"){
		echo mask($val, "###.###.##-#");
	}if($estado == "GO"){
		echo mask($val, "##.###.###-#");
	}if($estado == "MA"){
		echo mask($val, "#########");
	}if($estado == "MT"){
		echo mask($val, "#########");
	}if($estado == "MS"){
		echo mask($val, "#########");
	}if($estado == "MG"){
		echo mask($val, "###.###.###/####");
	}if($estado == "PA"){
		echo mask($val, "##-######-#");
	}if($estado == "PB"){
		echo mask($val, "########-#");
	}if($estado == "PR"){
		echo mask($val, "########-##");
	}if($estado == "PE"){
		echo mask($val, "##.#.###.#######-#");
	}if($estado == "PI"){
		echo mask($val, "#########");
	}if($estado == "RJ"){
		echo mask($val, "##.###.##-#");
	}if($estado == "RN"){
		echo mask($val, "##.###.###-#");
	}if($estado == "RS"){
		echo mask($val, "###-#######");
	}if($estado == "RO"){
		echo mask($val, "###.#####-#");
	}if($estado == "RR"){
		echo mask($val, "########-#");
	}if($estado == "SP"){
		echo mask($val, "###.###.###.###");
	}if($estado == "SC"){
		echo mask($val, "###.###.###");
	}if($estado == "SE"){
		echo mask($val, "#########-#");
	}if($estado == "TO"){
		echo mask($val, "###########");
	}
	//return $mask_iestadual;
}

<?php

function arrayestados()
{

    return [" " => "Unidade da Federação", "AC" => "Acre", "AL" => "Alagoas", "AM" => "Amazonas", "AP" => "Amapá", "BA" => "Bahia", "CE" => "Ceará", "DF" => "Distrito Federal", "ES" => "Espírito Santo", "GO" => "Goiás", "MA" => "Maranhão", "MT" => "Mato Grosso", "MS" => "Mato Grosso do Sul", "MG" => "Minas Gerais", "PA" => "Pará", "PB" => "Paraíba", "PR" => "Paraná", "PE" => "Pernambuco", "PI" => "Piauí", "RJ" => "Rio de Janeiro", "RN" => "Rio Grande do Norte", "RO" => "Rondônia", "RS" => "Rio Grande do Sul", "RR" => "Roraima", "SC" => "Santa Catarina", "SE" => "Sergipe", "SP" => "São Paulo", "TO" => "Tocantins"];

}

function arraycontatos()
{

    return [
                " " => "Informar Motivo",
                "inscrição" => "Dúvida na inscrição",
                "pagamento" => "Pagamento",
                "edital" => "Dúvida Edital",
                "local" => "Local de Prova",
                "outros" => "Outros"
            ];

}


function arrayfilhos()
{

    return [
        " " => "Quantidade de Filhos",
        "0" => "0",
        "1" => "1",
        "2" => "2",
        "3" => "3",
        "4" => "4",
        "5" => "5",
        "6" => "6",
        "7" => "7",
        "8" => "8",
        "9" => "9",
        "10" => "10",
        "11" => "11",
        "12" => "12",
        "13" => "13",
        "14" => "14",
        "15" => "15",
        "16" => "16",
        "17" => "17",
        "18" => "18",
        "19" => "19",
        "20" => "20",
    ];

}


function arraynecessidades()
{

    return [
        "Ledor" => "Ledor",
        "Transcritor" => "Transcritor",
        "Lactante" => "Lactante",
        "Fácil acesso" => "Fácil acesso",
        "outros" => "Outros"
    ];

}



function birthdate($birthdate)
{

    return implode("-",array_reverse(explode("-",$birthdate)));

}


function primeiroNome($nome){
    $nome_usuario = explode(" ", $nome);
    return $nome_usuario['0'];
}


function removerAcentor($string) {

    // matriz de entrada
    $what = array( 'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç','-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º',"'");

    // matriz de saída
    $by   = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_'," " );

    // devolver a string
    return str_replace($what, $by, $string);
}



/*  $view =  \View::make('home.security')->render();
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($view);
    $pdf->setPaper('A4', 'landscape');
   return $pdf->download('invoice.pdf');
   // return $pdf->stream();
  */
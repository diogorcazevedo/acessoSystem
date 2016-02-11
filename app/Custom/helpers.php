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



/*  $view =  \View::make('home.security')->render();
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($view);
    $pdf->setPaper('A4', 'landscape');
   return $pdf->download('invoice.pdf');
   // return $pdf->stream();
  */
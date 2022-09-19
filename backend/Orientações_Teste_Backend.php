<?php
/*
INSTRUÇÕES ****************************************************************************************************************************************

Você deverá desenvolver um script que quando executado irá acessar a url abaixo e buscar os dados que estão contidos nela.

https://cepea.esalq.usp.br/br/widgetproduto.js.php?id_indicador%5B%5D=143&id_indicador%5B%5D=53&id_indicador%5B%5D=54&id_indicador%5B%5D=91&id_indicador%5B%5D=3&id_indicador%5B%5D=23&id_indicador%5B%5D=2&id_indicador%5B%5D=162&id_indicador%5B%5D=101&id_indicador%5B%5D=208&id_indicador%5B%5D=76&id_indicador%5B%5D=104&id_indicador%5B%5D=209&id_indicador%5B%5D=119&id_indicador%5B%5D=75&id_indicador%5B%5D=100&id_indicador%5B%5D=103&id_indicador%5B%5D=181&id_indicador%5B%5D=130&id_indicador%5B%5D=leitep&id_indicador%5B%5D=72&id_indicador%5B%5D=77&id_indicador%5B%5D=305-BA&id_indicador%5B%5D=305-CE&id_indicador%5B%5D=305-MS&id_indicador%5B%5D=305-MT&id_indicador%5B%5D=305-PR&id_indicador%5B%5D=305-RS&id_indicador%5B%5D=305-SP&id_indicador%5B%5D=159&id_indicador%5B%5D=12&id_indicador%5B%5D=92&id_indicador%5B%5D=129-10&id_indicador%5B%5D=129-6&id_indicador%5B%5D=129-4&id_indicador%5B%5D=129-5&id_indicador%5B%5D=129-1&id_indicador%5B%5D=349-GL&id_indicador%5B%5D=349-NP&id_indicador%5B%5D=349-OP&id_indicador%5B%5D=178&id_indicador%5B%5D=179

Após obter os dados você deverá retornar um vetor com os dados organizados seguindo a estrutura abaixo:

$dados_organizados[i] = Vetor com 3 dados:
Nome do produto
Média dos valores (quando os produtos forem iguais. Ex: Ovino )
Mediana dos valores (quando os produtos forem iguais. Ex: Ovino )

Quando não houver produto igual (Ex: Milho), os campos média e mediana deverão conter apenas o seu valor 

Dica: Ficar atento com as unidades dos valores

FIM INSTRUÇÕES ****************************************************************************************************************************************
*/

function contains($str, array $arr)
{
    foreach($arr as $a) {
        if (stripos($str,$a) !== false) return true;
    }
    return false;
}

ini_set('default_charset','UTF-8');


// $url = "https://cepea.esalq.usp.br/br/widgetproduto.js.php?id_indicador%5B%5D=143&id_indicador%5B%5D=53&id_indicador%5B%5D=54&id_indicador%5B%5D=91&id_indicador%5B%5D=3&id_indicador%5B%5D=23&id_indicador%5B%5D=2&id_indicador%5B%5D=162&id_indicador%5B%5D=101&id_indicador%5B%5D=208&id_indicador%5B%5D=76&id_indicador%5B%5D=104&id_indicador%5B%5D=209&id_indicador%5B%5D=119&id_indicador%5B%5D=75&id_indicador%5B%5D=100&id_indicador%5B%5D=103&id_indicador%5B%5D=181&id_indicador%5B%5D=130&id_indicador%5B%5D=leitep&id_indicador%5B%5D=72&id_indicador%5B%5D=77&id_indicador%5B%5D=305-BA&id_indicador%5B%5D=305-CE&id_indicador%5B%5D=305-MS&id_indicador%5B%5D=305-MT&id_indicador%5B%5D=305-PR&id_indicador%5B%5D=305-RS&id_indicador%5B%5D=305-SP&id_indicador%5B%5D=159&id_indicador%5B%5D=12&id_indicador%5B%5D=92&id_indicador%5B%5D=129-10&id_indicador%5B%5D=129-6&id_indicador%5B%5D=129-4&id_indicador%5B%5D=129-5&id_indicador%5B%5D=129-1&id_indicador%5B%5D=349-GL&id_indicador%5B%5D=349-NP&id_indicador%5B%5D=349-OP&id_indicador%5B%5D=178&id_indicador%5B%5D=179" ;

$url = file_get_contents("https://cepea.esalq.usp.br/br/widgetproduto.js.php?id_indicador%5B%5D=143&id_indicador%5B%5D=53&id_indicador%5B%5D=54&id_indicador%5B%5D=91&id_indicador%5B%5D=3&id_indicador%5B%5D=23&id_indicador%5B%5D=2&id_indicador%5B%5D=162&id_indicador%5B%5D=101&id_indicador%5B%5D=208&id_indicador%5B%5D=76&id_indicador%5B%5D=104&id_indicador%5B%5D=209&id_indicador%5B%5D=119&id_indicador%5B%5D=75&id_indicador%5B%5D=100&id_indicador%5B%5D=103&id_indicador%5B%5D=181&id_indicador%5B%5D=130&id_indicador%5B%5D=leitep&id_indicador%5B%5D=72&id_indicador%5B%5D=77&id_indicador%5B%5D=305-BA&id_indicador%5B%5D=305-CE&id_indicador%5B%5D=305-MS&id_indicador%5B%5D=305-MT&id_indicador%5B%5D=305-PR&id_indicador%5B%5D=305-RS&id_indicador%5B%5D=305-SP&id_indicador%5B%5D=159&id_indicador%5B%5D=12&id_indicador%5B%5D=92&id_indicador%5B%5D=129-10&id_indicador%5B%5D=129-6&id_indicador%5B%5D=129-4&id_indicador%5B%5D=129-5&id_indicador%5B%5D=129-1&id_indicador%5B%5D=349-GL&id_indicador%5B%5D=349-NP&id_indicador%5B%5D=349-OP&id_indicador%5B%5D=178&id_indicador%5B%5D=179");

$dom = new DomDocument();
$dom->loadHTML( $url );
$xpath = new DOMXPath( $dom );

$arr = array();
foreach ($xpath->query('//td') as $node) {
    $arr[] = $node->nodeValue;
}

// print_r($arr);

$file = fopen('verificacao.txt', 'w');
foreach($arr as $value){
  if($value == null || str_contains($value, 'Fonte') || str_contains($value, '2022')){
  } else {
    fwrite($file, $value . PHP_EOL); // gravando valor completo
    
    $arr2[] = strtok($value, '-');
  }

}
fclose($file);

// $true = false;

print_r($arr2);

// function array_has_dupes($array) {
//   // streamline per @Felix
//   return count($array) !== count(array_unique($array));
// }

// // echo array_has_dupes($arr2);
// foreach($arr2 as $value){
//   echo strtok($value, '-') . PHP_EOL;
// }

// while($true == false){
  // for($i=0;$i<count($arr2)+1;$i++){
  //   if(contains($arr2[$i], $arr2)){
  //     echo 'Repetiu ' . $i .' vez' . PHP_EOL;
  //   }
  // }
// }
// print_r(count($arr2));
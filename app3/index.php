<?php

//função para converter uma string para binario
function stringParaBinario ($string) {
  //A função str_split divide a string em um array de caracteres 
  //A função ord pega o valor ASCII de cada caractere
  //A função decbin converte o valor ASCII em binario
  $binario='';
  foreach(str_split($string) as $char) {
    //converte o caractere para o valor binario de 8bits 
    $binario .=str_pad(decbin(ord($char)), 8, '0', STR_PAD_LEFT) . '';
  }
  return $binario;
}

//Exemplo de uso
$frase = "Ola Mundo!";
$fraseBinario = stringParaBinario ($frase);

//Exibindo a frase original e sua versao binaria
echo "Frase original: " . $frase . "<br>";
echo "Frase em binario " . $fraseBinario ;

?>

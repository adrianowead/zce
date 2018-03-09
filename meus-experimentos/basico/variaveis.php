Uma variável é copiada ao ser atribuída a outra variável, ou seja, quando o valor de uma é alterada não afeta a outra.

<?php

$a = 10; // $a = 10
$b = $a; // $b = 10, $a = 10
$b = 15; // $b = 15, $a = 10

?>

Mas um objeto SEMPRE é passado como referência.

Ou seja, um objeto colocado em $a, ao ser atribuido para $b,
se um atributo em qualquer variável for alterado, a alteração será em ambos.

<?php

$a = new DateTime;

/*

$a =

DateTime Object
(
    [date] => 2018-03-09 18:06:50.000000
    [timezone_type] => 3
    [timezone] => America/Sao_Paulo
)

*/

$b = $a;

$a->setDate( 1987, 10, 8 );

/*

$b =

DateTime Object
(
    [date] => 1987-10-08 18:10:00.000000
    [timezone_type] => 3
    [timezone] => America/Sao_Paulo
)

*/

?>


Para passar qualquer variável por referência, é necessário utilizar o caracter &

<?php

$a = 10; // $a = 10
$b = &$a; // $b = 10, $a = 10
$b = 15; // $b = 15, $a = 15

?>

Também é possível usar acentuação nas variáveis (apesar de não ser boas práticas)
E utilizar caixa alta ou caixa baixa não faz diferença (apenas para classes, em geral, e funções padrão do PHP).

<?php

class testandoOpa{
    //
}

$nãoAcertioSerá = 10;

echo $nãoAcertioSerá;

$data = new DATETIME;
$data = new datetime;

$teste = new TESTANDOOPA;

?>
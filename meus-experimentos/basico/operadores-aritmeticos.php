Teste de sequência dos operadores aritméticos.

+----------+---------------+--------------------------------------------------------+
| Exemplo  | Nome          | Resultado                                              |
+----------+---------------+--------------------------------------------------------+
| +$a      | Identidade    | Conversão de $a para int ou float conforme apropriado. |
| -$a      | Negação       | Oposto de $a.                                          |
| $a + $b  | Adição        | Soma de $a e $b.                                       |
| $a - $b  | Subtração     | Diferença entre $a e $b.                               |
| $a * $b  | Multiplicação | Produto de $a e $b.                                    |
| $a / $b  | Divisão       | Quociente de $a e $b.                                  |
| $a % $b  | Módulo        | Resto de $a dividido por $b.                           |
| $a ** $b | Exponencial   | Resultado de $a elevado a $b. Introduzido no PHP 5.6.  |
+----------+---------------+--------------------------------------------------------+

Sequência, dois itens na mesma linha, é o que aparecer primeiro:
()
**
*, /
+, -

Documentação sobre a precedência de operadores:
http: //php.net/manual/pt_BR/language.operators.precedence.php



<?php
    echo 5 / 3;
    echo chr(13).chr(10);
    echo 3 ** 8;
    echo chr(13).chr(10);
    echo 8 * 7;
    echo chr(13).chr(10);
    echo 7 - 1;
    echo chr(13).chr(10);
    echo 1 + 3;
    echo chr(13).chr(10);
    echo chr(13).chr(10);
    echo 5 / 3 ** 8; // primeiro expoente
    echo chr(13).chr(10);
    echo 8 * 7 - 5 / 3; // primeiro a multiplicacao, divisao e subtração
    echo chr(13).chr(10);
    echo 5 / 3 / 8 * 7; // primeiro a divisão e depois a multiplicação
    echo chr(13).chr(10);
    echo 9 ** 5 / 6 ** 6; // primeiro a potência
    echo chr(13).chr(10);
    echo 15 % 7;
    echo chr(13).chr(10);
    echo 12 % 7;
    echo chr(13).chr(10);
    echo 15 % 7 / 12 % 7; // em sequencia, o módulo não define prioridade
    echo chr(13).chr(10);
    echo 0.083333333333333 % 7;
    echo chr(13).chr(10);
?>
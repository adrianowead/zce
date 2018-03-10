Uma série de cálculos usando operadores aritméticos e bitwise.


1) 8 * 3 / 4 | 9 - 15
R: -2 (o bitwise foi resolvido no final, depois de todas as operações, resultando eum 6 | - 6, no final deu -2)

<?php
    // etapas de cálculo

    // 8 * 3 = 24
    // 24 / 4 = 6
    // 9 - 15 = -6
    // 6 | -6 = -2
    /*
    Antes de fazer a tabela, é preciso converter -6 para binário

    // primeiro converter o 6 para o binario normal
    6 =  00000110
      = 100000110 (complementando com 1 inicial, indica negativo)
      = 011111001 (inverte todos os bits 
      = 011111001 + 000000001 (soma 1)
      = 11111010
    
    -6 = 11111010 (quando trata-se de negativo, a quantidade de 1 à esquerda é infinito)

    
    Tabela bitwise
    +----+----+----+---+---+---+---+---+
    | 64 | 32 | 16 | 8 | 4 | 2 | 1 | # |
    +----+----+----+---+---+---+---+---+
    |  1 |  1 |  1 | 1 | 0 | 1 | 0 |-6 |
    +----+----+----+---+---+---+---+---+
    |  0 |  0 |  0 | 0 | 1 | 1 | 0 | 6 |
    +----+----+----+---+---+---+---+---+
    |  1 |  1 |  1 | 1 | 1 | 0 | 0 |-2 | (sabemos que é negativo, devido a já sabermos que a quantidade de 1 à esquerda é infinito)
    +----+----+----+---+---+---+---+---+
    */
?>
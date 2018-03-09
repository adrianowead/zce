<?php
    echo "Esta é a forma correta de abrir a tag, e é recomendado usar <?php, por motivos de compatibilidade entre todas as versões do PHP (principalmente anteriores a versão 5";

    echo "Mas também é possível usar as short_open_tag (configurado no php.ini). <? ?>";

    echo "Ou mesmo usar asp tags <% %>";

    echo "Também é possível usar <?= 'string' ?>, para imprimir qualquer conteúdo, é como um atalho para o echo";

    echo "Outra coisa que também é possível, é usar uma notação SGML (Standard Generalized Markup Language), como tags de marcação usadas para carregar scripts JavaScript em páginas HTML.
    Exemplo: <script language='php'></script>";

    # abaixo seguem testes com algumas abertudas de tag
?>

Teste com short tags:

<? echo "Aqui são short tags"; ?>

Agora testes com asp tags:

<% echo "Aqui são asp tags"; %>

Agora testes com short tag e igual

<?= "Saída de um conteúdo qualquer"; ?>

Abaixo testando no formal SGML (compatível apenas em versões até 5.6.x, removida em versões mais recentes):
O Formato SGML é necessário estar em um arquivo .php, ou em um que passe pelo interpretador, não deve ser colocada em arquivos HTML, por exemplo.
<script language="php">
    echo "Testando em formato SGML";
</script>


Referente ao fechamento de tags, é recomendado não fechar a tag para evitar erros, principalmente quando são utilizadas funções que manipulam os headers do HTTP.
Ou mesmo quando existem saídas de buffer, como o binário de imagens.

O problema, é que qualquer caracter no início do documento (antes da abertura) ou no final (depois do fechamento), pode causar erro na leitura do buffer, devido ao caracter adicional. Seja um espaço, tab, ou quebra de linha.
Que muitas vezes não é percebido pelo desenvolvedor, então é boa prática não fechar a tag do arquivo.
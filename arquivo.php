<?php 
    $arquivo = fopen("jv.txt","w");

    fwrite($arquivo,"Painho\n");
    fwrite($arquivo,"Mainha\n");
    fwrite($arquivo,"Voinha");

    fclose($arquivo);

    echo "Dados gravados!\n";

    $arquivo = (fopen("jv.txt","r"));

    while(!feof($arquivo)){
        $linha = fgets($arquivo);
        echo "nomes: $linha";
    }
?>
<?php 


//Define as variaveis
$nome = 'Pedro Henrique Basilio'; //String
$idade = 20; //Integer
$altura = 1.86; //Float
$estudante = true; //Boolean
$comidasFavoritas =["Cachorro Quente", "Pizza", "Hamburguer","Sushi" ]; //Array de Strings
$comidasFavoritas[] = "Sorvete"; //Adicionando um valor ao Array
$comidasFavoritas[1] = "Salada"; //Adicionando um valor ao Array no indice 1
$comidasFavoritas[0] = "Lasanha"; //Adicionando um valor ao Array no indice 0

// Mostra o valor da variavel
echo "Nome: " . $nome . "<br>";
echo "Idade: " . $idade . "<br>";
echo "Altura: " . $altura . "<br>";
echo "Estudante: " . $estudante . "<br>";
echo "Comidas Favoritas:" . $comidasFavoritas[4] . "<br>"; 

// Mostra o valor da variavel
print_r($nome); 
print_r($idade);
print_r($altura);
print_r($estudante);
print_r($comidasFavoritas);

//Percorre o Array e mostra o valor
foreach($comidasFavoritas as $comidas){ 
    echo $comidas . "<br>";
}

//Usuario maior de idade ou menor de idade
if ($idade >= 18) { 
    echo "O " . $nome . " é maior de idade!<br>";
} else {
    echo "O " . $nome . " é menor de idade!<br>";
}

?>

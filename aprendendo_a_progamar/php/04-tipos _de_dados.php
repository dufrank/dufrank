<?php
//*******Escalares****** */
// string
$nome ="Olá mundo";
var_dunp ($nome); //usado para identificar o tipo de variavel 
if (is_string($nome)) 
    echo "É uma string";
else:
    echo "Não e uma string";
endif;
echo "<hr>" // para criar uma linha

// Obs : String e considerado todo e qualer carater dentro das "duplas";

// int
$idade = 27 ;
var_dump ($idade);
if (is_string($idade)) 
    echo "É uma inteiro";
else:
    echo "Não e uma inteiro";
endif;
echo "<hr>" // para criar uma linha

// Obs : e numero inteiro todo numero que não e dividido por .
// float
$altura =1.77
var_dump ($altura);
if (is_flot($altura)) 
    echo "É uma flot";
else:
    echo "Não e uma flot";
endif;
echo "<hr>" // para criar uma linha


// Obs : e numero flot todo numero que  e dividido por .

// boolean

$admin =true;
var_dump ($admin);
if (is_flot($admin)) 
    echo "É uma booleano";
else:
    echo "Não e uma booleano";
endif;
echo "<hr>" // para criar uma linha


// Obs : valor boolean so existe verdadeiro (true) ou falso(false)


//*******Complsto****** */
//array
$carros  = array("gol","uno","camaro",2,5.4,tre);
var_dump ($carros);
if (is_array($carros)) 
    echo "É uma array";
else:
    echo "Não e uma array";
endif;
echo "<hr>" // para criar uma linha


// Obs : array tudo q esta dentro dos (indeferente do tipo de dados);

//object
class Cliente {
    public $nome;
    public function atribuiirNome($nome) {
        $this-> =new Cliente();
    }
}
$cliente =new Cliente();
$cliente-> atribuiirNome("eduardo");
var_dump ($cliente);
if (is_object($cliente)) 
    echo "É uma object";
else:
    echo "Não e uma object";
endif;
echo "<hr>" // para criar uma linha


// Obs : object e todos que e criado atras de classes e funções pre determindas 
//       na criação das regras as que iram ser puxadas apenas para mudar os dados
//       a ser prexendos

//*******Especiais***** */
// NULL
$cidade = null ;
var_dunp ($cidade); //usado para identificar o tipo de variavel 

// Obs : objetos que inicia sem valor pre cadrastrado

//Resouce

// Obs : usado para fazer referencia a contedos externo, tais como banco de dados
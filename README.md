# Aprendendo PHP

O PHP é uma linguagem que funciona do lado do servidor<br>
sendo assim não é possivel criar certas funcionalidades<br>
como botôes que alternam textos e elementos de renderização rápida

- $var - Para variaveis
- define('Nome', 'Valor') - Para constantes ( Podem ser usadas em funções sem o global )
<br>

- Para concatenar usamos o .<br>
- Somente aspas duplas podem carregar variaveis<br>
- Para usar variaveis globais em funções usamos - global $var<br>
- Para usarmos o PHP dentro de tags usamos - < ?php echo 'Elemento' ? >

<h3>Tipos de dados</h3>

  - String
  - Boolean
  - Integer (Somente números inteiros)
  - Float (Aceita números quebrados)
  - Array
  - Object

Arrays podem conter chaves e se comportar semelhante<br>
aos objetos em JavaScript e podemos chamar seus valores com<br>
o nome da chave

$carros = array(
  "carro1"=>"Corsa",
  "carro2"=>"Palio"
)

<h3>DO...WHILE</h3>

Funciona semelhante ao while mas a primeira condição vem antes do loop.<br>
Vai executar a primeira linha de código mesmo que a condiçã de while for falsa <br>
<br>
do { <br>
  echo 'Primeira condição';<br>
}while(1 != 2)

<br>



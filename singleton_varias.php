<?php
require_once 'autoload.php';

use padroes\criacao\singleton\JogadorDeXadrez as JogadorDeXadrez;

$jogador1 = JogadorDeXadrez::getJogador1();
$jogador2 = JogadorDeXadrez::getJogador2();

if ($jogador1 === $jogador2)
{
  echo '$jogador1 tem o mesmo objeto de $jogador2';
}
else
{
  echo '$jogador1 não tem o mesmo objeto de $jogador2';
}
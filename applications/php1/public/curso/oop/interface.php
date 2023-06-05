<?php

interface Database //Guia 
{
  public function listarProdutos();
}
class MysqlBD implements Database
{
  function listarProdutos()
  {
  }
}

class NodeBD implements Database
{
  function listarProdutos()
  {
  }
}

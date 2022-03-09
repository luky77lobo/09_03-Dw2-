<?php
class Departamento
{
    private $id;
    private $nome;
    private $nfunc;
    private $instituicao;

    public function _construct($id, $nome, $nfunc, $instituicao)
    {
        $this->instituicao = new Instituicao();
        $this->id = $id;
        $this->nome = $nome;
        $this->nfunc = $nfunc;
        $this->instituicao = $instituicao;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getnFunc()
    {
        return $this->nfunc;
    }
    public function getInstituicao()
    {
        return $this->instituicao;
    }

    public function imprimeDados()
    {
        echo $this->getId();
        echo "<br>";
        echo $this->getNome();
        echo "<br>";
        echo $this->getnFunc();
        echo "<br>";
        echo "-------------Dados da Instituição---------";
        echo $this->getInstituicao()->imprimeDados();
    }
}

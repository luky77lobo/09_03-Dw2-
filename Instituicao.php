<?php
	class Instituicao {
		private $id;
		private $nome;
		private $cnpj;

		public function setId($id) {
			$this->id = $id;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function setCnpj($cnpj){
			$this->cnpj = $cnpj;
		}

		public function getId(){
			return $this->id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getCnpj(){
			return $this->cnpj;
		}

		public function imprimeDados(){
			echo $this->getId();
			echo "<br>";
			echo $this->getNome();
			echo "<br>";
			echo $this->getCnpj();
		}
		

	}
?>

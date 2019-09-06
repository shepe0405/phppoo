<?php require_once 'interfaces/AcoesVideo.php';
/**
  * 
  */
 class Video implements AcoesVideo
 {
 	private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;


 	//METODOS ESPECIAIS
 	function __construct($titulo)
 	{
 		$this->setTitulo($titulo);
 		$this->avaliacao = 1;
 		$this->views = 0;
 		$this->curtidas = 0;
 		$this->reproduzindo = false;
 	}
 	public function getTitulo()
 	{
 		return $this->titulo;
 	}
 	public function getAvaliacao()
 	{
 		return $this->avaliacao;
 	}
 	public function getViews()
 	{
 		return $this->views;
 	}
 	public function getCurtidas()
 	{
 		return $this->curtidas;
 	}
 	public function getReproduzindo()
 	{
 		return $this->reproduzindo;
 	}
 	public function setTitulo($titulo)
 	{
 		$this->titulo = $titulo;
 	}
 	public function setAvaliacao($avaliacao)
 	{	
 		$media = ($this->getAvaliacao() + $avaliacao)/$this->views;
 		$this->avaliacao = $media;
 	}
 	public function setViews($views)
 	{
 		$this->views = $views;
 	}
 	public function setCurtidas($curtidas)
 	{
 		$this->curtidas = $curtidas;
 	}
 	public function setReproduzindo($reproduzindo)
 	{
 		$this->reproduzindo = $reproduzindo;
 	}
 	//METODOS INTERFACE
 		public function play()
 		{
 			if ($this->getReproduzindo() == false) {
 				$this->setReproduzindo(true);
 				echo "Video começou ou voltou a ser reproduzido<br>";
 			} else {
 				echo "Video já esta sendo reproduzido<br>";
 			}
 			
 		}
 		public function pause()
 		{
 			if ($this->getReproduzindo() == false) {
 				echo "Video já esta pausado<br>";
 			} else {
 				$this->setReproduzindo(false);
 				echo "Video foi pausado<br>";
 			}
 			
 		}
 		public function like()
 		{
 			$this->curtidas ++;
 		}
 }
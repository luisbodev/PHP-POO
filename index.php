<?php 
	class Serie{
		public $year ;
		public $kind;
		public $director;
		public $creator;
		public $storyteller;

		function setYear($year){
			$this->year=$year;
		}
		function getYear(){
			return $this->year;
		}
		function setKind($kind){
			$this->kind=$kind;
		}
		function getKind(){
			return $this->kind;
		}
		function setDirector($director){
			$this->director=$director;
		}
		function getDirector(){
			return $this->director;
		}
		function setCreator($creator){
			$this->Creator=$creator;
		}
		function getCreator(){
			return $this->creator;
		}
		function setStoryteller($creator){
			$this->Creator=$creator;
		}
		function getStoryTellerr(){
			return $this->creator;
		}
	}
	class LaCasaDePapel extends Serie{
		public $name="La Casa de Papel";
		public $seasons=4;
		public $location='Madrid';
		public $watch ='https://www.netflix.com/browse';

		function __construct(){
        	$this->year= 2017;
			$this->kind ='Drama';
			$this->director='Jesús Colmenar,';
			$this->creator='Álex Pina';
			$this->storyteller='Tokyo';
    	}

		function setName($name){
			$this->name=$name;
		}
		function getName(){
			return $this->name;
		}
		function setSeasons($seasons){
			$this->seasons=$seasons;
		}
		function getSeasons(){
			return $this->seasons;
		}
		function setLocation($location){
			$this->location=$location;
		}
		function getLocation(){
			return $this->location;
		}
		function setWatch($watch){
			$this->watch=$watch;
		}
		function getWatch(){
			return $this->watch;
		}


	}

	$casa = new LaCasaDePapel();


	//echo $serie->location;

	var_dump($casa);
	return;
?>
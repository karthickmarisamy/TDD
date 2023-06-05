<?php 

declare(strict_types=1);

namespace src;

class Product{

	protected $name;

	public function setName(string $name) : void{
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}
}
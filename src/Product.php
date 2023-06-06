<?php 

declare(strict_types=1);

namespace src;

/**
	This class handles the product info
*/
class Product{

	protected $name;
	protected $tags;
	protected $quantity;

	/**
		set the name to the product
		@params string $name
	**/
	public function setName(string $name) : void{
		$this->name = $name;
	}

	/**
		get the name of the product
	**/
	public function getName(){
		return $this->name;
	}

	/**
		set the tags to the product
		@params array $tag
	**/
	public function setTags(array $tag) : void{
		$this->tags = $tag;
	}

	/**
		get the product tags
	**/
	public function getTags(){
		return $this->tags;
	}

	/**
		add the tags to the product
		@params $tag
	**/
	public function addTags($tag) : void{
		if(!isset($this->tags)){
			$this->tags[] = $tag; 
		}

		if(is_array($tag) && count($tag)>0){
			foreach ($tag as $t) {
				$this->tags[] = $t;
			}
		} else {
			$this->tags[] = $tag;
		}

	}

	/**
		Check the product has tags
	**/
	public function hasTags(){
		return isset($this->tags) && count($this->tags)>0;
	}

	/**
		clear all product tags
	**/
	public function clearTags() : void {
		$this->tags = [];
	}

	/**
		set the quantity to the product
		@params int $qty
	**/
	public function setQuantity(int $qty) : void{
		$this->quantity = $qty;
	}

	/**
		get the product quantity
	**/
	public function getQuantity(){
		return $this->quantity;
	}


	/**
		get the product quantity is available
	**/
	public function isAvailable(){
		return $this->quantity > 0;
	}


}
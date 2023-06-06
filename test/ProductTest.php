<?php 
declare(strict_types=1);

class ProductTest extends PHPUnit\Framework\TestCase{

	protected $product;

	public function setUp() : void{
		$product = new src\Product;
	}

	public function tearDown() : void{
		//todo 
	}

	/**
		This test handle the product name testing
	**/
	public function testName(){
		$product = new src\Product;
		$product->setName('product 1');
		$this->assertEquals($product->getName(), "product 1");
	}

	/**
		This test handle the product tags testing
	**/
	public function testTags(){
		$product = new src\Product;
		$tags = ["tag1", "tag2"];
		
		//set and get tags
		$product->setTags($tags);
		$this->assertEquals($product->getTags(), $tags);

		// add tags
		$tags[] = "tag3";
		$product->addTags("tag3");
		$this->assertEquals($product->getTags(), $tags);

		// add tags
		$tags[] = "tag4";
		$product->addTags(["tag4"]);
		$this->assertEquals($product->getTags(), $tags);


		// has tags
		$this->assertTrue($product->hasTags());

		//clear tags
		$product->clearTags();
		$this->assertFalse($product->hasTags());
	}


	/** 
		This test handle the product quantity check 
	**/
	public function testQuantity(){
		$product = new src\Product;
		$product->setQuantity(5);
		$this->assertEquals($product->getQuantity(), 5);

		//Is available
		$this->assertTrue($product->isAvailable());

	}
}
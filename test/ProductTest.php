<?php 
declare(strict_types=1);

class ProductTest extends PHPUnit\Framework\TestCase{
	public function testName(){
		$product = new src\Product;
		$product->setName('product 1');
		$this->assertEquals($product->getName(), "product 1");
	}
}
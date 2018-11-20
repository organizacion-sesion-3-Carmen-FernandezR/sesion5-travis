<?php
	use PHPUnit\Framework\TestCase;
	require 'Par.php';
	
	class ParTest extends TestCase
	{
		private $par;
		
		protected function setUp()
		{
			$this->par = new Par();
		}
		
		protected function tearDown()
		{
			$this->par = NULL;
		}
		
		public function testserPar()
		{
			$result = this->par->serPar(4);
			$this->assertEquals(true,$result);
		}
	}
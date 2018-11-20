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

			$result = $this->par->serPar(4);
			$this->assertEquals(true,$result);
			
			$result = $this->par->serPar(5);
			$this->assertEquals(false,$result);
			
			$result = $this->par->serPar(6);
			$this->assertEquals(true,$result);
			
			
			$result = $this->par->serPar(7);
			$this->assertEquals(false,$result);
			
		}
	}
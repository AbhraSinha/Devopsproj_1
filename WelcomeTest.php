<?php
	use PHPunit\framework\TestCase;
	require 'Welcome.php';
	class WelcomeTest extends TestCase{
		protected function setUp(){
			$this->welcome = new Welcome();
		}

		protected function teardown(){
			$this->welcome = new NULL;
		}

		public function testGreet(){
			$result = $this->welcome->greet();
			$this->assertEquals("Welcome to DevOps on AWS",$result);
		}
	}
?>

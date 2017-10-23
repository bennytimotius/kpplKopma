<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Home_test extends TestCase
{
        public function setUp()
       {
           if ( !isset( $_SESSION ) ) 
               $_SESSION = array( );
       }
        public function test_index_admin(){
           $_SESSION['status'] = 'admin';
           $output = $this->request('GET', 'home/index');
           $this->assertRedirect('admin');

        }
        public function test_index_user(){
            $_SESSION['status'] = 'login';
             $output = $this->request('GET', 'home/index');
            $this->assertRedirect('user');
            
        }
        public function test_index_nologin(){
            $_SESSION['status'] = '';
            $output = $this->request('GET', 'home');
           $this->assertContains('<title>KOPMA ITS</title>', $output);
        }
        public function test_index()
	{
		$output = $this->request('GET', 'home/index');
		$this->assertContains('<title>KOPMA ITS</title>', $output);
	}

	public function test_method_404()
	{
		$this->request('GET', 'home/method_not_exist');
		$this->assertResponseCode(404);
	}

	public function test_APPPATH()
	{
		$actual = realpath(APPPATH);
		$expected = realpath(__DIR__ . '/../..');
		$this->assertEquals(
			$expected,
			$actual,
			'Your APPPATH seems to be wrong. Check your $application_folder in tests/Bootstrap.php'
		);
	}
       
}

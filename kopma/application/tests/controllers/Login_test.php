<?php

/* 
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Login_test extends TestCase
{
   public function setUp()
    {
        if ( !isset( $_SESSION ) ) 
            $_SESSION = array( );
    }
    public function test_index_userada()
	{
                $_SESSION['status'] = "Benny";
		$this->request('GET', 'Login');
                $this->assertRedirect('user');
	}
    public function test_index_tanpauser()
	{
            $_SESSION['status'] = "";
            $this->request('GET', 'Login');
            $this->assertRedirect('user');
        }            
    public function test_aksi_login()
    {        
        
       $output = $this->request('POST','Login/aksi_login',[
        $_SESSION['username'] = "Benny",
        $_SESSION['status'] = "login",]);
        $this->assertContains('<h4>Histori Tagihan</h4>',$output);}
        
    public function test_aksi_login_tanpauser()
    {        
        $output = $this->request('POST','Login/aksi_login',[
        $_SESSION['username'] = "",
        $_SESSION['status'] = "login",]);
        $this->assertContains('<h1>Welcome</h1>',$output);}
    public function test_aksi_login_tanpastatus()
    {        
        $output = $this->request('POST','Login/aksi_login',[
        $_SESSION['username'] = "Benny",
        $_SESSION['status'] = "",]);
        $this->assertContains('<h1>Welcome</h1>',$output);}
    
       
    
    public function test_logout(){
	$_SESSION['username'] = 'username';
        $this->request('GET', 'Login/logout');
        $this->assertRedirect('/');
    } 
}

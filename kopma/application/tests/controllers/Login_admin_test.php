<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Login_admin_test extends TestCase{
    
    public function setUp()
    {
        if ( !isset( $_SESSION ) ) 
            $_SESSION = array( );
    }
    public function test_index()
	{
            $_SESSION['username'] = "admin";
            $this->request('GET', 'Login_admin');
            $this->assertRedirect('admin');
	}
    public function test_index_tanpauser()
	{
	
            $_SESSION['username'] = "";
            $this->request('GET', 'Login_admin');
            $this->assertRedirect('admin');
        }          
    public function test_aksi_login()
    {        
        $output = $this->request('POST','Login_admin/aksi_login',[
        $_SESSION['username'] = "admin",
        $_SESSION['password'] = "adminadmin",
        $_SESSION['status'] = "login"]);
        $this->assertContains('<h1>Welcome</h1>',$output);}
    
    public function test_logout(){
	$_SESSION['username'] = 'username';
        $this->request('GET', 'Login_admin/logout');
        $this->assertRedirect('/');
    } 

}


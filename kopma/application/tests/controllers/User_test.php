<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User_test
 *
 * @author Faris-Gun
 */
class User_test extends TestCase {
    public function setUp()
    {
        if ( !isset( $_SESSION ) ) 
            $_SESSION = array( );
    }
    public function test_index(){
        $_SESSION['status'] = "login";
        $output = $this->request('GET', 'User/index');
            //$this->assertRedirect('admin');
        $this->assertContains('<th class="align-center">Jumlah Tagihan</th>', $output);  }
    
}

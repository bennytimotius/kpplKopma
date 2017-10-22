<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Admin_test extends TestCase{
    public function setUp()
        {
            if ( !isset( $_SESSION ) ) 
            $_SESSION = array( );
        }
    public function test_index(){
        $_SESSION['status'] = "admin";
        $output = $this->request('GET', 'Admin/index');
            //$this->assertRedirect('admin');
        $this->assertContains('<h1>Data Anggota</h1>', $output);      
    }
    public function test_shu(){
        $_SESSION['status'] = "admin";
        $output = $this->request('GET', 'Admin/shu');
            //$this->assertRedirect('admin');
        $this->assertContains('<h1>Sisa Hasil Usaha</h1>', $output);}
    public function test_shu_tanpaadmin(){
        $_SESSION['status'] = "";
        $output = $this->request('GET', 'Admin/shu?fail=true');
            //$this->assertRedirect('admin');
        $this->assertContains('<h1>Welcome</h1>', $output);}
    public function test_simpanan(){
        $_SESSION['status'] = "admin";
        $output = $this->request('GET', 'Admin/simpanan');
            //$this->assertRedirect('admin');
        $this->assertContains('<h1>Data Simpanan Anggota</h1>', $output);}
    public function test_agenda(){
        $_SESSION['status'] = "admin";
        $output = $this->request('GET', 'Admin/agenda');
            //$this->assertRedirect('admin');
        $this->assertContains('<h1>Agenda</h1>', $output);}    
    public function test_register_anggota(){
        $_SESSION['status'] = "admin";
        $output = $this->request('GET', 'Admin/register_anggota');
            //$this->assertRedirect('admin');
        $this->assertContains('<h3>Form Anggota</h3>', $output);}
    public function test_register_agenda(){
        $_SESSION['status'] = "admin";
        $output = $this->request('GET', 'Admin/register_agenda');
            //$this->assertRedirect('admin');
        $this->assertContains('<h3>Form Agenda</h3>', $output);}
    public function test_register_shu(){
        $_SESSION['status'] = "admin";
        $output = $this->request('GET', 'Admin/register_shu');
            //$this->assertRedirect('admin');
        $this->assertContains('<h3>Form SHU</h3>', $output);}
    public function test_register_simpanan(){
        $_SESSION['status'] = "admin";
        $output = $this->request('GET', 'Admin/register_simpanan');
            //$this->assertRedirect('admin');
        $this->assertContains('<h3>Form Anggota</h3>', $output);}
        
    public function test_submit_agenda(){
        
        
    }
}

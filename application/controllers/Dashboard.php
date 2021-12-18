<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function index(){
        $data['title'] = 'halaman user';
        $data['user'] = $this->db->get('user')->result();
        // var_dump($data['user']);
        $this->load->view('templates/header',$data);
        $this->load->view('home/allUser',$data);
        $this->load->view('templates/footer');
    }
    public function adduser(){
        $data['title'] = 'tambah user';
        $this->load->view('templates/header',$data);
        $this->load->view('home/addUser');
        $this->load->view('templates/footer');
    }
    public function storeuser(){
        $nama = $this->input->post('nama');
        $jurusan = $this->input->post('jurusan');
        $data = [
            'nama'=>$nama,
            'jurusan'=> $jurusan,
        ];
        $this->db->insert('user',$data);
        redirect('/');
    }
    public function delete($id){
        $this->db->delete('user',['id'=>$id]);
        redirect('/');
    }
    public function edit($id){
        $data['title'] = 'Edit data';
        $data['user']=$this->db->get_where('user',['id'=>$id])->row_array();
        // var_dump($data['user']);
        $this->load->view('templates/header',$data);
        $this->load->view('home/editUser',$data);
        $this->load->view('templates/footer');
    }
    public function update($id){
        $this->db->set('nama',$this->input->post('nama'));
        $this->db->set('jurusan',$this->input->post('jurusan'));
        $this->db->where('id',$id);
        $this->db->update('user');
        redirect('/');
    }
}
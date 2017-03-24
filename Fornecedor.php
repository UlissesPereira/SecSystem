<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fornecedor extends CI_Controller {
public function CadastraFornecedor()
    {
        //$this-> Verifica_Sessao();
        $vet ['idPrestadores']            = $this->input->post('idPrestadores');
         $vet ['Nome']            = $this->input->post('Nome');
         $vet ['CpfCnpj']           = $this->input->post('CpfCnpj');
         $vet ['Telefone']     = $this->input->post('Telefone');
         $vet ['Banco']     = $this->input->post('Banco');
         $vet ['Endereco']     = $this->input->post('Endereco');
         $vet ['Agencia']     = $this->input->post('Agencia');
         $vet ['ContaCorrente']     = $this->input->post('ContaCorrente');
         $vet ['CEP']     = $this->input->post('CEP');
         $vet ['Cidade']     = $this->input->post('Cidade');
         $vet ['Estado']     = implode('-',array_reverse(explode('/',$this->input->post('Estado'))));

         $this->load->model('model_Fornecedores');
         $objModel= new model_Fornecedores();
         $objModel->CREATE($vet);
         //redirect('');
    }
    public function ListFornecedor()
    {
        //$this-> Verifica_Sessao();
        $this->load->view('vw_InsereFornecedor');
        $this->load->model('model_Fornecedores');
        $objModel = new model_Fornecedores();
        //$retorno = $objModel->();
        //$this->load->view('',array('resultado'=>$retorno));
    }

    public function ExcFornecedor($id=null)
    {
        //$this-> Verifica_Sessao();
        $this->load->model ('model_Fornecedores');
        $objModel= new model_Fornecedores();
        $objModel-> DELETE($id);
        //redirect('');
     }


}

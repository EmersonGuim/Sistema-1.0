<?php

   class UsuariosController extends AppController {

     public $usarModel = "Usuario"; //Model que será ultilizado
	 public $usarView = "Usuarios"; //view que será ultilizada
	 
	 public function adicionar(){
	 	
		if($this->request->is('post')){
				
			if($this->Usuario->save($this->request->data)){
				
				$this->Session->setFlash('O usuário foi adicionado com sucesso!');
				$this->redirect(array('action' => 'index'));
				
			}else{
				
				$this->Session->setFlash('Usuário não foi adicionado. Tente novamente!');
			}
			
		}
	 }
	 
	 
	 public function index(){
		 $this->set('usuarios', $this->Usuario->find('all'));
	 }

   }

?>
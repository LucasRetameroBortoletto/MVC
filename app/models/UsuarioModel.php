<?php 
class UsuarioModel {
    public function listarTodos(){
        //simulando dados vindos de um DB
        return [
            ['id' => 1, 'nome'=>'narin1', 'email' => 'narin@narin1.com'],
            ['id' => 2, 'nome'=>'narin2', 'email' => 'narin@narin2.com'],
            ['id' => 3, 'nome'=>'narin3', 'email' => 'narin@narin3.com']
        ];
    }
}

?>
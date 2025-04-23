<?php 
class UsuarioDAO extends Conexao {
    public function __construct() {
        parent::__construct();
    }
    public function inserir($usuario) 
    {
        $sql = "INSERT INTO usuario (nome, celular, email, senha) VALUES (?,?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->blindValue(1, $usuario->getNome());
        $stm->blindValue(2, $usuario->getCelular());
        $stm->blindValue(3, $usuario->getEmail());
        $stm->blindValue(4, $usuario->getSenha());
        $stm->execute();
        $this->db = null;
        return "Usuário cadastrado com sucesso!";
    }
}
?>
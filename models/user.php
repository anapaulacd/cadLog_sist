<?php
require_once 'models/database.php';
 
class User
{
    //Função para localizar usuário pelo email
    public static function findByEmail($email)
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
 
 
    //Função para encontrar usuario pelo id
    public static function find($id)
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    //Função para criar um novo usuario no banco de dados
    public static function create($data)
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
        $stmt->execute($data);
    }
    //Função para todos os dados de todos os usuarios do banco de dados
 
    public static function all()
    {
        $conn = Database::getConnection();
        $stmt = $conn->query('SELECT * from usuarios');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function update($id, $data){
        $conn = Database::getConnection();
        // prepara a consulta sql para atualizar os dados do usuário
        $stmt=$conn->prepare('UPDATE usuarios set nome = :nome, email = :email, perfil = :perfil where id = :id');
        $data['id'] = $id;
        $stmt->execute($data); 
    }
    public static function delete($id){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = id");
        $stmt->execute(['id' => $id]);
        
    }
}
?>
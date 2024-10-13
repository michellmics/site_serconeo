<?php
include_once 'objetos.php'; // Carrega a classe de conexão e objetos

session_start(); // Inicia a sessão para armazenar dados do usuário

class LoginSystem extends SITE_ADMIN
{
    public function validateUser($email, $password)
    {
        try {
            // Cria conexão com o banco de dados
            if (!$this->pdo) {
                $this->conexao();
            }

            // Prepara a consulta SQL para verificar o usuário
            $sql = "SELECT user_id, user_password FROM users WHERE user_email = :email";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Se o usuário for encontrado e a senha for válida
            if ($user && password_verify($password, $user['user_password'])) {
                $_SESSION['user_id'] = $user['user_id']; // Armazena o ID na sessão
                header("Location: dashboard.php"); // Redireciona após login bem-sucedido
                exit();
            } else {
                echo "Usuário ou senha incorretos.";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}

// Processa a requisição POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $loginSystem = new LoginSystem();
    $loginSystem->validateUser($email, $password);
}
?>

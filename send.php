<?php
// Chave secreta do reCAPTCHA (substitua pela sua)
$secretKey = '6LcZ9F0qAAAAAFDgXIwRehRWHU890DwqzZrWYz5Q';

// Verifica se o token do reCAPTCHA foi enviado
if (isset($_POST['g-recaptcha-response'])) {
    $token = $_POST['g-recaptcha-response'];

    // Verifica o token com o Google
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$token}");
    $responseKeys = json_decode($response, true);

    // Verifica se o reCAPTCHA foi bem-sucedido
    if (intval($responseKeys["success"]) === 1) {
        // reCAPTCHA validado, processe os dados do formulário
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        // Aqui você pode adicionar sua lógica de processamento do formulário
        // Exemplo: Enviar e-mail ou salvar os dados no banco de dados

        // Simples feedback de sucesso
        echo "Formulário enviado com sucesso!";
        echo "<br>Nome: $name";
        echo "<br>Email: $email";
        echo "<br>Telefone: $phone";
        echo "<br>Mensagem: $message";
    } else {
        // O reCAPTCHA falhou
        echo "Falha na verificação do reCAPTCHA. Por favor, tente novamente.";
    }
} else {
    // Se o token não foi enviado
    echo "Por favor, complete o reCAPTCHA.";
}
?>

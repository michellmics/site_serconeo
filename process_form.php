<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sua chave secreta
    $secretKey = "6LcZHF4qAAAAAB8x_VRiQoivWpb5kzz_SOy8EwIT"; // Substitua pela sua chave secreta

    // O token enviado pelo reCAPTCHA v2
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    // Verifique se o token foi recebido
    if (!empty($recaptchaResponse)) {
        // Verifique o reCAPTCHA fazendo uma solicitação à API do Google
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}");
        $responseKeys = json_decode($response, true);

        // Verifique o sucesso da validação
        if ($responseKeys["success"]) {
            // Validação bem-sucedida
            echo "Formulário enviado com sucesso!";
            // Aqui você pode processar o formulário
        } else {
            // Validação falhou
            echo "Falha na verificação do reCAPTCHA. Por favor, tente novamente.";
        }
    } else {
        // reCAPTCHA não foi resolvido
        echo "Por favor, complete o reCAPTCHA.";
    }
}
?>

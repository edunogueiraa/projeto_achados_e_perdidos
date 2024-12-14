<!-- emails/adoption_approved.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Registro com sucesso</title>
</head>
<body>
    <h1>Seu registro foi bem sucedido.</h1>
    <p>Detalhes da conta:</p>
    <ul>
        <li>Nome do Usuário: {{ $user->name }}</li>
        <li>Email do Usuário: {{ $user->email }}</li>
    </ul>
</body>
</html>
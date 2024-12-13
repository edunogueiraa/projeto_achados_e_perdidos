# Instruções para Criar um Usuário Administrador

Abra o terminal e execute o seguinte comando para acessar o Tinker:

```bash
php artisan tinker

\App\Models\User::create([
    'name' => 'Administrador',
    'email' => 'admin@exemplo.com',
    'password' => bcrypt('senha_segura'),
    'type' => 'admin',
]);
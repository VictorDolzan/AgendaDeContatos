<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
</head>

<body>
    <h1>Cadastrar Usuário</h1>
    <form action="/signup" method="POST">
        @csrf
        <input name="name" placeholder="Nome">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Senha">
        <button type="subtmit">Enviar</button>
    </form>
    <a href="/login">Login</a>
    </form>
</body>

</html>
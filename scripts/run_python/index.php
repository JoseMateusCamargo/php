<!DOCTYPE html>

<html lang="br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Run Python">
    <meta name="author" content="Mateus">

    <title>Run Python</title>
</head>

<body>

<form method="post">
    <input type="submit" value="Run Python" name="GO">
</form>

</body>
</html>

<?php
if (isset($_POST['GO'])) {
    # shell_exec() Execute command via shell and return the complete output as a string.
    # ref: https://www.php.net/manual/en/function.shell-exec.php
    $shell_cmd = shell_exec("python HelloWorld.py");

    # escapeshellcmd() escapes all characters in a string that can trick a shell command into executing arbitrary commands.
    # ref: https://www.php.net/manual/pt_BR/function.escapeshellcmd.php
    $command = escapeshellcmd('python HelloWorld.py');
    $escape_shell_cmd = shell_exec($command);

    echo $shell_cmd . '</br>' . $escape_shell_cmd;
}
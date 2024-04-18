<?php
    function verificar() {
    
    $payment = [
        "produto" => "Camisa DnD - Tamanho M",
        'dia_pag' => 1,
        'mes_pag' => 2,
        'ano_pag' => 2024,
        "pago" => false
    ];
    
    if ($payment['dia_pag'] < 2 and
        $payment['mes_pag'] <= 2 and 
        $payment['ano_pag'] <= 2024) {
        $payment['pago'] = true;
    }
    
    echo $payment['pago'] ? 'Verdadeiro' : 'Falso';
}

verificar();






    function media() {
    $aluno =[
        "nome" => "João",
        "notas" => [
            "prova1" => 8,
            "prova2" => 7,
            "prova3" => 6,
            "prova4" => 9
        ]
    ];
    
    $notas = $aluno['notas']['prova1']+$aluno['notas']['prova2']+$aluno['notas']['prova3']+$aluno['notas']['prova4'];
    $media_final = $notas/4;
    
    echo $media_final;
    
    }
    media();





    function informacaoalunos($alunos) {
    foreach ($alunos as $aluno) {
        echo "Nome: " . $aluno['nome']  . "\n". "Idade: " . $aluno['idade'] . "\n". "\n";
        }
    }

    $alunos = [
        [
            "nome" => "João",
            "idade" => 20
        ],
        [
            "nome" => "Maria",
            "idade" => 22
        ],
        [
            "nome" => "José",
            "idade" => 21
        ]
    ];
informacaoalunos($alunos);






    function cadastrarUsuario($users, $newuser) {
        if (strlen($newuser['nome']) <= 3) {
            echo "Erro: Por favor, insira um nome com mais de 3 caracteres para continuar.";
            return;
        }
    
        if ($newuser['idade'] <= 18) {
            echo "Erro: É necessário que o usuário tenha 18 anos ou mais para se cadastrar.";
            return;
        }
    
        if (strlen($newuser['email']) <= 10) {
            echo "Erro: O email do usuário deve ter pelo menos 11 caracteres para continuar.";
            return;
        }
    
        if (strlen($newuser['senha']) <= 8) {
            echo "Erro: A senha do usuário deve conter pelo menos 9 caracteres.";
            return;
        }
    
        foreach ($users as $users) {
            if ($users['email'] === $newuser['email']) {
                echo "Erro: Este endereço de email já está em uso. Por favor, insira um email diferente.";
                return;
            }
    }

    $users[] = $newuser;
    echo "Registro do usuário concluído com sucesso!";
    return $users;
    }
    
    $users = [
        [
            "nome" => "João",
            "idade" => 20,
            "email" => "email@email.com",
            "senha" => "12345678"
        ],
        [
            "nome" => "Guilherme",
            "idade" => 17,
            "email" => "meu.email@email.com",
            "senha" => "abc12312312"
        ]
    ];
    
    $newuser = [
        "nome" => "John Doe",
        "idade" => 25,
        "email" => "johndoe@email.com",
        "senha" => "pass54321"
    ];
    
    cadastrarUsuario($users, $newuser);

?>

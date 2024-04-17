<h1>Listar Usuários</h1>

<?php
    $sql = "SELECT * FROM usuarios";

    $res = $conn -> query($sql);
    $qtd = $res -> num_rows;

    if ($qtd > 0) {
        print"<table class='table table-hover table-striped table-bordered'>";
            print"<tr>";
            print"<th>"."#"                        ."</th>";
            print"<th>"."NOME"                     ."</th>";
            print"<th>"."E-MAIL"                   ."</th>";
            print"<th>"."DATA DE NASCIMENTO"       ."</th>";
        print"</tr>";
        while ($row <= $res -> fetch_assoc()) {
            print"<tr>";
            print"<td>".$row -> id                          ."</th>";
            print"<td>".$row -> nome                        ."</th>";
            print"<td>".$row -> email                       ."</th>";
            print"<td>".$row -> data_nasc                   ."</th>";

            print"<td class= 'd-flex justify-content-center align-item-center'>
                <button
                    class='btn btn-sucess'
                    onclick=\"location.href='?page=editar&id"  . $row -> id."'\"
                    style='margin=right:10px;'
                >Editar</button>

                <button
                    class='btn btn-danger'
                    onclick=\"
                        if(confirm('Tem certeza que deseja excluir?')){
                        location.href='?page=excluir&id"  . $row -> id."'
                        }else{false;}\"
                >Excluir </button>
            </td>";
        print"</tr>";
        }
        print "</table>";
    }else {
        print "<p class='alert alert-danger'>Não encontramos resultados!</p>";
    }

?>
<h1>Listar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd =  $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>Id</th>";
            print "<th>NOME</th>";
            print "<th>E-MAIL</th>";
            print "<th>DATA DE NASCIMENTO</th>";                                    
            print "</tr>";        
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nasc."</td>";                                    
            print "</tr>";
        }
    }else {
       print "<p class='alert alert-danger'> Não encontrou resultados</p>";
    }



?>
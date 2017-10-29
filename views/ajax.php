<?php

foreach($viewData as $col){

    echo '<tr>';
    echo "<td class='a-center'>
            <input type='checkbox' onclick='promocao($col[id_prod])' class='flat' id='selePromocao' name='table_records'>
          </td>";
    echo '<td>'.$col['nome'].'</td>';
    echo '<td>'.$col['marca'].'</td>';
    echo '<td>'.$col['descricao'].'</td>';
    echo '<td>'.number_format($col['preco'], 2, ',', '.').'</td>';
    echo '<td><img src="public/image/'.$col['foto'].'" style="width: 30px; margin: 0px 15px;"></td>';
    echo '<td>'.$col['validade'].'</td>';
    echo "<td>
             <button type='button' value='$col[id_prod]' class='btn btn-primary'  onclick='edit($col[id_prod])' name='editar' id='editar' ><i class='glyphicon glyphicon-pencil'></i></button>
             <button type='button' value='$col[id_prod]' class='btn btn-danger'  onclick='excluir($col[id_prod])' name='excluir' id='excluir' ><i class='glyphicon glyphicon-trash'></i></button>
          </td>";
    echo '</tr>';
}
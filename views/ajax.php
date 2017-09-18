<?php

foreach($viewData as $col){

    echo '<tr>';
    echo '<td class="a-center ">
            <input type="checkbox" class="flat" name="table_records">
          </td>';
    echo '<td>'.$col['nome'].'</td>';
    echo '<td>'.$col['marca'].'</td>';
    echo '<td>'.$col['descricao'].'</td>';
    echo '<td>'.$col['preco'].'</td>';
    echo '<td>'.$col['foto'].'</td>';
    echo '<td>'.$col['validade'].'</td>';
    echo "<td>
             <button type='button' value='$col[id_prod]' class='btn btn-primary'  onclick='edit($col[id_prod])' name='editar' id='editar' ><i class='glyphicon glyphicon-pencil'></i></button>
             <button type='button' value='$col[id_prod]' class='btn btn-danger'  onclick='excluir($col[id_prod])' name='excluir' id='excluir' ><i class='glyphicon glyphicon-trash'></i></button>
          </td>";
    echo '</tr>';
}
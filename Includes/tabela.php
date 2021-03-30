<table class="table table-hover table-bordered text-center">
    <thead class="thead">
        <tr class="table-active ">
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">CIDADE</th>
            <th scope="col">ESTADO</th>
        </tr>
    </thead>
    <tbody id="tabela"> 
<?php
    $crud = new classCrud();
    $result = $crud->selectDB('*', 'clientes', '', array());                 
    if (!empty($result)) {
        while ($fetch = $result->fetch(PDO::FETCH_OBJ)) {
?>            
        <tr>
            <td scope='col'><?=$fetch->id?></td>
            <td scope='col'><?=$fetch->nome?></td>
            <td scope='col'><?=$fetch->email?></td>
            <td scope='col'><?=$fetch->cidade?></td>
            <td scope='col'><?=$fetch->estado?></td>
        </tr>
<?php
        }
    } else {
?>        
        <tr>
            <td Align='center' colspan='6'>Nenhum cliente encontrado</td>
        </tr>
<?php    
    }
?>
    </tbody>
</table> 
<style>
    th,td{
        text-align: center;
    }

    th{
        
    }
</style>
<table class="table">
                <tr>
                    <th>Category_ID</th>
                    <th>Category_name</th>
                    <th>Quantity Product</th>
                    <th>Min Price</th>
                    <th>Max Price </th>
                    <th>Avarage Price</th>
                    
                    
                </tr>


                <!-- Đổ dữ liệu -->

                <?php foreach ($tks as $tk) : ?>
                    <tr>
                        <td><?= $tk['category_id']  ?></td>
                        <td><?= $tk['category_name']  ?></td>
                        <td><?= $tk['quantity'] ?></td>
                        <td><?= $tk['min']  ?></td>
                        <td><?= $tk['max']  ?></td>
                        <td><?= $tk['avg'] ?></td>
                        

                       
                      






                    </tr>


                <?php endforeach ?>
            </table>
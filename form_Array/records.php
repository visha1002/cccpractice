<?php
    include_once('connection.php');

    $selectqry = select('*', 'ccc_product', 'ORDER BY id DESC LIMIT 10');
    $ans = mysqli_query($conn,$selectqry);

    $row = mysqli_fetch_assoc($ans);
        do{
            echo "
                 $row[id].
                 $row[product_name].
                 $row[sku].
                 $row[product_type].
                 $row[category].
                 $row[m_cost].
                 $row[s_cost].
                 $row[t_cost].
                 $row[price].
                 $row[status].
                 $row[created_at].             
                 $row[updated_at]<br>
             ";
             $row = mysqli_fetch_assoc($ans);
        }while($row)
?>
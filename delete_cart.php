<?php
    $id = $_GET['id'];
    $cookie_data = stripslashes($_COOKIE['shopping_cart']);
    $cart_data = json_decode($cookie_data, true);

    foreach($cart_Data as $keys => $values){
        if($cart_Data[$keys]['item_id'] == $id){
            unset($cart_data[$keys]);
            $item_data = json_encode($cart_data);
            setcookie('shopping_cart', $item_data, time()+ (86400*30));
            header("location:tampil_cart.php?remove=1");
        }
    }
?>
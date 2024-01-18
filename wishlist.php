<?php
session_start();
include "connection.php"; 
        if(isset($_SESSION["user"]))
        {
            if(isset($_GET["wishlist"])){

                if(isset($_COOKIE["wishlist"])){
                    $cookie_data = stripslashes($_COOKIE['wishlist']);
                    $cart_data = json_decode($cookie_data, true);
                }
                else{
                    $cart_Data = array();
                }
                $item_id_list = array_column($cart_data, 'item_id');
    
                if(in_array($_GET["id"], $item_id_list)){
                    foreach($cart_Data as $keys => $values){
                        if($cart_data[$keys]["item_id"] == $_GET["id"]){
                            $cart_data[$keys]["item_quantity"] = $cart_data[$keys]["item_quantity"] + $_GET["quantity"];
                        }
                    }
                }
                else{
                    $item_array = array(
                        'item_id' => $_GET["id"],
                        'item_name' => $_GET['name'],
                        'item_price' => $_GET['price'],
                        'item_quantity' => $_GET['quantity'],
                    );
                    $cart_data[] = $item_array;
    
                }
                
                $item_data = json_encode($cart_data);
                setcookie('wishlist', $item_data, time() + (86400 * 30));
                
                header("location:index.php?wishlist=1");

            }
            else if(isset($_GET["action"])){
                if($_GET["action"] == "delete"){
                    $cookie_data = stripslashes($_COOKIE['wishlist']);
                    $cart_data = json_decode($cookie_data, true);

                    foreach($cart_data as $keys => $values){
                        if($cart_data[$keys]['item_id'] == $_GET["id"]){
                            unset($cart_data[$keys]);
                            $item_data = json_encode($cart_data);
                            setcookie('wishlist', $item_data, time()+ (86400*30));
                            header("location:tampil_wishlist.php?remove=1");
                        }
                    }
                }
                else if($_GET["action"] =="clear"){
                    setcookie("wishlist", "", time() - 3600);
                    header("location:index.php");
                }
                else if($_GET["action"] == "add_to_cart"){
                    $cookie_data = stripslashes($_COOKIE['wishlist']);
                    $cart_data = json_decode($cookie_data, true);

                    foreach($cart_data as $keys => $values){
                        if($cart_data[$keys]['item_id'] == $_GET["id"]){
                            header("location:cart.php?add_to_cart=1&id=" . $cart_data[$keys]['item_id'] ."&name=" . $cart_data[$keys]['item_name'] . "&price=" . $cart_data[$keys]['item_price'] . "&quantity=" . $cart_data[$keys]['item_quantity']);
                            unset($cart_data[$keys]);
                            $item_data = json_encode($cart_data);
                            setcookie('wishlist', $item_data, time()+ (86400*30));
                        }
                    }
                }
            }

            
        }
        else{
            echo '<script>alert("PLEASE LOGIN OR SIGN UP")</script>';
            echo '<script>window.location="index.php"</script>';
        }    

?>

<?php

session_start();
// if (!isset($_SESSION['username'])) {
//     header("location:view/account/login.php");
    
// }

require_once "model/pdo.php";
require_once "model/admin/category.php";
require_once "model/admin/product.php";
require_once "model/client/category.php";
require_once "model/client/product.php";
require_once "model/client/binhluan.php";
require_once "model/account/sign_up.php";
require_once "model/account/account.php";
require_once "model/thongke/thongke.php";
require_once "controller/admin/product.php";
require_once "controller/admin/category.php";
require_once "controller/client/product.php";
require_once "controller/client/category.php";
require_once "controller/client/trangchu.php";
require_once "controller/account/sign_up.php";
require_once "controller/account/account.php";
require_once "controller/thongke/thongke.php";

// function renderView($view)
// {
//     require_once "view/admin/trangchu/index_head.php";
//     $view;
//     require_once "view/admin/trangchu/index_bottom.php";
// }

// controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

            // ===========Show product ==================
        case 'show_product':
            require_once "view/admin/trangchu/index_head.php";
            show_product();
            require_once "view/admin/trangchu/index_bottom.php";
            break;



            // ==================Add product==================
        case 'add_product':
            require_once "view/admin/trangchu/index_head.php";
            add_product();
            require_once "view/admin/trangchu/index_bottom.php";


            break;
            // ======================Sua product==========================
        case 'sua_product':
            require_once "view/admin/trangchu/index_head.php";
            sua_product();
            require_once "view/admin/trangchu/index_bottom.php";

            break;
            // =============================Xoa product======================
        case 'xoa_product':
            require_once "view/admin/trangchu/index_head.php";
            xoa_product();
            require_once "view/admin/trangchu/index_bottom.php";
            break;
            // ================================Show category================================
        case 'show_category':
            require_once "view/admin/trangchu/index_head.php";
            show_category();
            require_once "view/admin/trangchu/index_bottom.php";

            break;
            // =================================Add category============================
        case 'add_category':
            require_once "view/admin/trangchu/index_head.php";
            add_category();
            require_once "view/admin/trangchu/index_bottom.php";

            break;
            // ===================================Sua category=============================
        case 'sua_category':
            require_once "view/admin/trangchu/index_head.php";
            sua_category();
            require_once "view/admin/trangchu/index_bottom.php";
            break;
            // ================================Xoa category=============================
        case 'xoa_category':
            require_once "view/admin/trangchu/index_head.php";
            xoa_category();
            require_once "view/admin/trangchu/index_bottom.php";

            break;

            // ===============================CLIENT=========================================

        case 'client_trangchu':
            require_once "view/client/trangchu/trangchu_head.php";
            client_trang_chu();
            require_once "view/client/trangchu/trangchu_footer.php";


            break;

        case 'client_product':
            require_once "view/client/trangchu/trangchu_head.php";
            show_client_product();
            require_once "view/client/trangchu/trangchu_footer.php";
            break;

        case 'client_category':
            require_once "view/client/trangchu/trangchu_head.php";
            show_client_category();
            require_once "view/client/trangchu/trangchu_footer.php";
            break;

        case 'client_detail_product':
            require_once "view/client/trangchu/trangchu_head.php";
            detail_product();
            require_once "view/client/trangchu/trangchu_footer.php";
            break;

        //    ====================Customer========================== 

        case 'show_account':
            
            require_once "view/admin/trangchu/index_head.php";
            show_account();
            require_once "view/admin/trangchu/index_bottom.php";
            break;

            case 'xoa_account':
            
                require_once "view/account/xoa_account.php";
                
               
                break;   

            //  =========================Thông kê======================   
            case 'thongke':
        
                require_once "view/admin/trangchu/index_head.php";
                thongke();
                require_once "view/admin/trangchu/index_bottom.php";
                break;


            // ===================================Account=================

        case 'sign_up':
            sign_up();
           
            break;
        case 'login':
                require_once "view/account/login.php";
                break;

            case 'logout':
                        require_once "view/account/logout.php";
                            break;

    }
} else {
    require_once "view/admin/trangchu/index_head.php";
    require_once "view/admin/trangchu/index_main.php";

    require_once "view/admin/trangchu/index_bottom.php";
}

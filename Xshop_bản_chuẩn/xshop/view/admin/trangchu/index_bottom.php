<div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-outlined">menu</span>
                        
                        
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-outlined active">light_mode</span>
                    <span class="material-symbols-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey <b><?php if (isset($_SESSION['username'])) : ?>
                                <?= $_SESSION['username'] ?>
                            <?php endif ?></b> </p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="view/admin/images/avatar.jpg" alt="">
                    </div>
                </div>



            </div>
            <!-- END TOP  -->


            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="view/admin/images/avatar2.jpg" alt="">
                        </div>
                        <div class="messenge">
                            <p> <b>Mike Tyson</b> Received his order of Night Lion tech GPS drone </p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>

                    <div class="update">
                        <div class="profile-photo">
                            <img src="view/admin/images/avatar3.jpg" alt="">
                        </div>
                        <div class="messenge">
                            <p> <b>DatVilla</b> give you 400 million VND </p>
                            <small class="text-muted">4 Minutes Ago</small>
                        </div>
                    </div>

                    <div class="update">
                        <div class="profile-photo">
                            <img src="view/admin/images/avatar4.jpg" alt="">
                        </div>
                        <div class="messenge">
                            <p> <b>Jack</b> lost 5 million VND</p>
                            <small class="text-muted">6 Minutes Ago</small>
                        </div>
                    </div>

                </div>
                <!-- END UPDATES  -->
            </div>
            <!-- END RECENT-UPDATES  -->

            <div class="sales-analytics">
                <h2>Sales Analytics</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-symbols-outlined">
                        shopping_cart
                        </span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>ONLINE ORDERS</h3>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                        <h5 class="success">+39%</h5>
                        <h3>3849</h3>
                    </div>
                </div>

                <!-- ==== -->

                <div class="item offline">
                    <div class="icon">
                        <span class="material-symbols-outlined">
                        local_mall
                        </span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>OFFLINE ORDERS</h3>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                        <h5 class="danger">-17%</h5>
                        <h3>1100</h3>
                    </div>
                </div>

                <!-- ==== -->

                <div class="item customers">
                    <div class="icon">
                        <span class="material-symbols-outlined">
                        person
                        </span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>NEW CUSTOMERS</h3>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                        <h5 class="success">+25%</h5>
                        <h3>869</h3>
                    </div>
                </div>

                <!-- ==== -->

                <a class="item add-product"  href="index.php?act=add_product">
                    <div>
                        <span class="material-symbols-outlined">
                            add
                            </span>
                            <h3>Add Product</h3>

                           
                    </div>
                    
                </a>


            </div>
            <!-- End sale analytic  -->
        </div>
        <!-- END RIGHT  -->

        
        

    



    </div>

    <!-- END CONTAINER  -->
    <script src="view/admin/js/index.js"></script>

<div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li class="<?php echo $_REQUEST['hal']=="dashboard"?'mm-active':null  ?>">
                                <a href="?hal=dashboard" class="waves-effect <?php if($_REQUEST['hal'] == 'dashboard'){ echo "active"; } ?>">
                                    <i class="ri-dashboard-line"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li class="<?php if($_REQUEST['hal'] == 'jurusan'){ echo "mm-active"; } ?>">
                                <a href="?hal=jurusan" class="waves-effect <?php if($_REQUEST['hal'] == 'jurusan'){ echo "active"; } ?>">
                                    <i class="ri-dashboard-line"></i>
                                    <span>Jurusan</span>
                                </a>
                            </li>

                            <li class="<?php if($_REQUEST['hal'] == 'kelas'){ echo "mm-active"; } ?>">
                                <a href="?hal=kelas" class="waves-effect <?php if($_REQUEST['hal'] == 'kelas'){ echo "active"; } ?>">
                                    <i class="ri-dashboard-line"></i>
                                    <span>Kelas</span>
                                </a>
                            </li>

                            <li class="<?php if($_REQUEST['hal'] == 'mahasiswa'){ echo "mm-active"; } ?>">
                                <a href="?hal=mahasiswa" class="waves-effect <?php if($_REQUEST['hal'] == 'mahasiswa'){ echo "active"; } ?>">
                                    <i class="ri-dashboard-line"></i>
                                    <span>Mahasiswa</span>
                                </a>
                            </li>

                            <!-- <li class="mm-active">
                                <a href="calendar.html" class="waves-effect active">
                                    <i class="ri-calendar-2-line"></i>
                                    <span>Calendar</span>
                                </a>
                            </li> -->


                            <!-- <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-store-2-line"></i>
                                    <span>Ecommerce</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ecommerce-products.html">Products</a></li>
                                    <li><a href="ecommerce-product-detail.html">Product Detail</a></li>
                                    <li><a href="ecommerce-orders.html">Orders</a></li>
                                    <li><a href="ecommerce-customers.html">Customers</a></li>
                                    <li><a href="ecommerce-cart.html">Cart</a></li>
                                    <li><a href="ecommerce-checkout.html">Checkout</a></li>
                                    <li><a href="ecommerce-shops.html">Shops</a></li>
                                    <li><a href="ecommerce-add-product.html">Add Product</a></li>
                                </ul>
                            </li> -->
                

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
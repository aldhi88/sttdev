<!doctype html>
<html lang="en">

    <head>
        <?php include "components/head.php" ?>
    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include "components/header.php" ?>
            <!-- ========== Left Sidebar Start ========== -->
            <?php include "components/vertical-menu.php" ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <!-- Konten -->
                <div class="page-content">
                    <div class="container-fluid">
    
                        <?php 

                            include "modul/".$_REQUEST['hal'].".php"
                            
                        ?>

                    </div>
                </div>
                
                <!-- End Konten -->

                <?php include "components/footer.php" ?>
            </div>

        </div>

        <?php include "components/right-bar.php" ?>
        
        <?php include "components/script.php" ?>
    </body>
</html>

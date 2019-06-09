<?php require "./php/head.php"; ?>
            <article>
            	<h1>Welcome</h1>
                <p>
<?php include "./home/welcome.php"; ?>
				</p>
            </article>
            
            <div class="promo_container">
            
            	<div class="promo one">
                	<div class="content">
<?php include "./home/promo_one.php"; ?>  						
                    </div> <!-- content -->
                </div> <!-- promo one -->
                
                <div class="promo two">
                	<div class="content">
<?php include "./home/promo_two.php"; ?>
                    </div> <!-- content -->
                </div> <!-- promo two -->
                
                <div class="promo three">
                	<div class="content">
<?php include "./home/promo_three.php"; ?>
                    </div> <!-- content -->
                </div> <!-- promo three -->
            
            <div class="clear-fix"></div>
            
            </div> <!-- promo_container -->
       		
<?php require "./php/submenu.php"; ?>

        </div> <!-- page -->
    </body>
</html>

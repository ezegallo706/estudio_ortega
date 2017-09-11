<?php /* Wrapper Name: Header */ ?>
<div class="extra_header">
    <div class="row">
    	<div class="span7" data-motopress-type="static" data-motopress-static-file="static/static-logo.php">        
             <div class="logo_holder">
    		      <?php get_template_part("static/static-logo"); ?>
    	     </div>  
        	<div data-motopress-type="static" data-motopress-static-file="static/static-nav.php">
                <div class="menu_holder">
        		  <?php get_template_part("static/static-nav"); ?>
        	   </div>
        	</div>
    	</div>
    	<div class="span5" data-motopress-type="static" data-motopress-static-file="static/static-address.php">
    	   <?php get_template_part("static/static-address"); ?>
    	</div>
    </div>
</div>
<?php if (is_front_page()) : ?>
 <div class="row">
   <div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-header-content.php">
    <?php get_template_part("static/static-header-content"); ?>
  </div>
 </div>
<?php endif; ?>
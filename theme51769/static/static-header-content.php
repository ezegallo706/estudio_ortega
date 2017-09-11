<?php /* Static Name: Header Content */ ?>
<?php
 $page_slug = of_get_option('page_slug');
 $page_data = get_page_by_path($page_slug);
 $page_id   = $page_data->ID;
 echo apply_filters('the_content', $page_data->post_content);
?> 
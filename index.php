<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<img src="<?php echo get_template_directory_uri(); ?>/assets/img/test.png" />

<ul>
<?php
// https://developer.wordpress.org/reference/functions/wp_list_categories/
// See comments in above link to fine-tune output HTML via regular expressions (For later JSON/AJAX use)
// Obviously needs locally set-up categories in your WP install to display anything other than Uncategorized
wp_list_categories( array(
    'hierarchical' => true,
    'hide_empty' => 0,
    'show_count' => 1,
    'title_li' => ""
) );
?>
</ul>

</body>
</html>
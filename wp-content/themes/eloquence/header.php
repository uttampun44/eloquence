<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php echo bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo esc_attr(bloginfo('description')); ?>" />
    <meta name="keywords"content="" />
    <title><?php echo bloginfo(); ?> <?php if(is_front_page()){ echo bloginfo('description');  } ?> <?php echo wp_title();  ?></title>
     <?php wp_head(); ?>
</head>
<body>
<?php wp_nav_menu(array('theme-locatiomn' => 'primary-menu', 'eloquence_class' => 'header_eloquence')); ?>
</body>
</html>
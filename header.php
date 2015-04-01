<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php wp_head();?>
</head>

<body class="<?php if ( is_front_page() ) echo 'is-front-page';?>">
<div id="jacket">
	<?php get_template_part( 'parts/header-bar' ); ?>
	<?php get_template_part( 'parts/header-banner' ); ?>
    <div id="binder" class="content-wrap">
		<?php get_template_part( 'parts/header-nav' ); ?>
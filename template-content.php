<?php
/*
Template Name: Content
*/
?>
<style>
#testDiv{
float:left;
width:600px;
}
#sideDiv{
float:right;
width:200px;
}
#sideDiv a{
	padding-bottom:0px;
display:block;
}
</style>
<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
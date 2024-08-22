<?php 
// register scripts and css

function marianaScripts(){


wp_register_script('anima-works', get_template_directory_uri() . '/js/animaWorks.js', [], false, true);

wp_register_script('carrossel', get_template_directory_uri() . '/js/carrossel.js', [], false, true);

wp_register_script('carrossel-mobile', get_template_directory_uri() . '/js/carrosselMobile.js', [], false, true);

wp_register_script('open-overlay', get_template_directory_uri() . '/js/openOverlay.js', [], false, true);

wp_register_script('main-script', get_template_directory_uri() . '/script.js', ['anima-works', 'carrossel', 'carrossel-mobile', 'open-overlay' ], false, true);

wp_enqueue_script('main-script');

function marianaCSS(){

  wp_register_style('main-style', get_template_directory_uri() . 'style.css', [], false, false );

  wp_enqueue_style('main-style');
}

}
add_action('wp_enqueue_scripts', 'marianaScripts');




// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

// CMB2

// the field
function get_field2($key, $page_id = 0){
$id = $page_id !== 0 ? $page_id : get_the_ID();

return get_post_meta($id, $key, true);

};

function the_field2 ($key, $page_id = 0){

echo get_field2($key, $page_id);

};
// 

add_action('cmb2_admin_init', 'cmb2_fields_personal');

function cmb2_fields_personal(){
remove_post_type_support('personal', 'editor');

$cmb = new_cmb2_box([
	'id' => 'personal_box',
	'title' => 'Personal',
	'object_types' => ['personal'],
	'show-on' => [
		'key' => 'page-template',
		'value' => 'single-personal.php',
	],
	]);

	

	$cmb->add_field( [
		'name' => 'Título',
		'id' => 'title-work',
		'type' => 'text',
		
		]);

	
$cmb->add_field( [
'name' => 'Ano',
'id' => 'ano-work',
'type' => 'text_small',

]);

$cmb->add_field( [
	'name' => 'Imagem',
'id' => 'preview_image',
'type' => 'file',
'preview_size' => [100, 100],
'desc' => 'Essa imagem é o preview que aparece na home',

'options' => [
	'url' => false,
],
		
		]);


$imagens_personal = $cmb->add_field([
'name' => 'imagens',
'id' => 'imagens-personal',
'type' => 'group',
'repeatable' => true,


'options' => [
	'group_title' => 'Foto {#}',
	'add_button' => 'Adicionar Imagem' ,
	'sortable' => true,
],

]);

$cmb->add_group_field($imagens_personal, [
'name' => 'Imagem',
'id' => 'imagem',
'type' => 'file',
'preview_size' => [200, 200],

'desc' => 'Lembre-se de sempre colocar a imagem no menor tamanho de arquivo possível, de preferência a JPG. Quanto menor o tamanho do arquivo, mais rápido o carregamento do site.',

'options' => [
	'url' => false,
],


]);

};


// 

// custom post type

function custom_post_type_personal() {
	register_post_type('personal', array(
		'label' => 'Personal',
		'description' => 'Personal',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'personal', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Personal',
			'singular_name' => 'Personal',
			'menu_name' => 'Personal',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Trabalho (Personal)',
			'edit' => 'Editar',
			'edit_item' => 'Editar Personal',
			'new_item' => 'Novo Personal',
			'view' => 'Ver Personal',
			'view_item' => 'Ver Personal',
			'search_items' => 'Procurar Trabalho',
			'not_found' => 'Nenhum Trabalho Encontrado',
			'not_found_in_trash' => 'Nenhum Trabalho Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_personal')


?>


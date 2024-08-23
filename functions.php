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

// imagem personal preview
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
// 

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
// -------------------------------------------------------------------------
// pagina work
// -------------------------------------------------------------------------
add_action('cmb2_admin_init', 'cmb2_fields_work');

function cmb2_fields_work(){
	
	remove_post_type_support('work', 'editor');



$cmbWork = new_cmb2_box([
	'id' => 'work_box',
	'title' => 'Work',
	'object_types' => ['work'],
	'show-on' => [
		'key' => 'page-template',
		'value' => 'single-work.php',
	],
	]);


	$cmbWork->add_field( [
		'name' => 'Título',
		'id' => 'title-work-page-work',
		'type' => 'text',
		
		]);

		$cmbWork->add_field( [
			'name' => 'Ano',
			'id' => 'ano-work-page-work',
			'type' => 'text_small',
			]);


			// imagew preview
			$cmbWork->add_field( [
				'name' => 'Imagem',
			'id' => 'preview_image_page_work',
			'type' => 'file',
			'preview_size' => [100, 100],
			'desc' => 'Essa foto é o preview que aparece na home',
			
			'options' => [
				'url' => false,
			],
					
					]);
					// 
					// repeater field pagina work
					$imagens_work = $cmbWork->add_field([
						'name' => 'imagens',
						'id' => 'imagens-work',
						'type' => 'group',
						'repeatable' => true,
						
						
						'options' => [
							'group_title' => 'Foto {#}',
							'add_button' => 'Adicionar Imagem' ,
							'sortable' => true,
						],
						
						]);
						
						$cmbWork->add_group_field($imagens_work, [
							'name' => 'Imagem',
							'id' => 'imagem-w',
							'type' => 'file',
							'preview_size' => [200, 200],
							
							'desc' => 'Lembre-se de sempre colocar a imagem no menor tamanho de arquivo possível, de preferência a JPG. Quanto menor o tamanho do arquivo, mais rápido o carregamento do site.',
							
							'options' => [
								'url' => false,
							],
							
							]);

	};
// ------------------------------------------fim pagina work-----------------

// PAGINA DIARY
// -------------------------------------------------------------------------

add_action('cmb2_admin_init', 'cmb2_fields_diary');

function cmb2_fields_diary(){
remove_post_type_support('diary', 'editor');


$cmbDiary = new_cmb2_box([
	'id' => 'diary_box',
	'title' => 'Diary',
	'object_types' => ['diary'],
	'show-on' => [
		'key' => 'page-template',
		'value' => 'single-diary.php',
	],
	]);


	$cmbDiary->add_field( [
		'name' => 'Título',
		'id' => 'title-work-page-diary',
		'type' => 'text',
		
		]);

		$cmbDiary->add_field( [
			'name' => 'Ano',
			'id' => 'ano-work-page-diary',
			'type' => 'text_small',
			]);


			// imagew preview
			$cmbDiary->add_field( [
				'name' => 'Imagem',
			'id' => 'preview_image_page_diary',
			'type' => 'file',
			'preview_size' => [100, 100],
			'desc' => 'Essa foto é o preview que aparece na home',
			
			'options' => [
				'url' => false,
			],
		]);


				// repeater field pagina diary-------------

				$imagens_diary = $cmbDiary->add_field([
					'name' => 'imagens',
					'id' => 'imagens-diary',
					'type' => 'group',
					'repeatable' => true,
					
					
					'options' => [
						'group_title' => 'Foto {#}',
						'add_button' => 'Adicionar Imagem' ,
						'sortable' => true,
					],
					
					]);
					
					$cmbDiary->add_group_field($imagens_diary, [
						'name' => 'Imagem',
						'id' => 'imagem-d',
						'type' => 'file',
						'preview_size' => [200, 200],
						
						'desc' => 'Lembre-se de sempre colocar a imagem no menor tamanho de arquivo possível, de preferência a JPG. Quanto menor o tamanho do arquivo, mais rápido o carregamento do site.',
						
						'options' => [
							'url' => false,
						],
						
						]);




}

// --------------------------FIM DA PAGINA DIARY----------------------------
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
add_action('init', 'custom_post_type_personal');



function custom_post_type_work() {
	register_post_type('work', array(
		'label' => 'Work',
		'description' => 'Work',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'work', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Work',
			'singular_name' => 'Work',
			'menu_name' => 'Work',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Trabalho (Work)',
			'edit' => 'Editar',
			'edit_item' => 'Editar Work',
			'new_item' => 'Novo Work',
			'view' => 'Ver Work',
			'view_item' => 'Ver Work',
			'search_items' => 'Procurar Trabalho',
			'not_found' => 'Nenhum Trabalho Encontrado',
			'not_found_in_trash' => 'Nenhum Trabalho Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_work');


function custom_post_type_diary() {
	register_post_type('diary', array(
		'label' => 'Diary',
		'description' => 'Diary',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'diary', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Diary',
			'singular_name' => 'Diary',
			'menu_name' => 'Diary',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Trabalho (Diary)',
			'edit' => 'Editar',
			'edit_item' => 'Editar Diary',
			'new_item' => 'Novo Diary',
			'view' => 'Ver Diary',
			'view_item' => 'Ver Diary',
			'search_items' => 'Procurar Trabalho',
			'not_found' => 'Nenhum Trabalho Encontrado',
			'not_found_in_trash' => 'Nenhum Trabalho Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_diary');

?>


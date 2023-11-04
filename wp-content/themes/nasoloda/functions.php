<?php echo get_the_content(); ?>
<?php echo get_the_excerpt(); ?>
<?php




/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @global bool       $is_IE
 * @global WP_Scripts $wp_scripts
 *
 * @return void
 */
function twenty_twenty_one_scripts() {
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts;
	/*if ( $is_IE ) {
		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
		wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get( 'Version' ) );
	} else {
		// If not IE, use the standard stylesheet.
		wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	}*/

	// RTL styles.
	//wp_style_add_data( 'twenty-twenty-one-style', 'rtl', 'replace' );

	// Print styles.
	//wp_enqueue_style( 'twenty-twenty-one-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );


	// Register the IE11 polyfill file.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills-asset',
		get_template_directory_uri() . '/assets/js/polyfills.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Register the IE11 polyfill loader.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills',
		null,
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_add_inline_script(
		'twenty-twenty-one-ie11-polyfills',
		wp_get_script_polyfill(
			$wp_scripts,
			array(
				'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'twenty-twenty-one-ie11-polyfills-asset',
			)
		)
	);



}
add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_scripts' );

/**
 * Enqueues block editor script.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_block_editor_script() {

	wp_enqueue_script( 'twentytwentyone-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}

add_action( 'enqueue_block_editor_assets', 'twentytwentyone_block_editor_script' );

/**
 * Fixes skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @since Twenty Twenty-One 1.0
 * @deprecated Twenty Twenty-One 1.9 Removed from wp_print_footer_scripts action.
 *
 * @link https://git.io/vWdr2
 */
function twenty_twenty_one_skip_link_focus_fix() {

	// If SCRIPT_DEBUG is defined and true, print the unminified file.
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		echo '<script>';
		include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
		echo '</script>';
	} else {
		// The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
		?>
		<script>
		/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",(function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())}),!1);
		</script>
		<?php
	}
}

/**
 * Enqueues non-latin language styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twenty_twenty_one_non_latin_languages() {
	$custom_css = twenty_twenty_one_get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'twenty-twenty-one-style', $custom_css );
	}
}
add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_non_latin_languages' );

// SVG Icons class.
require get_template_directory() . '/classes/class-twenty-twenty-one-svg-icons.php';

// Custom color classes.
require get_template_directory() . '/classes/class-twenty-twenty-one-custom-colors.php';
new Twenty_Twenty_One_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-twenty-twenty-one-customize.php';
new Twenty_Twenty_One_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
require_once get_template_directory() . '/classes/class-twenty-twenty-one-dark-mode.php';
new Twenty_Twenty_One_Dark_Mode();

/**
 * Enqueues scripts for the customizer preview.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_customize_preview_init() {
	wp_enqueue_script(
		'twentytwentyone-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'twentytwentyone-customize-preview',
		get_theme_file_uri( '/assets/js/customize-preview.js' ),
		array( 'customize-preview', 'customize-selective-refresh', 'jquery', 'twentytwentyone-customize-helpers' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_preview_init', 'twentytwentyone_customize_preview_init' );

/**
 * Enqueues scripts for the customizer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_customize_controls_enqueue_scripts() {

	wp_enqueue_script(
		'twentytwentyone-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'twentytwentyone_customize_controls_enqueue_scripts' );

/**
 * Calculates classes for the main <html> element.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_the_html_classes() {
	/**
	 * Filters the classes for the main <html> element.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$classes = apply_filters( 'twentytwentyone_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

/**
 * Adds "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_add_ie_class() {
	?>
	<script>
	if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
		document.body.classList.add( 'is-IE' );
	}
	</script>
	<?php
}
add_action( 'wp_footer', 'twentytwentyone_add_ie_class' );
/*
remove_filter ('the_exceprt', 'wpautop');
remove_filter ('the_content', 'wpautop');
remove_filter('term_description','wpautop');*/
add_filter('wpcf7_autop_or_not', '__return_false');



if ( ! function_exists( 'wp_get_list_item_separator' ) ) :
	/**
	 * Retrieves the list item separator based on the locale.
	 *
	 * Added for backward compatibility to support pre-6.0.0 WordPress versions.
	 *
	 * @since 6.0.0
	 */
	function wp_get_list_item_separator() {
		/* translators: Used between list items, there is a space after the comma. */
		return __( ', ', 'twentytwentyone' );
	}
endif;


add_action('wpcf7_mail_sent', function ($cf7) {
	
	$wpcf7 = WPCF7_ContactForm::get_current();
	$submission = WPCF7_Submission::get_instance();
	//Below statement will return all data submitted by form.
	$data = $submission->get_posted_data();
	$txt = '<b>' . $cf7->title . '</b>' . "%0A";
	if(isset($data['username']) && !empty($data['username'])){
		$txt .= "Ім'я: " . strip_tags(trim(urlencode($data['username']))) . "%0A";
	}
	if (isset($data['phone']) && !empty($data['phone'])) {
		$txt .= "Телефон: " . strip_tags(trim(urlencode($data['phone']))) . "%0A";
	}

	if (isset($data['email']) && !empty($data['email'])) {
		$txt .= "Пошта: " . strip_tags(trim(urlencode($data['email']))) . "%0A";
	}

	if (isset($data['select'][0]) && !empty($data['select'][0])) {
		$txt .= "Отримати каталог на: " . strip_tags(trim(urlencode($data['select'][0]))) . "%0A";
	}
	if (isset($data['message']) && !empty($data['message'])) {
		$txt .= "Повідомлення: " . strip_tags(trim(urlencode($data['message']))) . "%0A";
	}
	if($txt){
		sendTelegram($txt);
	}
	write_log($data);
	write_log($cf7);
});

function write_log( $message): void {
	file_put_contents("log.file", date('Y-m-d H:i:s') . ' - ' . print_r($message, true) . "\n", FILE_APPEND);
}




function sendTelegram($txt){

	// Токен
	//const TOKEN = '6024137895:AAEUHi1MLBvXxa05qyVkIdMomqRWuco6exU'; - бот №1
	$token = '6501371678:AAGVh68vMda0BX_7---hh_SbjF9WuVjk7ro';

	// ID чата
	//const CHATID = '-1001922578470'; - бот №1
	$chatid = '-1001974460578';

	$url = 'https://api.telegram.org/bot' . $token . '/sendMessage?chat_id=' . $chatid . '&parse_mode=html&text=' . $txt;

	write_log($url);

	$textSendStatus = @file_get_contents($url);
	
	write_log(json_decode($textSendStatus));

	if (isset(json_decode($textSendStatus)->{'ok'}) && json_decode($textSendStatus)->{'ok'}) {
		if (!empty($_FILES['files']['tmp_name'])) {

			$urlFile =  "https://api.telegram.org/bot" . TOKEN . "/sendMediaGroup";

			// Путь загрузки файлов
			$path = $_SERVER['DOCUMENT_ROOT'] . '/telegramform/tmp/';

			// Загрузка файла и вывод сообщения
			$mediaData = [];
			$postContent = [
				'chat_id' => CHATID,
			];

			for ($ct = 0; $ct < count($_FILES['files']['tmp_name']); $ct++) {
				if ($_FILES['files']['name'][$ct] && @copy($_FILES['files']['tmp_name'][$ct], $path . $_FILES['files']['name'][$ct])) {
					if ($_FILES['files']['size'][$ct] < $size && in_array($_FILES['files']['type'][$ct], $types)) {
						$filePath = $path . $_FILES['files']['name'][$ct];
						$postContent[$_FILES['files']['name'][$ct]] = new CURLFile(realpath($filePath));
						$mediaData[] = ['type' => 'document', 'media' => 'attach://' . $_FILES['files']['name'][$ct]];
					}
				}
			}

			$postContent['media'] = json_encode($mediaData);

			$curl = curl_init();
			curl_setopt($curl, CURLOPT_HTTPHEADER, ["Content-Type:multipart/form-data"]);
			curl_setopt($curl, CURLOPT_URL, $urlFile);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $postContent);
			$fileSendStatus = curl_exec($curl);
			curl_close($curl);
			$files = glob($path . '*');
			foreach ($files as $file) {
				if (is_file($file))
					unlink($file);
			}
		}
		//echo json_encode('SUCCESS');
	} else {
		//echo json_encode('ERR');
		// 
		// echo json_decode($textSendStatus);
	}
}

add_filter('acf/settings/remove_wp_meta_box', '__return_false');


add_action( 'admin_menu', 'remove_admin_menus' );
function remove_admin_menus(){
	global $menu;

	$unset_titles = [
		 __( 'Dashboard' ),
		// __( 'Posts' ),
		 __( 'Media' ),
		 __( 'Links' ),
		//__( 'Pages' ),
		__( 'Appearance' ),
		__( 'Tools' ),
		//__( 'Users' ),
		__( 'Settings' ),
		__( 'Comments' ),
		__( 'Plugins' ),
	];

	end( $menu );
	while( prev( $menu ) ){

		$value = explode( ' ', $menu[ key( $menu ) ][0] );
		$title = $value[0] ?: '';

		if( in_array( $title, $unset_titles, true ) ){
			unset( $menu[ key( $menu ) ] );
		}
	}

}

add_action('admin_menu', 'remove_admin_menu');
function remove_admin_menu()
{
 /* remove_menu_page('options-general.php'); // Настройки
  remove_menu_page('tools.php'); // Инструменты
  remove_menu_page('users.php'); // Пользователи
  remove_menu_page('plugins.php'); // Плагины
  remove_menu_page('themes.php'); // Внешний вид
  remove_menu_page('edit.php'); // Записи*/
  //remove_menu_page('upload.php'); // Медиафайлы
  /*	remove_menu_page('edit.php?post_type=page'); // Страницы
  remove_menu_page('edit-comments.php'); // Комментарии
  remove_menu_page('link-manager.php'); // Ссылки
  remove_menu_page('wpcf7'); // Contact form 7
  remove_menu_page('options-framework'); // Cherry Framework*/
  remove_menu_page('edit.php?post_type=acf-field-group'); // ACF
  /*remove_menu_page('WP-Lightbox-2'); // Плагин Lightbox 2
  remove_menu_page('index.php'); // Консоль*/
}

function remove_text_editor() {
    remove_post_type_support('page', 'editor'); // Видаляємо редактор для сторінок
}

add_action('init', 'remove_text_editor');
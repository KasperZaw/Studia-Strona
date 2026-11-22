<?php
/**
 * Motyw potomny Ziarno.
 *
 * @package Ziarno
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* Arkusz stylów motywu potomnego (dodatkowy CSS). */
add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style( 'ziarno-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	}
);
add_action(
	'after_setup_theme',
	function () {
		add_editor_style( 'style.css' );
	}
);

/* Własna kategoria wzorców bloków. */
add_action(
	'init',
	function () {
		register_block_pattern_category( 'ziarno', array( 'label' => 'Ziarno' ) );
	}
);

/*
 * Brak zewnętrznych zasobów: wyłączamy skrypt emoji, który mógłby pobierać grafiki z s.w.org.
 * Dzięki temu polityka prywatności może rzetelnie stwierdzać, że strona nie łączy się z serwisami zewnętrznymi.
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
add_filter( 'emoji_svg_url', '__return_false' );

/* Komentarze wyłączone — strona nie zbiera danych przez formularz komentarzy. */
add_filter( 'comments_open', '__return_false', 20 );
add_filter( 'pings_open', '__return_false', 20 );

/*
 * Informacja o cookies.
 * Strona nie używa cookies analitycznych ani marketingowych; baner tylko informuje.
 * Zamknięcie banera zapisuje w localStorage przeglądarki wartość „ziarno_cookie_info”.
 */
add_filter(
	'render_block_core/template-part',
	function ( $html, $block ) {
		if ( 'header' !== ( $block['attrs']['slug'] ?? '' ) ) {
			return $html;
		}

		$privacy = get_privacy_policy_url();
		ob_start();
		?>
		<div class="ziarno-cookie" id="ziarno-cookie" role="region" aria-label="Informacja o plikach cookies" hidden>
			<p>Ta strona nie używa cookies analitycznych ani reklamowych. Odwiedzającym nie zapisujemy żadnych cookies; zapamiętujemy jedynie (w pamięci przeglądarki), że ta informacja została zamknięta. Szczegóły w <a href="<?php echo esc_url( $privacy ); ?>">polityce prywatności</a>.</p>
			<button type="button" id="ziarno-cookie-ok">Rozumiem</button>
		</div>
		<script>
		( function () {
			var box = document.getElementById( 'ziarno-cookie' );
			var key = 'ziarno_cookie_info';
			var seen = false;
			try { seen = window.localStorage.getItem( key ) === '1'; } catch ( e ) {}
			if ( ! seen ) { box.hidden = false; }
			document.getElementById( 'ziarno-cookie-ok' ).addEventListener( 'click', function () {
				try { window.localStorage.setItem( key, '1' ); } catch ( e ) {}
				box.hidden = true;
			} );
		} )();
		</script>
		<?php
		return $html . ob_get_clean();
	},
	10,
	2
);

/* Opis meta (SEO) z zajawki strony. */
add_action( 'init', function () { add_post_type_support( 'page', 'excerpt' ); } );
add_action(
	'wp_head',
	function () {
		$desc = is_singular() ? get_the_excerpt() : get_bloginfo( 'description' );
		if ( $desc ) {
			echo '<meta name="description" content="' . esc_attr( wp_strip_all_tags( $desc ) ) . '">' . "\n";
		}
	},
	1
);

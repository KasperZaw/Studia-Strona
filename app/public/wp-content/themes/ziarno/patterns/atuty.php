<?php
/**
 * Title: Ziarno — trzy atuty z ikonami
 * Slug: ziarno/atuty
 * Categories: ziarno, services
 * Description: Nagłówek sekcji i trzy kolumny z ikoną, tytułem i opisem.
 */
$icons = array(
	'ziarno'    => esc_url( get_theme_file_uri( 'assets/icons/ziarno.svg' ) ),
	'filizanka' => esc_url( get_theme_file_uri( 'assets/icons/filizanka.svg' ) ),
	'paczka'    => esc_url( get_theme_file_uri( 'assets/icons/paczka.svg' ) ),
);
$items = array(
	array( 'ziarno', 'Ziarno z pewnego źródła', 'Kupujemy kawę bezpośrednio od małych farm w Etiopii, Kolumbii i Brazylii. Wiemy, kto ją uprawia.' ),
	array( 'filizanka', 'Palone co tydzień', 'Palimy w partiach po 5 kg, dzięki czemu każda paczka trafia do Ciebie świeża i pełna aromatu.' ),
	array( 'paczka', 'Szybka wysyłka', 'Zamówienia złożone do czwartku wysyłamy w piątek. Paczki pakujemy w torby nadające się do recyklingu.' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">Dlaczego Ziarno?</h2>
<!-- /wp:heading -->
<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--50)">
<?php foreach ( $items as $item ) : ?>
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"width":"56px","height":"56px","sizeSlug":"full","className":"ziarno-icon"} -->
<figure class="wp-block-image size-full is-resized ziarno-icon"><img src="<?php echo $icons[ $item[0] ]; ?>" alt="" style="width:56px;height:56px"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $item[1] ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html( $item[2] ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<?php endforeach; ?>
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

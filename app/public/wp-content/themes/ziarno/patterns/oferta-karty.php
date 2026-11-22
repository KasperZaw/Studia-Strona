<?php
/**
 * Title: Ziarno — karty produktów
 * Slug: ziarno/oferta-karty
 * Categories: ziarno, shop
 * Description: Trzy karty kaw ze zdjęciem, opisem i ceną.
 */
$cards = array(
	array( 'ziarna.jpg', 'Palone ziarna kawy w białej filiżance', 'Etiopia Yirgacheffe', 'Jasne palenie. Nuty jaśminu, bergamotki i moreli. Do przelewu i aeropressu.', '54 zł / 250 g' ),
	array( 'zielona.jpg', 'Zbliżenie na zielone, niepalone ziarna kawy arabika', 'Kolumbia Huila', 'Średnie palenie. Czekolada mleczna, karmel i czerwone jabłko. Uniwersalna.', '49 zł / 250 g' ),
	array( 'latte.jpg', 'Filiżanka latte ze wzorem łabędzia z mlecznej pianki, trzymana przez baristę przy ekspresie', 'Brazylia Cerrado — espresso', 'Ciemniejsze palenie. Orzechy laskowe, kakao, niska kwasowość. Świetna z mlekiem.', '45 zł / 250 g' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"accent-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">Nasze kawy</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Stała selekcja trzech kaw, uzupełniana o sezonowe mikroloty.</p>
<!-- /wp:paragraph -->
<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--50)">
<?php foreach ( $cards as $c ) : ?>
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"className":"ziarno-card","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"accent-5","layout":{"type":"default"}} -->
<div class="wp-block-group ziarno-card has-accent-5-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--40)">
<!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"full"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $c[0] ) ); ?>" alt="<?php echo esc_attr( $c[1] ); ?>" style="aspect-ratio:3/2;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $c[2] ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html( $c[3] ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ziarno-price"} -->
<p class="ziarno-price"><?php echo esc_html( $c[4] ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<?php endforeach; ?>
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

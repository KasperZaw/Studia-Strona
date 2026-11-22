<?php
/**
 * Title: Ziarno — tekst ze zdjęciem
 * Slug: ziarno/tekst-obraz
 * Categories: ziarno, about
 * Description: Dwie kolumny: zdjęcie palarni i krótki tekst o firmie z przyciskiem.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","className":"ziarno-round"} -->
<figure class="wp-block-image size-full ziarno-round"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/palarnia.jpg' ) ); ?>" alt="Grupa osób w czepkach ochronnych przy dużym piecu do palenia kawy w hali palarni" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size">Od zielonego ziarna do Twojej filiżanki</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Ziarno to mała palarnia założona przez dwoje baristów. Każdą partię kawy najpierw testujemy, potem dobieramy profil palenia, a na końcu sprawdzamy smak w naszej kawiarni.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>Organizujemy też warsztaty parzenia kawy dla domowych entuzjastów i firm.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/o-nas/' ) ); ?>">Więcej o nas</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

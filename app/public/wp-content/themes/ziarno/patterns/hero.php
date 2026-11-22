<?php
/**
 * Title: Ziarno — sekcja powitalna (hero)
 * Slug: ziarno/hero
 * Categories: ziarno, banner
 * Description: Duży nagłówek strony głównej z opisem, przyciskami i zdjęciem.
 */
$img = esc_url( get_theme_file_uri( 'assets/images/ziarna.jpg' ) );
?>
<!-- wp:group {"align":"full","className":"ziarno-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"accent-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ziarno-hero has-accent-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"textColor":"accent-1","fontSize":"small"} -->
<p class="has-accent-1-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase">Palarnia kawy speciality</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size">Świeżo palona kawa prosto z Warszawy</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">Wybieramy ziarno od sprawdzonych farm, palimy je w małych partiach i wysyłamy w ciągu 48 godzin od wypalenia.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/oferta/' ) ); ?>">Zobacz ofertę</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline","textColor":"contrast"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-contrast-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/o-nas/' ) ); ?>">Poznaj nas</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","className":"ziarno-round"} -->
<figure class="wp-block-image size-full ziarno-round"><img src="<?php echo $img; ?>" alt="Biała filiżanka wypełniona palonymi ziarnami kawy, otoczona morzem ziaren" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

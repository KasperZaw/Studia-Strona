<?php
/**
 * Title: Ziarno — wezwanie do kontaktu
 * Slug: ziarno/cta
 * Categories: ziarno, call-to-action
 * Description: Ciemnozielony pas z nagłówkiem, tekstem i przyciskiem do strony Kontakt.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}},"heading":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"accent-3","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-accent-3-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">Zamów kawę lub zapisz się na warsztaty</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Napisz lub zadzwoń — odpowiadamy w ciągu jednego dnia roboczego.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"base","textColor":"contrast"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>">Przejdź do kontaktu</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
?>

<?php
function filtrer_elements_menu($items, $args) {
    // Vérifie si l'utilisateur est connecté
    if (!is_user_logged_in()) {
        // Filtrer les éléments du menu pour retirer celui avec la classe 'admin'
        $items = array_filter($items, function($item) {
            return !in_array('admin', $item->classes);
        });
    }
    return $items;
}

add_filter('wp_nav_menu_objects', 'filtrer_elements_menu', 10, 2);

?>

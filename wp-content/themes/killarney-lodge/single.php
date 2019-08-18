<?php
if(has_term('movies', 'category', $post)) {
    get_template_part('single-movies', 'movies');
} else {
    // use default template file single-template.php
    get_template_part('single-template');
}
?>
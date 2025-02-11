<!-- This File For Add Filter  -->

<?php
if (!defined("ABSPATH")) exit();


// Adding get_shortlink button to the editor.
add_filter(
    'get_shortlink',
    function ($shortlink) {
        return $shortlink;
    }
);



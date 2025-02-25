<?php

function Button($text, $link, $class = "btn-primary", $target = "_self")
{
    echo "<a href='$link' target='$target' class='btn $class'>$text</a>";
}

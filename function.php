<?php
function include_template($file_path, $template_data){
    $content = require($file_path);
    // var_dump($template_data);
    print $content;
}

// include_template('templates/index.php', $announcements);

// $page_content = include_template('templates/index.php', $announcements);

<?php

    $base_URL = 'http://localhost/GitHubVC/ote-ultrafast/';

    $files = array(
        'index',
        'about-us',
        'service',
    );

    foreach ($files as $file){
        $file_php = $file.'.php';
        $file_html = $file.'.html';
        $html_data = file_get_contents( $base_URL.$file_php );
        if ( file_put_contents('build/'.$file_html, $html_data) ){
            echo '<br/> created successfully. <a href=" ' . $base_URL . 'build/' . $file_html . '" target="_blank" >'.$file_html.'</a>';
        }
        
    }



 

    function full_copy( $source, $target ) {
        if ( is_dir( $source ) ) {
            @mkdir( $target );
            $d = dir( $source );
            while ( FALSE !== ( $entry = $d->read() ) ) {
                if ( $entry == '.' || $entry == '..' ) {
                    continue;
                }
                $Entry = $source . '/' . $entry; 
                if ( is_dir( $Entry ) ) {
                    full_copy( $Entry, $target . '/' . $entry );
                    continue;
                }
                copy( $Entry, $target . '/' . $entry );
            }
    
            $d->close();
        }else {
            copy( $source, $target );
        }
    }
 
     
     full_copy('js', 'build/js');
     full_copy('css', 'build/css');
     full_copy('images', 'build/images');
     full_copy('fonts', 'build/fonts');

     echo "<br/> DONE";
     
?>
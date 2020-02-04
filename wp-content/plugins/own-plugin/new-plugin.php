<?php 

/*

Plugin Name: My Own Plugin

*/

add_action('wp_head', 'taxo');


function taxo(){
    
    global $post;
    
   $term = get_terms();
    
    foreach($term as $t){
        
        $t1 = get_object_vars($t);
    }
    $names = get_the_terms($post, 'topics');
    //var_dump($names);
   // echo $names[0]->name;
    var_dump(get_bloginfo('wpurl'));
    var_dump(get_bloginfo('url'));
    echo "<br>";
    
    var_dump($post->ID);
    
    get_template_part('comment', get_post_format());
    
}




?>
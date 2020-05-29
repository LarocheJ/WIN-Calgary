<?php 

$images = [
    "https://win-calgary.com/wp-content/uploads/2020/04/house14k-0.png",
    "https://win-calgary.com/wp-content/uploads/2020/04/house14k-1.png",
    "https://win-calgary.com/wp-content/uploads/2020/04/house14k-2.png",
    "https://win-calgary.com/wp-content/uploads/2020/04/house14k-3.png",
    "https://win-calgary.com/wp-content/uploads/2020/04/house14k-4.png",
    "https://win-calgary.com/wp-content/uploads/2020/04/house14k-5.png"
];

function progression_images($images = array()) {
    extract(shortcode_atts(array(
        'image' => '5'
       ), $images));

       return "<img src=\"https://win-calgary.com/wp-content/uploads/2020/04/house14k-$image.png\" 
       alt=\"Project Haggai donation progression\" class=\"align-center-block\" />";
}
add_shortcode('progression', 'progression_images');

?>
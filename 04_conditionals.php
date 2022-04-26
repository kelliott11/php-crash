<?php
    $age = 20;

    /*
    if($age >= 18)  {
        echo 'You are old enough to vote';
    } else {
        echo 'Sorry, you are not old enough to vote';
    }
    */


    $t = date("H");

    /*
    if ($t < 12) {
        echo 'Good Morning';
    } else if($t < 17) {
        echo 'Good Afternoon';
    } else {
        echo 'Good Evening';
    }
    */

    $posts = ['First Post'];

    /*
    if (!empty($posts)) {
        echo $posts[0];
    } else {
        echo 'No Posts';
    }
    */

    // echo !empty($posts) ? $posts[0] : 'No Posts';

    //$firstPosts = !empty($posts) ? $posts[0] : 'No Posts';
    //$firstPosts = !empty($posts) ? $posts[0] : null;

    //$firstPosts = $posts[0] ?? null;
    //echo $firstPosts;

    $favColor = 'red';

    switch($favColor) {
        case 'red':
            echo 'Your favorite color is red';
            break;
        case 'blue':
            echo 'Your favorite color is blue';
            break;
        case 'green':
            echo 'Your favorite color is green';
            break;
    }


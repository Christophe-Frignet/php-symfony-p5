<?php
    $title = 'Google and Amazon sanctioned';
    $resume = '
    Google and Amazon fined a total of $163 million for violating French law, after they tracked unsuspecting visitors';
    $post = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ornare, ipsum at blandit luctus, neque sem dictum ante, vitae laoreet leo ipsum nec odio. Donec convallis ornare purus, eget placerat arcu blandit non. Nam in augue metus. Nullam condimentum massa a lectus porta porttitor. Quisque auctor malesuada diam, ac viverra arcu ullamcorper a. Nulla vitae fermentum metus. Vestibulum congue dui nec nibh venenatis, ut rhoncus nibh congue. Sed non ipsum eu nisi consequat suscipit non id felis. Nulla lorem elit, efficitur nec facilisis non, iaculis ac leo. Proin placerat ultrices dui, sed scelerisque lacus commodo ut. Praesent malesuada tortor mi, vitae ultricies erat facilisis nec. Integer elementum neque enim, vitae posuere libero efficitur a. Praesent non nisl ac est congue ultricies.

    Nulla nisi diam, placerat ac dapibus vel, ornare quis quam. Sed a justo ut diam sodales malesuada. Fusce non finibus nibh. Fusce et metus nec lectus efficitur porttitor ut eget ligula. Quisque elit elit, bibendum et ex ut, ultricies pellentesque felis. Vivamus scelerisque, elit ut rutrum sodales, dolor lacus rhoncus justo, id euismod eros nisl ut ex. Ut dapibus malesuada fringilla. Nulla fringilla vitae mauris a placerat. Phasellus et nisi et dolor commodo cursus ac sed justo. Etiam condimentum placerat accumsan. Aenean blandit ultrices libero at laoreet. Quisque libero purus, placerat at quam et, ultricies aliquam quam. Vestibulum mi tellus, ornare at erat vitae, congue consectetur dolor. Curabitur vestibulum diam justo, nec molestie lacus maximus at.';
?>

<section id="update-post">
    <h1>Update Post</h1>
 
    <form action="" method="post">
        <fieldset>
            <label for="title">Title</label><br>
            <textarea name="title" id="title"><?= $title ?></textarea><br>
            <label for="resume">Resume</label><br>
            <textarea name="resume" id="resume"><?= $resume ?></textarea><br>
            <label for="post">Post</label><br>
            <textarea name="post" id="post"><?= $post ?></textarea><br>
            <input type="submit" value="Update">
        </fieldset>
    </form>

</section> 
<?php
/* 
Template name: About us */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>New document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css<?php echo '?' . filemtime(get_stylesheet_directory() . '/style.css'); ?>" />


    <style></style>
</head>

<body>
    <?php get_header(); ?>
    <main class="main">
        <div class="main__content">
            <h1 class="main__title">
                <?php the_field('page_title'); ?>
            </h1>
            <p class="main__paragraph">
                <?php the_field('page_paragraph'); ?>
            </p>
        </div>

    </main>
    <?php get_footer(); ?>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Scripts -->
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/script.js <?php echo '?' . filemtime(get_stylesheet_directory() . '/assets/js/script.js'); ?>"></script>

</body>

</html>
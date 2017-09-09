<!DOCTYPE html>
<html>
    <head>
        <title>Demo mvc php application</title>
        <link rel="stylesheet" href="/demo/content/site.css">
    </head>
    <body>
        <header>
            <a href='?controller=account&action=index'>Home</a>
            <a href='?controller=news&action=index'>News</a>
        </header>
        <section class="wrapper">

        </section>

        <?php require_once('routers.php'); ?>

        <footer>
            Copyright
        </footer>

        <script type="text/javascript" src="/demo/scripts/libs/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="/demo/scripts/main.js"></script>
    </body>
<html>

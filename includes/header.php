<!DOCTYPE html>
<html lang="en">
<?php

if (isset($home)) { $titol="code & design & plus";}
if (isset($howto)) { $titol="how to";}
if (isset($resources)) { $titol="resources";}
if (isset($snippets)) { $titol="snippets";}
if (isset($aboutme)) { $titol="about me";}

?>
<head>
    <title>{ac} alexander castelló / <?php echo($titol); ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is just a wireframe">


    <link async rel="stylesheet" as="style" type="text/css" href="./css/2/style2-min.css">

    <link async rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" >

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />

    <link async rel="preload" as="font" type="font/woff2" href="https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752GT8G.woff2" crossorigin="anonymous" onload="this.rel='font'">

    <link async rel="preload" as="font" type="font/woff2"
        href="https://fonts.gstatic.com/s/robotoslab/v13/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjojISmb2Rj.woff2"
        crossorigin="anonymous" onload="this.rel='font'">

    <link async rel="preload" as="font" type="font/woff2"
        href="https://fonts.gstatic.com/s/nunitosans/v6/pe0qMImSLYBIv1o4X1M8cce9I9s.woff2" crossorigin="anonymous"
        onload="this.rel='font'">

    <link async rel="preload" as="font" type="font/woff2"
        href="https://fonts.gstatic.com/s/notosansjp/v28/-F62fjtqLzI2JPCgQBnw7HFow2oe2EcP5pp0erwTqsSWs9Jezazjcb4.118.woff2"
        crossorigin="anonymous" onload="this.rel='font'">

    <link async rel="preload" as="font" type="font/woff2"
        href="https://fonts.gstatic.com/s/notosansjp/v28/-F62fjtqLzI2JPCgQBnw7HFow2oe2EcP5pp0erwTqsSWs9Jezazjcb4.119.woff2"
        crossorigin="anonymous" onload="this.rel='font'">

    <!-- <link async rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400%7CNunito+Sans:400%7COswald:200,400,700%7CRoboto+Slab:400"  onload="this.rel='stylesheet'"> -->

    <link async rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Nunito+Sans&family=Oswald:wght@200;400;700&family=Roboto+Slab&display=swap&subset=latin-ext"  onload="this.rel='stylesheet'">

    <!-- FONT AWESOME -->
    <link rel="preconnect" href="https://kit.fontawesome.com">

    <!-- <link async rel="preload" as="script" type="text/javascript" href="https://kit.fontawesome.com/f5043cec08.js" crossorigin="anonymous"> -->

    <link async rel="preload" as="font" type="font/woff2"
        href="https://ka-f.fontawesome.com/releases/v5.15.2/webfonts/free-fa-solid-900.woff2" crossorigin="anonymous"
        onload="this.rel='font'">

    <link async rel="preload" as="font" type="font/woff2"
        href="https://ka-f.fontawesome.com/releases/v5.15.2/webfonts/free-fa-brands-400.woff2" crossorigin="anonymous"
        onload="this.rel='font'">

    <link async rel="preload" as="style" type="text/css"
        href="https://ka-f.fontawesome.com/releases/v5.15.2/css/free.min.css?token=f5043cec08" crossorigin="anonymous"
        onload="this.rel='stylesheet';">

    <link async rel="preload" as="style" type="text/css"
        href="https://ka-f.fontawesome.com/releases/v5.15.2/css/free-v4-shims.min.css?token=f5043cec08"
        crossorigin="anonymous" onload="this.rel='stylesheet';">

    <link async rel="preload" as="style" type="text/css"
        href="https://ka-f.fontawesome.com/releases/v5.15.2/css/free-v4-font-face.min.css?token=f5043cec08"
        crossorigin="anonymous" onload="this.rel='stylesheet';">




    <!-- PRELOADING IMAGES -->
    <!-- common images -->
    <link async rel="preload" as="image" href="./imgs/bg/vecto-bg.min.svg" type="image/svg+xml"
        onload="this.rel='image'">


    <!--
    <link rel="preload" href="css/2/estructura2-min.css" as="style">
    <link rel="preload" href="css/2/media2-min.css" as="style"> -->


    <style>
        #wrap {
            display: none;

            <?php if($_SERVER["REQUEST_URI"]=="/"|| $_SERVER["REQUEST_URI"]=="/wireframe/"|| $_SERVER["REQUEST_URI"]=="/wireframe/index.php") {
                echo("grid-template-rows: auto auto auto 1fr auto;");
            }

            ?>
        }
    </style>

</head>

<body>
    <div id="wrap">
        <header>
            <h1 id="logo"><a href="./" alt="home">{ac} alexander castelló&nbsp;/</a><span class="tag midcolor"><?php echo($titol); ?></span></h1>
            <div id="social"><a href="#" title="Github"><i class=" fab fa-github"></i></a><a href="#"
                    title="Linkedin"><i class="fab fa-linkedin-in"></i></a><a href="#" title="email"><i
                        class="fas fa-at"></i></a></div>
        </header>
        <nav>
            <ul>
                <li><a href="./" class="<?php echo(isset($home)?'selected':'') ?>" role="button">Home</a></li>
                <li><a href="how-to.php" class="<?php echo(isset($howto)?'selected':'') ?>" role="button">How to</a>
                </li>
                <li><a href="resources.php" class="<?php echo(isset($resources)?'selected':'') ?>"
                        role="button">Resources</a></li>
                <li><a href="snippets.php" class="<?php echo(isset($snippets)?'selected':'') ?>"
                        role="button">Snippets</a></li>
                <li><a href="about-me.php" class="<?php echo(isset($aboutme)?'selected':'') ?>" role="button">About
                        me</a></li>
            </ul>
        </nav>

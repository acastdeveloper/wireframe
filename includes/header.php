<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is just a wireframe">
    <title>{ac} alexander castelló / code & design & plus</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- PRECONNECTING AND PRELOADING GOOGLEFONTS FILES -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />

    <link rel="preload" as="font" type="font/woff2"  href="https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752GT8G.woff2" crossorigin>
    <link rel="preload" as="font" type="font/woff2" href="https://fonts.gstatic.com/s/notosansjp/v28/-F62fjtqLzI2JPCgQBnw7HFow2oe2EcP5pp0erwTqsSWs9Jezazjcb4.119.woff2"
        crossorigin>
    <link rel="preload" as="font" type="font/woff2" href="https://fonts.gstatic.com/s/notosansjp/v28/-F62fjtqLzI2JPCgQBnw7HFow2oe2EcP5pp0erwTqsSWs9Jezazjcb4.118.woff2"
        crossorigin>
    <link rel="preload" as="font" type="font/woff2" href="https://fonts.gstatic.com/s/nunitosans/v6/pe03MImSLYBIv1o4X1M8cc9iB85tU1E.woff2"
        crossorigin>
    <link rel="preload" as="font" type="font/woff2" href="https://fonts.gstatic.com/s/robotoslab/v13/BngMUXZYTXPIvIBgJJSb6ufN5qU.woff2"
        crossorigin>
    <link rel="preload" as="font" type="font/woff2" href="https://fonts.gstatic.com/s/notosansjp/v28/-F6ofjtqLzI2JPCgQBnw7HFQoggPkENvl4B0ZLgOquiXidBa3qHiDcp2RQ.119.woff2"
        crossorigin>
    <link rel="preload" as="font" type="font/woff2"  href="https://fonts.gstatic.com/s/notosansjp/v28/-F6pfjtqLzI2JPCgQBnw7HFQaioq1xVxjfp_dakBof6Bs-tb3ab2FNISVac.119.woff2" crossorigin>
    <link rel="preload" as="font" type="font/woff2" href="https://fonts.gstatic.com/s/nunitosans/v6/pe03MImSLYBIv1o4X1M8cc9yAs5tU1E.woff2" type="font/woff2" crossorigin>
    <link rel="preload" as="font" href="https://fonts.gstatic.com/s/nunitosans/v6/pe03MImSLYBIv1o4X1M8cc8WAc5tU1E.woff2" type="font/woff2" crossorigin>
    <link rel="preload" as="font" type="font/woff2"  href="https://fonts.gstatic.com/s/nunitosans/v6/pe0qMImSLYBIv1o4X1M8cce9I9s.woff2"
        crossorigin>
        <link rel="preload" href="https://fonts.gstatic.com/s/notosansjp/v28/-F6pfjtqLzI2JPCgQBnw7HFQMisq1xVxjfp_dakBof6Bs-tb3ab2FNISVac.119.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="https://fonts.gstatic.com/s/notosansjp/v28/-F6pfjtqLzI2JPCgQBnw7HFQei0q1xVxjfp_dakBof6Bs-tb3ab2FNISVac.119.woff2" as="font" type="font/woff2"  crossorigin>



    <!-- PRECONNECTING AND PRELOADING FONTAWESOME FILES -->
    <link rel="preconnect" href="https://kit.fontawesome.com" />
    <link rel="preload" as="font" type="font/woff2" href="https://ka-f.fontawesome.com/releases/v5.15.2/webfonts/free-fa-solid-900.woff2"
        crossorigin>
    <link rel="preload" as="font" type="font/woff2" href="https://ka-f.fontawesome.com/releases/v5.15.2/webfonts/free-fa-brands-400.woff2"
        crossorigin>




<!-- PRELOADING OWN COMMON DECORATION IMAGES FOR ALL PAGES -->
    <link rel="preload" href="imgs/bg/vecto-bg.svg" as="image">



    <link rel="stylesheet" href="./css/2/style2.css">
    <link rel="stylesheet" href="./css/2/estructura2-min.css" async>
    <link rel="stylesheet" href="./css/2/media2-min.css" async>
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
            <h1 id="logo"><a href="./" alt="home">{ac} alexander castelló / </a><span class="tag midcolor">Code &
                    Design & Plus</span></h1>
            <div id="social"><a href="#"><i class=" fab fa-github"></i></a><a href="#"><i
                        class="fab fa-linkedin-in"></i></a><a href="#"><i class="fas fa-at"></i></a></div>
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

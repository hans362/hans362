<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Hans362</title>
    <meta http-equiv="x-dns-prefetch-control " content="on">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1"/>
    <meta name="description" content="Hans362 's Home | Personal HomePage | Hans362 的个人主页">
    <link rel="apple-touch-icon" sizes="180x180" href="https://cdn.jsdelivr.net/gh/hans362/image-hosting@master/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://cdn.jsdelivr.net/gh/hans362/image-hosting@master/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://cdn.jsdelivr.net/gh/hans362/image-hosting@master/favicon-16x16.png">
    <link rel="manifest" href="https://cdn.jsdelivr.net/gh/hans362/image-hosting@master/site.webmanifest">
    <link rel="mask-icon" href="https://cdn.jsdelivr.net/gh/hans362/image-hosting@master/safari-pinned-tab.svg" color="#6b6b6b">
    <link rel="shortcut icon" href="https://cdn.jsdelivr.net/gh/hans362/image-hosting@master/favicon.ico">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-config" content="https://cdn.jsdelivr.net/gh/hans362/image-hosting@master/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/gh/Dreamer-Paul/Sweet@master/static/paul.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body style="background-image: url('https://cdn.jsdelivr.net/gh/Dreamer-Paul/Sweet@master/static/background-3.jpg')">

<div id="loader">
    <figure>
        <img src="https://cdn.jsdelivr.net/gh/hans362/image-hosting@master/2021/03/13/1368931.jpg"/>
    </figure>
</div>

<main>
    <div class="content">
        <figure class="me">
            <img class="avatar" src="https://cdn.jsdelivr.net/gh/hans362/image-hosting@master/2021/03/13/1368931.jpg"/>
            <h2 class="name">Hans362</h2>
        </figure>
        <section id="main" class="active">
            <a href="https://blog.hans362.cn"><i class="fa fa-wordpress"></i><span class="title">博客</span></a>
            <a href="https://twitter.com/Milk_362" target="_blank"><i class="fa fa-twitter"></i><span class="title">Twitter</span></a>
            <a href="https://t.me/hans362" target="_blank"><i class="fa fa-telegram"></i><span class="title">Telegram</span></a>
            <a href="mailto:i@hans362.cn" target="_blank"><i class="fa fa-envelope"></i><span class="title">邮箱</span></a>
            <a href="https://github.com/hans362" target="_blank"><i class="fa fa-github"></i><span class="title">GitHub</span></a>
            <a href="https://space.bilibili.com/66745436" target="_blank"><i class="fa fa-flag"></i><span class="title">哔哩哔哩</span></a>
        </section>
        <section id="articles">
<?php
error_reporting(0);

// 设置你的博客 RSS 地址（WordPress、Typecho 均可）
define("BLOG_URL", "https://blog.hans362.cn/atom.xml");

$file = simplexml_load_file(BLOG_URL) -> channel -> item;

if(isset($file)){
    for($i = 0; $i < 6; $i++){
        $timestamp = strtotime($file[$i] -> pubDate);
        $timestamp = date("y-m-d", $timestamp);

        if($file[$i]){
            echo '<a href="' . $file[$i] -> link . '" target="_blank">' .$file[$i] -> title . '<span class="meta">' . $timestamp . "</span></a>";
            echo "\n";
        }
        else{
            break;
        }
    }
}
else{
    echo "<a>博客连接失败<span class='meta'>请检查</span></a>";
}

?>
        </section>
        <section id="products">
            <a class="item" href="" target="_blank">Example<span class="meta">Example</span></a>
        </section>
        <section id="about">
            <p>待填坑<a href="" target="_blank">详细阅读</a></p>
        </section>
        <div class="actions">
            <div class="item home active">
                <i class="fa fa-star"></i>
                <span class="title">首页</span>
            </div>
            <div class="item article">
                <i class="fa fa-book"></i>
                <span class="title">文章</span>
            </div>
            <div class="item product">
                <i class="fa fa-trophy"></i>
                <span class="title">作品</span>
            </div>
            <div class="item about">
                <i class="fa fa-graduation-cap"></i>
                <span class="title">关于</span>
            </div>
        </div>
    </div>
</main>

<footer>
    <p>© 2017-<?php echo date(Y)?> By <a href="https://hans362.cn">Hans362</a> & Based on <a href="https://paugram.com">Dreamer-Paul</a>'s design.</p>
</footer>

<script src="https://cdn.jsdelivr.net/gh/Dreamer-Paul/Sweet@master/static/paul.js"></script>

</body>

</html>
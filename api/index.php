<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Hans362</title>
    <meta http-equiv="x-dns-prefetch-control " content="on">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1" />
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
    <link href="https://cdn.jsdelivr.net/gh/Dreamer-Paul/Sweet@266eedd/static/paul.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.2/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body style="background-image: url('https://cdn.jsdelivr.net/gh/hans362/image-hosting@master/2021/03/14/59696611.jpg')">

    <div id="loader">
        <figure>
            <img src="https://cdn.jsdelivr.net/gh/hans362/image-hosting@master/2021/03/13/1368931.jpg" />
        </figure>
    </div>

    <main>
        <div class="content">
            <figure class="me">
                <img class="avatar" src="https://cdn.jsdelivr.net/gh/hans362/image-hosting@master/2021/03/13/1368931.jpg" />
                <h2 class="name" style="font-weight: normal;">Hans362</h2>
            </figure>
            <section id="main" class="active">
                <a href="https://blog.hans362.cn" target="_blank"><i class="fas fa-blog"></i><span class="title">博客</span></a>
                <a href="https://lab.hans362.cn" target="_blank"><i class="fas fa-flask"></i><span class="title">实验室</span></a>
                <a href="https://status.hans362.cn" target="_blank"><i class="fas fa-check-circle"></i><span class="title">服务状态</span></a>
                <a href="https://t.me/hans362" target="_blank"><i class="fab fa-telegram"></i><span class="title">Telegram</span></a>
                <a href="https://t.me/Hans362sTeleblog" target="_blank"><i class="fab fa-telegram-plane"></i><span class="title">Teleblog</span></a>
                <a href="https://twitter.com/Milk_362" target="_blank"><i class="fab fa-twitter"></i><span class="title">Twitter</span></a>
                <a href="https://github.com/hans362" target="_blank"><i class="fab fa-github"></i><span class="title">GitHub</span></a>
                <a href="https://space.bilibili.com/66745436" target="_blank"><i class="fas fa-flag"></i><span class="title">哔哩哔哩</span></a>
                <a href="mailto:i@hans362.cn" target="_blank"><i class="fas fa-envelope"></i><span class="title">邮箱</span></a>
            </section>
            <section id="articles">
                <?php
                error_reporting(0);
                // 设置你的博客 RSS 地址（Hexo Only）
                define("BLOG_URL", "https://blog.hans362.cn/atom.xml");
                $file = simplexml_load_file(BLOG_URL);
                if (isset($file)) {
                    for ($i = 0; $i < 6; $i++) {
                        $timestamp = strtotime($file->children()->entry[$i]->published);
                        $timestamp = date("y-m-d", $timestamp);
                        if ($file[$i] && !empty($file->children()->entry[$i]->children()->title)) {
                            echo '<a href="' . $file->children()->entry[$i]->children()->link->attributes()['href'] . '" target="_blank">' . $file->children()->entry[$i]->children()->title . '<span class="meta">' . $timestamp . "</span></a>";
                            echo "\n";
                        } else {
                            break;
                        }
                    }
                } else {
                    echo "<a>博客连接失败<span class='meta'>请检查服务状态</span></a>";
                }
                ?>
                <p><a href="https://blog.hans362.cn" target="_blank" style="color: #3498db;">> Visit My Blog...</a></p>
            </section>
            <section id="products">
                <?php
                $json = file_get_contents("https://gh-pinned-repos.now.sh/?username=hans362");
                $repos = json_decode($json);
                for ($i = 0; $i < 6; $i++) {
                    if ($repos[$i]->owner != "hans362") {
                        echo '<a class="item" href="https://github.com/' . $repos[$i]->owner . '/' . $repos[$i]->repo . '" target="_blank">' . $repos[$i]->owner . '/' . $repos[$i]->repo . '<span class="meta">' . $repos[$i]->language . '</span></a>';
                    } else {
                        echo '<a class="item" href="https://github.com/hans362/' . $repos[$i]->repo . '" target="_blank">' . $repos[$i]->repo . '<span class="meta">' . $repos[$i]->language . '</span></a>';
                    }
                }
                ?>
                <p><a href="https://github.com/hans362/repositories" target="_blank" style="color: #3498db;">> Visit My GitHub...</a></p>
            </section>
            <section id="about">
                <p>
                    <?php
                    $tags = "男高中生 / 现居上海 / 蒟蒻 / 轻度社恐 / 死宅 / 退役OIer / 括号不换行 / 骗分过样例 / 暴力出不了奇迹 / 文化课苦手 / 物地生选手 / 摸鱼小能手 / Minecraft玩家 / 伪二刺猿 / Google狂热粉 / VSCode忠粉 / 熟练掌握 / C/C++ / PHP / Node.JS / Python / HTML / CSS / 的拼写";
                    $tagList = explode(" / ", $tags);
                    foreach ($tagList as $tag) {
                        echo '<img src="https://img.shields.io/badge/-' . $tag . '-blue?style=flat-square"> ';
                    }
                    ?>
                </p>
                <p><a href="https://blog.hans362.cn/about" target="_blank" style="color: #3498db;">> Read More On Blog...</a></p>
            </section>
            <div class="actions">
                <div class="item home active">
                    <i class="fas fa-star"></i>
                    <span class="title">首页</span>
                </div>
                <div class="item article">
                    <i class="fas fa-book"></i>
                    <span class="title">文章</span>
                </div>
                <div class="item product">
                    <i class="fas fa-trophy"></i>
                    <span class="title">作品</span>
                </div>
                <div class="item about">
                    <i class="fas fa-graduation-cap"></i>
                    <span class="title">关于</span>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>© 2017-2021 By <a href="https://hans362.cn">Hans362</a> & Based on <a href="https://paugram.com">Dreamer-Paul</a>'s design.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/gh/Dreamer-Paul/Sweet@266eedd/static/paul.js"></script>

</body>

</html>
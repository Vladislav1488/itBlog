<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Адаптивная вёрстка сайта</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>

<body>
    <?php require_once 'includes/header.php';?>
    <div class="container">
        <div class="posts-list">
            <article id="post-1" class="post">
                <div class="post-image"><a href=""><img src="images/beer.jpg"></a></div>
                <div class="post-content">
                    <div class="category"><a href="">Дизайн</a></div>
                    <h2 class="post-title">Бухло</h2>
                    <p>Ученые долго недооценивали роль алкоголя в истории. Пришло время ее пересмотреть.</p>
                    <p>Ставь лайк, если любишь пить певко и программировать за своим суперским компом</p>
                    <div class="post-footer">
                        <a class="more-link" href="">Продолжить чтение</a>
                        <div class="post-social">
                            <a href="" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </article>
            <article id="post-2" class="post">
    <div class="post-image"><a href=""><img src="images/article pic.png"></a></div>
    <div class="post-content">
        <div class="category"><a href="">Вёрстка</a></div>
        <h2 class="post-title">Четкий код для четких пацанов</h2>
        <p>Тут типа текст</p>
        <div class="post-footer">
            <a class="more-link" href="">Продолжить чтение</a>
            <div class="post-social">
                <a href="" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="" target="_blank"><i class="fa fa-pinterest"></i></a>
            </div>
        </div>
    </div>
</article>
<article id="post-3" class="post">
    <div class="post-image"><a href=""><img src="images/hardbass.jpg"></a></div>
    <div class="post-content">
        <div class="category"><a href="">Видео</a></div>
        <h2 class="post-title">Хардбасс</h2>
        <p>Немного о хард бассе</p>
        <p></p>
        <div class="post-footer">
            <a class="more-link" href="">Продолжить чтение</a>
            <div class="post-social">
                <a href="" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="" target="_blank"><i class="fa fa-pinterest"></i></a>
            </div>
        </div>
    </div>
</article>
        </div> <!-- конец div class="posts-list"-->
        <aside>
            <div class="widget">
                <h3 class="widget-title">Категории</h3>
                <ul class="widget-category-list">
                    <li><a href="">Дизайн</a> (2)</li>
                    <li><a href="">Вёрстка</a> (5)</li>
                    <li><a href="">Видео</a> (1)</li>
                </ul>
            </div>
            <div class="widget">
                <h3 class="widget-title">Последние записи</h3>
                <ul class="widget-posts-list">
                    <li>
                        <div class="post-image-small">
                            <a href=""><img src="images/beer.png"></a>
                        </div>
                        <h4 class="widget-post-title">Бухло</h4>
                    </li>
                    <li>
                        <div class="post-image-small">
                            <a href=""><img src="images/article pic.png"></a>
                        </div>
                        <h4 class="widget-post-title">Четкий код</h4>
                    </li>
                    <li>
                        <div class="post-image-small">
                            <a href=""><img src="images/hardbass.jpg"></a>
                        </div>
                        <h4 class="widget-post-title">Хардбасс</h4>
                    </li>
                </ul>
            </div>
            <div class="widget">
                <h3 class="widget-title">Подписка на рассылку</h3>
                <form action="" method="post" id="subscribe">
                    <input type="email" name="email" placeholder="Ваш email" required>
                    <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
                </form>
            </div>
        </aside>
    </div> <!-- конец div class="container"-->
    <?php require_once 'includes/footer.php' ?>
    <script>
    $('.nav-toggle').on('click', function() {
        $('#menu').toggleClass('active');
    });
    </script>

</body>

</html>
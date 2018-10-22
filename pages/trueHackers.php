 <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Адаптивная вёрстка сайта</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/media/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>

<body>
    <?php require_once '../includes/header.php';?>
 <div class="container">
        <div class="posts-list">
            <article id="post-1" class="post">
                <div class="post-image"><a href=""><img src=""></a></div>
                <div class="post-content">
                    <div class="category"><a href="">Git  repositories</a></div>
                  
                  
                        <div class="post-social">
                            <a href="" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                 
                        <body>
    <div align="center" class="container">
        <h1 class="header">Hackers  repositories:</h1>
        <br>
        <a href="https://github.com/Vladislav1488">Mother's Hacker 1</a>
        <br><br>
        <a href="https://github.com/Maksim1212">Mother's Hacker 2</a>
        <br><br>
    </div>
</body>
                        

                </div>
            </article>
        </div>

            <?php require_once '../includes/sidebar.php'?>
  </div>
</body>

    <?php require_once '../includes/footer.php' ?>
    <script>
    $('.nav-toggle').on('click', function() {
        $('#menu').toggleClass('active');
    });
    </script>
    </html>
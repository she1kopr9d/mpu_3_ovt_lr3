<?php
$coffeeShopName = 'Аромат';
$pageTitle = "Главная — Кофейня «{$coffeeShopName}» | Коноплев А.П., гр. 251-361, лаб. 3";
$phoneNumber = '+79320512554';
$phoneNumberTitle = '+7 (932) 051-25-54';
$email = 'arseniy.konoplev@gmail.com';
$socialLinks = [
    [
        "name" => 'Telegram',
        "link" => '#',
    ],
    [
        "name" => 'ВКонтакте',
        "link" => '#',
    ],
];
$address = 'г. Москва, ул. Кофейная, д. 15';
$gallery = [
    [
        "name" => 'Интерьер кофейни',
        "link" => 'images/gallery1.png',
    ],
    [
        "name" => 'Кофейные зёрна',
        "link" => 'images/gallery2.png',
    ],
    [
        "name" => 'Бариста за работой',
        "link" => 'images/gallery3.png',
    ]
];
$positions = [
    [
        "name" => 'Эспрессо',
        "description" => 'Классический крепкий кофе из свежеобжаренных зёрен',
        "volume" => '40 мл',
        "price" => '150 руб.',
    ],
    [
        "name" => 'Капучино',
        "description" => 'Эспрессо с молочной пенкой и рисунком на поверхности',
        "volume" => '250 мл',
        "price" => '250 руб.',
    ],
    [
        "name" => 'Латте',
        "description" => 'Эспрессо с молоком и нежной пенкой, можно добавить сироп',
        "volume" => '300 мл',
        "price" => '300 руб.',
    ],
    [
        "name" => 'Фильтр-кофе',
        "description" => 'Альтернативное заваривание, раскрывает вкус сорта',
        "volume" => '300 мл',
        "price" => '200 руб.',
    ],
    [
        "name" => 'Флэт-уайт',
        "description" => 'Двойной эспрессо с тонким слоем молока',
        "volume" => '200 мл',
        "price" => '250 руб.',
    ],
    [
        "name" => 'Круассан',
        "description" => 'Свежая выпечка с маслом и миндалём',
        "volume" => '1 шт.',
        "price" => '180 руб.',
    ],
    [
        "name" => 'Чизкейк',
        "description" => 'Нежный десерт с ягодным соусом',
        "volume" => '120 г',
        "price" => '250 руб.',
    ],
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="container header__inner">
            <a href="index.php" class="logo"><?php echo $coffeeShopName; ?></a>
            <nav>
            <ul class="nav">
                <li><a href="<?php
                    $name='Главная';
                    $link='index.php';
                    $current_page=true;
                    echo $link;
                ?>"<?php
                    if ($current_page) echo ' class="active"';
                    echo '>' . $name;
                ?></a></li>

                <li><a href="<?php
                    $name='Меню'; $link='menu.php'; $current_page=false;
                    echo $link;
                ?>"<?php
                    if ($current_page) echo ' class="active"';
                    echo '>' . $name;
                ?></a></li>

                <li><a href="<?php
                    $name='Контакты'; $link='contacts.php'; $current_page=false;
                    echo $link;
                ?>"<?php
                    if ($current_page) echo ' class="active"';
                    echo '>' . $name;
                ?></a></li>
            </ul>
            </nav>
        </div>
    </header>
    <section class="hero" id="hero">
        <div class="container hero__inner">
            <div class="hero__text">
            <h1>Добро пожаловать в кофейню «Аромат»</h1>
            <p>Мы обжариваем зёрна каждую неделю и варим кофе так, как вы любите: крепкий эспрессо, нежный латте или ароматный фильтр. Заходите за чашкой хорошего настроения.</p>
            <a href="menu.php" class="btn">Смотреть меню</a>
            </div>
            <?php
            if (date('s') % 2 === 0) $photo = 'images/hero1.png';
            else $photo = 'images/hero2.png';
            echo '<img class="hero__image" src="' . $photo . '" alt="Чашка свежесваренного кофе">';
            ?>
        </div>
    </section>
    <section class="section" id="about">
        <div class="container about">
            <img class="about__image" src="images/about.png" alt="Кофейные зёрна на деревянной поверхности">
            <div class="about__text">
            <h2>О нашей кофейне</h2>
            <p>Кофейня «Аромат» открылась в 2018 году в центре города. Здесь работают бариста, которые прошли обучение в школе обжарки и знают, как раскрыть вкус каждого сорта. Мы работаем с небольшими обжарщиками и стараемся, чтобы каждая чашка была не похожа на предыдущую.</p>
            <p>В нашем зале можно поработать за ноутбуком, встретиться с друзьями или просто посидеть с книгой. По выходным проводим дегустации и рассказываем, чем отличается эфиопия от колумбии.</p>
            <ul class="features">
                <?php
                $features = [
                'Свежая обжарка зёрен каждую неделю',
                'Альтернативные способы заваривания',
                'Десерты собственного производства',
                'Уютный зал и летняя веранда',
                'Кофе с собой в фирменных стаканах',
                'Продажа зёрен домой и в офис',
                ];
                foreach ($features as $f) {
                echo '<li>' . $f . '</li>';
                }
                ?>
            </ul>
            </div>
        </div>
    </section>
    <section class="section section--gray" id="menu">
        <div class="container">
            <h2 class="section__title">Меню</h2>
            <table class="menu-table">
            <thead>
                <tr>
                <th>Позиция</th>
                <th>Описание</th>
                <th>Объём</th>
                <th>Цена</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($positions as $p) {
                    echo '<tr>';
                    echo '<td>' . $p['name'] . '</td>';
                    echo '<td>' . $p['description'] . '</td>';
                    echo '<td>' . $p['volume'] . '</td>';
                    echo '<td>' . $p['price'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
            </table>
        </div>
    </section>
    <section class="section" id="gallery">
        <div class="container">
            <h2 class="section__title">Галерея</h2>
            <div class="gallery">
                <?php foreach ($gallery as $image) { ?>
                    <img src="<?php echo $image['link']; ?>" alt="<?php echo $image['name']; ?>">
                <?php } ?>
            </div>
        </div>
    </section>
    <footer class="footer" id="contacts">
        <div class="container footer__inner">
            <div>
            <h3>Контакты</h3>
            <p><?php echo $address; ?></p>
            <p>Телефон: <a href="tel:<?php echo $phoneNumber; ?>"><?php echo $phoneNumberTitle; ?></a></p>
            <p>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
            </div>
            <div>
            <h3>Часы работы</h3>
            <p>Пн–Пт: 08:00 – 22:00</p>
            <p>Сб–Вс: 09:00 – 23:00</p>
            </div>
            <div>
            <h3>Мы в сети</h3>
                <?php
                foreach ($socialLinks as $s) {
                    echo '<p><a href="' . $s['link'] . '">' . $s['name'] . '</a></p>';
                }
                ?>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>© 2026 Кофейня «<?php echo $coffeeShopName; ?>». Все права защищены.</p>
            <p>Сформировано <?php echo date('d.m.Y \в H:i:s'); ?></p>
        </div>
    </footer>
</body>
</html>
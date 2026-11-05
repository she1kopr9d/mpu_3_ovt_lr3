<?php
$coffeeShopName = 'Аромат';
$pageTitle = "Меню — Кофейня «{$coffeeShopName}» | Коноплев А.П., гр. 251-361, лаб. 3";
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
            $name='Главная'; $link='index.php'; $current_page=false;
            echo $link;
        ?>"<?php
            if ($current_page) echo ' class="active"';
            echo '>' . $name;
        ?></a></li>

        <li><a href="<?php
            $name='Меню'; $link='menu.php'; $current_page=true;
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
      <h1>Наше меню</h1>
      <p>В карте кофейни — классические напитки на основе эспрессо, альтернативные способы заваривания и сезонные предложения. Мы обновляем меню каждые три месяца, чтобы гости могли попробовать новые сорта и сочетания. Здесь всегда есть и знакомые напитки, и что-то новое для тех, кто любит эксперименты.</p>
      <a href="#menu" class="btn">Смотреть таблицу</a>
    </div>
    <img class="hero__image" src="images/hero2.png" alt="Чашка кофе на столе">
  </div>
</section>

<section class="section" id="about">
  <div class="container about">
    <img class="about__image" src="images/about.png" alt="Приготовление кофе">
    <div class="about__text">
      <h2>Как мы готовим кофе</h2>
      <p>Каждый напиток начинается с правильно подобранного зерна. Для эспрессо мы используем смесь бразильской арабики с небольшой долей робусты — она даёт плотную крема и шоколадные ноты. Для фильтр-кофе берём моносорта: эфиопию, кению, колумбию. Разные сорта отличаются кислотностью, телом и послевкусием, и мы стараемся, чтобы каждая чашка это подчёркивала.</p>
      <p>Помол настраиваем под каждый способ заваривания: для воронки крупнее, для эспрессо мельче. Вода всегда фильтрованная, температура — 92–94 °C. Всё это влияет на вкус сильнее, чем может показаться. Бариста регулярно дегустируют новые партии и корректируют рецепты, чтобы вкус оставался стабильным.</p>
      <ul class="features">
        <?php
        $steps = [
          'Отбираем зёрна и обжариваем небольшими партиями',
          'Настраиваем помол под способ заваривания',
          'Контролируем температуру воды и время экстракции',
          'Подаём напиток в течение 5 минут после приготовления',
          'Регулярно проводим дегустации для бариста',
        ];
        foreach ($steps as $s) echo '<li>' . $s . '</li>';
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
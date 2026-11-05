<?php
$coffeeShopName = 'Аромат';
$pageTitle = "Контакты — Кофейня «{$coffeeShopName}» | Коноплев А.П., гр. 251-361, лаб. 3";
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
$contacts = [
    'Адрес: г. Москва, ул. Кофейная, д. 15',
    'Телефон: +7 (932) 051-25-54',
    'Email: arseniy.konoplev@gmail.com',
    'Telegram: @aroma_cafe',
    'ВКонтакте: vk.com/aroma_cafe',
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
            $name='Меню'; $link='menu.php'; $current_page=false;
            echo $link;
        ?>"<?php
            if ($current_page) echo ' class="active"';
            echo '>' . $name;
        ?></a></li>

        <li><a href="<?php
            $name='Контакты'; $link='contacts.php'; $current_page=true;
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
      <h1>Свяжитесь с нами</h1>
      <p>Если у вас есть вопрос по меню, бронированию столика или сотрудничеству — напишите нам. Мы читаем все сообщения и стараемся отвечать в течение рабочего дня. Для срочных вопросов лучше позвонить: администратор на месте с 8 утра и до закрытия.</p>
      <a href="#feedback" class="btn">Написать нам</a>
    </div>
    <img class="hero__image" src="images/gallery1.png" alt="Интерьер кофейни">
  </div>
</section>
<section class="section" id="about">
  <div class="container about">
    <img class="about__image" src="images/gallery2.png" alt="Кофейные зёрна">
    <div class="about__text">
      <h2>Как нас найти</h2>
      <p>Кофейня находится в центре города, в двух минутах от метро. Вход со стороны улицы, есть вывеска с логотипом. Рядом — платная парковка и велопарковка. Если заблудились — позвоните, администратор подскажет дорогу.</p>
      <p>Мы работаем без выходных. Утром здесь тихо и можно спокойно поработать, вечером — оживлённо, играет музыка. По субботам проводим дегустации, на которые можно записаться заранее по телефону или через форму ниже.</p>
      <ul class="features">
        <?php
        foreach ($contacts as $c) echo '<li>' . $c . '</li>';
        ?>
      </ul>
    </div>
  </div>
</section>

<section class="section section--gray" id="feedback">
  <div class="container">
    <h2 class="section__title">Обратная связь</h2>
    <form class="feedback-form" action="https://httpbin.org/post" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="fio">ФИО</label>
        <input type="text" id="fio" name="fullname" placeholder="Иванов Иван Иванович" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="you@example.com" required>
      </div>
      <fieldset class="form-group">
        <legend>Откуда вы узнали о нас?</legend>
        <label class="radio"><input type="radio" name="source" value="friends" required> Друзья</label>
        <label class="radio"><input type="radio" name="source" value="social"> Соцсети</label>
        <label class="radio"><input type="radio" name="source" value="walk"> Проходил мимо</label>
      </fieldset>
      <div class="form-group">
        <label for="type">Тип обращения</label>
        <select id="type" name="type" required>
          <option value="">— выберите —</option>
          <option value="complaint">Жалоба</option>
          <option value="suggestion">Предложение</option>
        </select>
      </div>
      <div class="form-group">
        <label for="message">Сообщение</label>
        <textarea id="message" name="message" rows="5" placeholder="Опишите ваш вопрос или предложение" required></textarea>
      </div>
      <div class="form-group">
        <label for="file">Вложение (необязательно)</label>
        <input type="file" id="file" name="attachment">
      </div>
      <label class="checkbox">
        <input type="checkbox" name="consent" value="yes" required>
        Даю согласие на обработку персональных данных
      </label>
      <button type="submit" class="btn">Отправить</button>
    </form>
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
      foreach ($socialLinks as $social) {
          echo '<p><a href="' . $social['link'] . '">' . $social['name'] . '</a></p>';
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
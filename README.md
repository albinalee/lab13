<p align = "center">МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ<br>
РОССИЙСКОЙ ФЕДЕРАЦИИ<br>
ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ<br>
ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ<br>
«САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</p>
<br><br><br><br><br><br>
<p align = "center">Институт естественных наук и техносферной безопасности<br>Кафедра информатики<br>Ли Альбина Тевоновна</p>
<br><br><br>
<p align = "center"><br><strong>Лабораторная работа №13. «PHP»</strong><br>01.03.02 Прикладная математика и информатика</p>
<br><br><br><br><br><br><br><br><br><br><br><br>
<p align = "right">Научный руководитель<br>
Соболев Евгений Игоревич</p>
<br><br><br>
<p align = "center">г. Южно-Сахалинск<br>2024 г.</p>
<br><br><br><br><br><br><br><br><br><br><br><br>

<h1 align = "center">Введение</h1>

<p><b>Веб-разработка</b> — процесс создания веб-сайта или веб-приложения. Основными этапами процесса являются: </p>

<ul>
<li>Проектирование сайта или веб-приложения (сбор и анализ требований, разработка технического задания, проектирование интерфейсов);</li>
<li>Создание дизайн-концепции сайта;</li>
<li>Создание страниц;</li>
<li>Программирование;</li>
<li>Оптимизация и размещение материалов сайта;</li>
<li>Тестирование и внесение корректировок;</li>
<li>Публикация проекта на хостинге;</li>
<li>Обслуживание работающего сайта.</li>
</ul>

<br>

<h1 align = "center">Цели и задачи</h1>


<p>Цель: ознакомиться со скриптовым языком PHP</p>

<p>Задачи:</p>

<ul>
<li>Изучить синтаксис PHP</li>
<li>Научиться писать скрипты для решения постановленных задач на PHP</li>
</ul>

<p></p>

<h1 align = "center">Решение</h1>

<p>Для выполнения этой лабораторной работы, я пользовалась лекционным материалом и интернет-ресурсами для поиска решений задач оформления и для поиска медиаресурсов:</p>

<ul>
<li><a href="https://www.php.net/">PHP website</a></li>
<li><a href="https://www.w3schools.com/">W3Schools</a></li>
</ul>

<p>Примеры кода:</p>
<code>$displayForm = true;
$name_1 = ""; $age_1 = ""; $city_1 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
  $name_1 = preg_replace("/[<>]/","",$_POST["name"]);
  $displayForm = false;
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["age"])) {
  $age_1 = preg_replace("/[<>]/","",$_POST["age"]);
  $displayForm = false;
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["city"])) {
  $city_1 = preg_replace("/[<>]/","",$_POST["city"]);
  $displayForm = false;
}</code>
</br></br>
<code>function checkLogin($userLogin, $userPassword) {
  $file = fopen("userinfo.txt", "r");
  if ($file) {
    while (($line = fgets($file)) !== false) {
      $arr = explode(',', trim($line));
      $savedLogin = $arr[0]; $savedPassword = $arr[1];
      if ($userLogin == $savedLogin && $userPassword == $savedPassword) {
        fclose($file);
        return "Successfully logged in";
      }
    }
    fclose($file);
    return "Access denied";
  } else {
      return "File error";
  }
}</code>
</br></br>
<code>$login = ""; $pass = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
  if(isset($_POST["login"]) && isset($_POST["password"])) {
    $login = trim(preg_replace("/[<>]/","",($_POST["login"])));
    $pass = preg_replace("/[<>]/","",$_POST["password"]);
    $result = checkLogin($login, $pass);
  }</code>
</br></br>
<code>$string = 'ab abab abab abababab abea';
$pattern = '/\b(ab)+\b/';

if (preg_match_all($pattern, $string, $matches))
  echo implode(', ', $matches[0]);
else
  echo "No matches";</code>
</br></br>
<code>$string = 'aba accca azzza wwwwa';
$pattern = '/a([^a]+)a/';
preg_match_all($pattern, $string, $matches);
$res = implode(', ', $matches[0]);
echo $res . "\n";
$res = preg_replace('/a+/', '!', $res);
echo $res;</code>
</br></br>
<h1 align = "center">Вывод</h1>
<p>В результате проделанной лабораторной работы, я познакомилась с новыми элементами языка PHP и изучила основы написания скриптов для серверов.</p>

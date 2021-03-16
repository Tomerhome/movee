<?php
require "./assets/less/lessc.inc.php";
function autoCompileLess($inputFile, $outputFile)
{
  // load the cache
  $cacheFile = $inputFile . ".cache";
  if (file_exists($cacheFile)) {
    $cache = unserialize(file_get_contents($cacheFile));
  } else {
    $cache = $inputFile;
  }
  $less = new lessc;
  $newCache = $less->cachedCompile($cache);
  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
    file_put_contents($cacheFile, serialize($newCache));
    file_put_contents($outputFile, $newCache['compiled']);
  }
}
autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Movee</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <meta name="viewport" content="width=1300px">-->
  <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />

</head>


<body>
  <div class="wrapper">
    <header>
      <div class="container">
        <a class="logo" href="">
          <img src="assets/img/logo.svg" alt="">
        </a>
        <div class="block">
          <ul id="mobile-menu">
            <li class="active"><a href="">Цены</a></li>
            <li><a href="">Автопарк</a></li>
            <li><a href="">Отзывы</a></li>
            <li><a href="">Контакты</a></li>
          </ul>
          <a href="tel:88000801213" class="tel">
            8(800)-080-12-13
          </a>
        </div>


        <!-- Кнопка Мобильного Меню -->
        <button id="burger-menu">
          <div class="box box_item1"></div>
          <div class="box box_item2"></div>
          <div class="box box_item3"></div>
        </button>
        <!-- Кнопка Мобильного Меню -->
      </div>
    </header>
    <section class="sec1">
      <div class="container">
        <div class="call-btn m1">
          <svg width="136" height="136" viewBox="0 0 136 136" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="68" cy="68" r="68" fill="#3D9BE9" fill-opacity="0.3" />
            <circle cx="68" cy="68" r="50" fill="#3D9BE9" fill-opacity="0.8" />
            <path d="M82.9472 70.6482C82.689 70.3895 82.3823 70.1843 82.0446 70.0442C81.707 69.9042 81.345 69.8321 80.9795 69.8321C80.614 69.8321 80.252 69.9042 79.9144 70.0442C79.5767 70.1843 79.27 70.3895 79.0118 70.6482L74.5753 75.0846C72.5185 74.4723 68.6805 73.0807 66.248 70.6482C63.8154 68.2156 62.4238 64.3776 61.8115 62.3208L66.248 57.8844C66.5066 57.6261 66.7119 57.3194 66.8519 56.9817C66.9919 56.6441 67.064 56.2822 67.064 55.9166C67.064 55.5511 66.9919 55.1892 66.8519 54.8515C66.7119 54.5139 66.5066 54.2071 66.248 53.9489L55.1151 42.816C54.8569 42.5574 54.5501 42.3521 54.2125 42.2121C53.8748 42.0721 53.5129 42 53.1474 42C52.7818 42 52.4199 42.0721 52.0823 42.2121C51.7446 42.3521 51.4379 42.5574 51.1796 42.816L43.6316 50.3641C42.5739 51.4217 41.9783 52.8746 42.0006 54.358C42.0646 58.3213 43.1139 72.0871 53.9629 82.9361C64.8118 93.785 78.5776 94.8315 82.5437 94.8983H82.6216C84.0911 94.8983 85.48 94.3194 86.532 93.2673L94.0801 85.7193C94.3388 85.461 94.544 85.1543 94.684 84.8167C94.824 84.479 94.8961 84.1171 94.8961 83.7515C94.8961 83.386 94.824 83.0241 94.684 82.6864C94.544 82.3488 94.3388 82.0421 94.0801 81.7838L82.9472 70.6482ZM82.5938 89.3291C79.1203 89.2706 67.236 88.3383 57.8983 78.9978C48.53 69.6295 47.6227 57.7034 47.567 54.2996L53.1474 48.7192L60.3448 55.9166L56.7461 59.5153C56.4189 59.8422 56.1784 60.2455 56.0462 60.6886C55.9141 61.1318 55.8944 61.6009 55.989 62.0536C56.0558 62.3737 57.6896 69.9635 62.3097 74.5836C66.9298 79.2038 74.5197 80.8375 74.8397 80.9043C75.2921 81.0016 75.7617 80.9835 76.2053 80.8517C76.6489 80.7199 77.0522 80.4786 77.378 80.1501L80.9795 76.5514L88.1769 83.7488L82.5938 89.3291Z" fill="#FDF7F7" />
          </svg>

        </div>
        <div class="block">
          <div class="t1">Квартирные <br> переезды</div>
          <div class="t2">По Москве и области</div>
          <img src="assets/img/man.png" alt="">
          <button class="md-trigger" data-modal="modal-1">Заказать</button>
          <div class="t3">
            <div class="tt1">
              <svg width="52" height="40" viewBox="0 0 52 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M44.202 32.935C44.202 35.7952 42.4686 38.1353 40.3018 38.1353C38.1351 38.1353 36.4016 35.7952 36.4016 32.935C36.4016 30.0749 38.1351 27.7347 40.3018 27.7347C42.4686 27.7347 44.202 30.0749 44.202 32.935Z" fill="#FECC00" />
                <path d="M13.0878 32.935C13.0878 35.7952 11.3543 38.1353 9.18757 38.1353C7.02082 38.1353 5.28735 35.7952 5.28735 32.935C5.28735 30.0749 7.02082 27.7347 9.18757 27.7347C11.3543 27.7347 13.0878 30.0749 13.0878 32.935Z" fill="#FECC00" />
                <path d="M50.2691 16.4674H45.0688L37.875 8.49362C37.5283 8.06022 36.9216 7.80021 36.4015 7.80021H26.8676V3.37996C26.8676 1.99325 25.7409 0.866455 24.3541 0.866455H5.97994C4.59323 0.866455 3.46643 1.99315 3.46643 3.37996V22.5344H26.8677V32.935H36.4016C36.4016 30.0748 38.7418 27.7347 41.6019 27.7347C44.4621 27.7347 46.8022 30.0748 46.8022 32.935H50.009C50.6157 32.935 51.1357 32.4149 51.1357 31.8083V18.1142C51.1358 17.5941 50.6158 16.8141 50.2691 16.4674Z" fill="#FED100" />
                <path d="M27.7349 23.4013H0V3.38019C0 1.47345 1.47345 0 3.38019 0H24.4414C26.2615 0 27.7349 1.47345 27.7349 3.38019V23.4013ZM1.73346 21.6678H26.0014V3.38019C26.0014 2.51351 25.308 1.73346 24.3547 1.73346H3.38019C2.42677 1.73346 1.73346 2.42687 1.73346 3.38019V21.6678Z" fill="#333333" />
                <path d="M41.6019 39.0021C38.2217 39.0021 35.5349 36.3153 35.5349 32.9351C35.5349 29.5549 38.2217 26.8682 41.6019 26.8682C44.9821 26.8682 47.6689 29.5549 47.6689 32.9351C47.6689 36.3153 44.9821 39.0021 41.6019 39.0021ZM41.6019 28.6015C39.1751 28.6015 37.2683 30.5083 37.2683 32.9351C37.2683 35.362 39.175 37.2687 41.6019 37.2687C44.0287 37.2687 45.9355 35.362 45.9355 32.9351C45.9355 30.5083 44.0287 28.6015 41.6019 28.6015Z" fill="#333333" />
                <path d="M10.401 39.0021C7.02077 39.0021 4.33398 36.3153 4.33398 32.9351C4.33398 29.5549 7.02077 26.8682 10.401 26.8682C13.7811 26.8682 16.4679 29.5549 16.4679 32.9351C16.4679 36.3153 13.7811 39.0021 10.401 39.0021ZM10.401 28.6015C7.97419 28.6015 6.06735 30.5083 6.06735 32.9351C6.06735 35.362 7.97409 37.2687 10.401 37.2687C12.8278 37.2687 14.7346 35.362 14.7346 32.9351C14.7346 30.5083 12.8277 28.6015 10.401 28.6015Z" fill="#333333" />
                <path d="M50.7033 23.4013H35.9691C35.4491 23.4013 35.1024 23.0547 35.1024 22.5346C35.1024 22.0146 35.4491 21.668 35.9691 21.668H50.7033C51.2233 21.668 51.57 22.0146 51.57 22.5346C51.57 23.0546 51.2233 23.4013 50.7033 23.4013Z" fill="#333333" />
                <path d="M13.8674 15.6008H0.866681C0.346652 15.6008 0 15.2541 0 14.7341C0 14.2141 0.346652 13.8674 0.866681 13.8674H13.8674C14.3874 13.8674 14.7341 14.2141 14.7341 14.7341C14.7342 15.254 14.3874 15.6008 13.8674 15.6008Z" fill="#333333" />
                <path d="M10.4006 11.2671H0.866681C0.346652 11.2671 0 10.9204 0 10.4004C0 9.88034 0.346652 9.53369 0.866681 9.53369H10.4006C10.9206 9.53369 11.2673 9.88034 11.2673 10.4004C11.2673 10.9204 10.9206 11.2671 10.4006 11.2671Z" fill="#333333" />
                <path d="M49.2292 33.8019H45.9356V32.9353C45.9356 30.5085 44.0289 28.6017 41.602 28.6017C39.1752 28.6017 37.2684 30.5084 37.2684 32.9353V33.8019H26.0012V6.93372H36.6618C37.8753 6.93372 38.9153 7.45375 39.6954 8.40717L45.4157 15.6009L45.5023 15.6876H49.1425C50.7026 15.6876 51.916 16.9876 51.916 18.4611V31.0284C52.0027 32.5019 50.7026 33.8019 49.2292 33.8019ZM47.5824 32.0685H49.1425C49.7492 32.0685 50.1826 31.5485 50.1826 30.9418V18.4611C50.1826 17.8544 49.6625 17.421 49.1425 17.421H45.5023C44.8956 17.421 44.3756 17.161 44.0289 16.7276L38.3085 9.53386C37.9619 8.92719 37.3551 8.66718 36.6618 8.66718H27.7347V32.0685H35.6218C36.0552 29.1217 38.5686 26.8682 41.6021 26.8682C44.6356 26.8682 47.149 29.1217 47.5824 32.0685Z" fill="#333333" />
                <path d="M27.7349 33.802H14.7342V32.9353C14.7342 30.5086 12.8274 28.6017 10.4006 28.6017C7.97371 28.6017 6.06697 30.5085 6.06697 32.9353V33.802H2.60014C1.1267 33.802 0 32.6753 0 31.2019V21.668H27.7349V33.802ZM16.3809 32.0685H26.0014V23.4014H1.73346V31.2019C1.73346 31.7219 2.08012 32.0685 2.60014 32.0685H4.42025C4.85364 29.1218 7.36704 26.8683 10.4006 26.8683C13.4341 26.8683 15.9475 29.1218 16.3809 32.0685Z" fill="#333333" />
                <path d="M12.1336 32.935C12.1336 33.8884 11.3535 34.6685 10.4001 34.6685C9.44667 34.6685 8.66663 33.8884 8.66663 32.935C8.66663 31.9816 9.44667 31.2015 10.4001 31.2015C11.3535 31.2015 12.1336 31.9817 12.1336 32.935Z" fill="#333333" />
                <path d="M43.3359 32.935C43.3359 33.8884 42.5559 34.6685 41.6025 34.6685C40.6491 34.6685 39.869 33.8884 39.869 32.935C39.869 31.9816 40.6491 31.2015 41.6025 31.2015C42.5559 31.2016 43.3359 31.9817 43.3359 32.935Z" fill="#333333" />
                <path d="M44.8093 14.7341H33.542C32.242 14.7341 31.2019 13.6941 31.2019 12.394V6.93372H36.6622C37.8756 6.93372 38.9157 7.45375 39.6957 8.40717L44.8093 14.7341ZM32.9354 8.66718V12.394C32.9354 12.7407 33.1954 13.0007 33.542 13.0007H41.2558L38.3957 9.44712C37.9623 8.92709 37.3556 8.66708 36.6622 8.66708L32.9354 8.66718Z" fill="#333333" />
              </svg>
              <span>Более 800 <br> переездов</span>
            </div>
            <div class="tt2">
              <svg width="40" height="38" viewBox="0 0 40 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M34.033 11.1679C34.0229 11.1179 34.008 11.0687 33.9885 11.0211C33.9689 10.9742 33.9447 10.9289 33.9166 10.8867C33.8877 10.8437 33.8557 10.8039 33.8189 10.7679C33.7829 10.732 33.7432 10.6992 33.7001 10.6711C33.6579 10.6429 33.6127 10.6187 33.5657 10.5992C33.5189 10.5797 33.4697 10.564 33.4196 10.5547C33.3189 10.5344 33.215 10.5344 33.1142 10.5547C33.0642 10.564 33.015 10.5797 32.9682 10.5992C32.9213 10.6187 32.876 10.6422 32.833 10.6711C32.7907 10.6992 32.7502 10.732 32.7143 10.7679C32.6783 10.8039 32.6454 10.8437 32.6174 10.8867C32.5892 10.9289 32.565 10.9742 32.5455 11.0211C32.526 11.0687 32.5111 11.1179 32.501 11.1679C32.4908 11.2179 32.4854 11.2695 32.4854 11.3203C32.4854 11.3711 32.4908 11.4226 32.501 11.4726C32.5111 11.5226 32.526 11.5719 32.5455 11.6187C32.565 11.6664 32.5893 11.7117 32.6174 11.7539C32.6454 11.7969 32.6783 11.8367 32.7143 11.8726C32.7502 11.9086 32.7908 11.9414 32.833 11.9695C32.8759 11.9976 32.9212 12.0219 32.9682 12.0414C33.015 12.0609 33.0642 12.0758 33.1142 12.0859C33.165 12.0961 33.2158 12.1015 33.2665 12.1015C33.4728 12.1015 33.6736 12.018 33.8189 11.8726C33.8557 11.8367 33.8877 11.7969 33.9166 11.7539C33.9447 11.7117 33.9689 11.6664 33.9885 11.6187C34.008 11.5719 34.0229 11.5226 34.033 11.4726C34.0432 11.4226 34.0479 11.3711 34.0479 11.3203C34.0479 11.2695 34.0432 11.2179 34.033 11.1679Z" fill="#333333" />
                <path d="M39.2188 0.108398H0.78125C0.349766 0.108398 0 0.458164 0 0.889648V7.64371C0 8.07519 0.349766 8.42496 0.78125 8.42496H1.8757V37.1103C1.8757 37.5418 2.22547 37.8915 2.65695 37.8915H37.343C37.7745 37.8915 38.1243 37.5418 38.1243 37.1103V8.42496H39.2188C39.6502 8.42496 40 8.07519 40 7.64371V0.889648C40 0.458164 39.6502 0.108398 39.2188 0.108398ZM14.8502 1.6709H25.1498V6.86246H14.8502V1.6709ZM14.8502 8.42496H25.1498V18.6308L23.4091 17.4234C23.1413 17.2377 22.7864 17.2377 22.5187 17.4233L20 19.1695L17.4812 17.4232C17.3473 17.3304 17.1917 17.284 17.0361 17.284C16.8804 17.284 16.7247 17.3305 16.5908 17.4233L14.8502 18.6307V8.42496ZM1.5625 6.86246V1.6709H13.2877V6.86246H1.5625ZM13.2877 8.42496V10.539H3.4382V8.42496H13.2877ZM21.2149 22.5448V36.329H3.4382V12.1014H13.2877V20.1235C13.2877 20.4142 13.4491 20.6808 13.7067 20.8157C13.9643 20.9505 14.2755 20.9311 14.5143 20.7654L17.0362 19.0161L19.5548 20.7622C19.8226 20.9478 20.1774 20.9478 20.4451 20.7622L22.9638 19.0161L25.4857 20.7654C25.6189 20.8578 25.7746 20.9047 25.931 20.9047C26.0549 20.9047 26.1794 20.8752 26.2932 20.8157C26.5508 20.6808 26.7122 20.4142 26.7122 20.1235V12.1014H30.1389C30.5703 12.1014 30.9202 11.7517 30.9202 11.3202C30.9202 10.8887 30.5703 10.5389 30.1389 10.5389H26.7122V8.42488H36.5617V21.7636H21.9962C21.5648 21.7636 21.2149 22.1133 21.2149 22.5448ZM36.5618 36.329H22.7774V23.326H36.5618V36.329ZM38.4375 6.86246H26.7123V1.6709H38.4375V6.86246Z" fill="#333333" />
                <path d="M35.2022 28.153C35.0264 26.4142 33.6157 25.1063 31.9102 25.1063C31.0804 25.1063 30.328 25.4401 29.7588 26.0345C29.1429 25.4601 28.3091 25.1063 27.4637 25.1063C25.7731 25.1063 24.4729 26.3578 24.2935 28.1533C24.27 28.3122 24.236 28.7333 24.3899 29.3534C24.6228 30.2901 25.1567 31.139 25.9397 31.813L29.1957 34.5603C29.3537 34.6948 29.5507 34.7621 29.7477 34.7621C29.9445 34.7621 30.1413 34.6951 30.2993 34.5608L33.5614 31.8082C34.3388 31.1397 34.8727 30.2908 35.1056 29.3534C35.2598 28.733 35.2255 28.3117 35.2022 28.153ZM33.5891 28.9766C33.4348 29.598 33.0729 30.1674 32.5481 30.6188L29.7477 32.9818L26.9531 30.6237C26.4225 30.167 26.0606 29.5975 25.9063 28.9767C25.8248 28.6481 25.8334 28.4462 25.8375 28.3958C25.8453 28.3651 25.8428 28.3651 25.8465 28.325C25.9237 27.5005 26.4536 26.6687 27.4636 26.6687C28.1313 26.6687 28.8092 27.1032 29.0753 27.7018C29.2008 27.9838 29.4806 28.1656 29.7892 28.1656C29.7892 28.1656 29.7893 28.1656 29.7894 28.1656C30.0981 28.1655 30.3779 27.9837 30.5032 27.7016C30.6746 27.3159 31.0852 26.6687 31.9102 26.6687C32.8279 26.6687 33.5592 27.3653 33.6491 28.3251C33.6528 28.3651 33.6502 28.3651 33.6581 28.3958C33.6621 28.4462 33.6708 28.6481 33.5891 28.9766Z" fill="#333333" />
              </svg>
              <span>Бережная <br> упаковка</span>
            </div>
            <div class="tt3">
              <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.3828 26.2943C26.4114 26.2943 25.6211 25.6103 25.6211 24.7695C25.6211 23.9287 26.4114 23.2447 27.3828 23.2447C28.3542 23.2447 29.1445 23.9287 29.1445 24.7695C29.1445 25.2117 29.5031 25.5703 29.9453 25.5703C30.3875 25.5703 30.7461 25.2117 30.7461 24.7695C30.7461 23.3021 29.6527 22.0683 28.1836 21.7334V21.3169C28.1836 20.8747 27.825 20.5161 27.3828 20.5161C26.9406 20.5161 26.582 20.8747 26.582 21.3169V21.7334C25.1129 22.0683 24.0195 23.3021 24.0195 24.7695C24.0195 26.4934 25.5283 27.8959 27.3828 27.8959C28.3542 27.8959 29.1445 28.5799 29.1445 29.4207C29.1445 30.2615 28.3542 30.9455 27.3828 30.9455C26.4114 30.9455 25.6211 30.2615 25.6211 29.4207C25.6211 28.9785 25.2625 28.6199 24.8203 28.6199C24.3781 28.6199 24.0195 28.9785 24.0195 29.4207C24.0195 30.8881 25.1129 32.122 26.582 32.4569V32.8028C26.582 33.245 26.9406 33.6036 27.3828 33.6036C27.825 33.6036 28.1836 33.245 28.1836 32.8028V32.4569C29.6527 32.122 30.7461 30.8881 30.7461 29.4207C30.7461 27.6968 29.2373 26.2943 27.3828 26.2943Z" fill="#333333" />
                <path d="M36.1535 21.531C35.1075 19.901 33.6337 18.5967 31.8916 17.7592C31.4929 17.5675 31.0145 17.7354 30.8229 18.134C30.6313 18.5326 30.799 19.011 31.1977 19.2026C34.2335 20.662 36.195 23.7801 36.195 27.1465C36.195 28.5869 35.84 30.0154 35.1683 31.2778C34.9606 31.6681 35.1087 32.1531 35.4991 32.3608C35.6189 32.4246 35.7477 32.4548 35.8746 32.4548C36.1611 32.4548 36.4382 32.3006 36.5822 32.03C37.3767 30.537 37.7966 28.8483 37.7966 27.1465C37.7966 25.1477 37.2284 23.2059 36.1535 21.531Z" fill="#333333" />
                <path d="M28.6418 16.7364L28.5879 16.7363C28.1457 16.7363 27.7871 17.0948 27.7871 17.5371C27.7871 17.9794 28.1457 18.3379 28.5879 18.3379L28.6343 18.338C28.6355 18.338 28.6367 18.338 28.6381 18.338C29.0786 18.338 29.4367 17.9819 29.4388 17.5409C29.4408 17.0987 29.084 16.7385 28.6418 16.7364Z" fill="#333333" />
                <path d="M23.5754 35.0903C20.5396 33.6309 18.5781 30.5127 18.5781 27.1465C18.5781 25.706 18.9332 24.2775 19.6048 23.0152C19.8125 22.6248 19.6645 22.1399 19.274 21.9321C18.8837 21.7244 18.3986 21.8725 18.1909 22.2629C17.3965 23.756 16.9766 25.4447 16.9766 27.1465C16.9766 29.1452 17.5447 31.087 18.6196 32.762C19.6657 34.3919 21.1394 35.6962 22.8815 36.5338C22.9934 36.5876 23.1116 36.613 23.2279 36.613C23.5261 36.613 23.8123 36.4457 23.9502 36.159C24.1417 35.7604 23.974 35.2819 23.5754 35.0903Z" fill="#333333" />
                <path d="M26.1857 35.955L26.1394 35.9548C25.6951 35.954 25.337 36.3095 25.335 36.7519C25.3329 37.1941 25.6899 37.5543 26.1321 37.5564L26.1857 37.5566C26.6279 37.5566 26.9865 37.198 26.9865 36.7558C26.9865 36.3136 26.6279 35.955 26.1857 35.955Z" fill="#333333" />
                <path d="M31.0229 14.0271C30.9255 13.7949 30.8061 13.576 30.6671 13.373H32.7519C34.783 13.373 36.4355 11.7205 36.4355 9.68944C36.4355 7.65834 34.783 6.00585 32.7519 6.00585H26.3392C26.7469 5.41311 26.9863 4.69601 26.9863 3.92382C26.9863 1.89272 25.3338 0.240234 23.3027 0.240234H3.68359C1.65249 0.240234 0 1.89272 0 3.92382C0 5.95492 1.65249 7.60741 3.68359 7.60741H10.0962C9.68855 8.20015 9.4492 8.91724 9.4492 9.68944C9.4492 10.4616 9.68847 11.1787 10.0962 11.7715H8.0078C5.9767 11.7715 4.32421 13.424 4.32421 15.455C4.32421 16.6215 4.86986 17.6625 5.71877 18.3379C4.86986 19.0132 4.32421 20.0542 4.32421 21.2207C4.32421 22.3872 4.86986 23.4281 5.71877 24.1035C4.86986 24.7788 4.32421 25.8198 4.32421 26.9863C4.32421 28.1528 4.86986 29.1937 5.71877 29.8691C4.86986 30.5445 4.32421 31.5854 4.32421 32.7519C4.32421 34.783 5.9767 36.4355 8.0078 36.4355H17.445C19.9311 39.0946 23.4678 40.7598 27.3867 40.7598C34.8931 40.7598 41 34.6529 41 27.1465C41 20.8991 36.7695 15.6219 31.0229 14.0271ZM32.7519 7.60741C33.9 7.60741 34.8339 8.54144 34.8339 9.68944C34.8339 10.8374 33.9 11.7715 32.7519 11.7715H27.6269H13.1328C11.9847 11.7715 11.0508 10.8374 11.0508 9.68944C11.0508 8.54144 11.9847 7.60741 13.1328 7.60741H32.7519ZM3.68359 6.00585C2.53551 6.00585 1.60156 5.07182 1.60156 3.92382C1.60156 2.77582 2.53551 1.84179 3.68359 1.84179H23.3027C24.4508 1.84179 25.3847 2.77582 25.3847 3.92382C25.3847 5.07182 24.4508 6.00585 23.3027 6.00585H3.68359ZM8.0078 13.373H27.6269C27.9495 13.373 28.2583 13.448 28.5354 13.5822C28.1566 13.5504 27.7737 13.5333 27.3867 13.5333C23.6275 13.5333 20.2194 15.0651 17.7534 17.5371H8.0078C6.8598 17.5371 5.92577 16.603 5.92577 15.455C5.92577 14.3071 6.8598 13.373 8.0078 13.373ZM8.0078 19.1386H16.3852C15.4761 20.3841 14.7733 21.7888 14.3269 23.3027H8.0078C6.85972 23.3027 5.92577 22.3687 5.92577 21.2207C5.92577 20.0727 6.85972 19.1386 8.0078 19.1386ZM8.0078 24.9043H13.9592C13.8377 25.634 13.7735 26.3828 13.7735 27.1465C13.7735 27.7988 13.8207 28.4403 13.9098 29.0683H8.0078C6.85972 29.0683 5.92577 28.1344 5.92577 26.9863C5.92577 25.8382 6.85972 24.9043 8.0078 24.9043ZM8.0078 34.8339C6.85972 34.8339 5.92577 33.9 5.92577 32.7519C5.92577 31.6038 6.85972 30.6699 8.0078 30.6699H14.2367C14.6408 32.1764 15.2972 33.5804 16.1581 34.8339H8.0078ZM27.3867 39.1582C20.7635 39.1582 15.3751 33.7698 15.3751 27.1465C15.3751 20.5233 20.7635 15.1348 27.3867 15.1348C34.01 15.1348 39.3984 20.5233 39.3984 27.1465C39.3984 33.7698 34.01 39.1582 27.3867 39.1582Z" fill="#333333" />
              </svg>
              <span>Фиксированная <br> цена</span>
            </div>
          </div>
        </div>
      </div>
      <a href="#" class="scrollup">Наверх</a>
    </section>
    <section class="sec2">
      <div class="container">
        <h2>Как это происходит?</h2>
        <div class="block">
          <div class="item">
            <div class="t1" data-num="01">01</div>
            <div class="t2">
              <div class="tt1">Оценка объема предстоящих работ</div>
              <div class="tt2">Стоимость переезда зависит от количества комнат, вещей и мебели. </div>
            </div>
          </div>
          <div class="item">
            <div class="t1" data-num="02">02</div>
            <div class="t2">
              <div class="tt1">Упаковка вещей</div>
              <div class="tt2">Упаковываем вещи в коробки, подписываем. Габаритное и деликатное, упаковываем отдельно. </div>
            </div>
          </div>
          <div class="item">
            <div class="t1" data-num="03">03</div>
            <div class="t2">
              <div class="tt1">Погрузка и транспортировка <span>вещей</span></div>
              <div class="tt2">В нашем автопарке имеются машины, подходящие для мебели любых габаритов. </div>
            </div>
          </div>
          <div class="item">
            <div class="t1" data-num="04">04</div>
            <div class="t2">
              <div class="tt1">Распаковка и расстановка мебели</div>
              <div class="tt2">Опытные грузчики быстро расставят мебель и уберут мусор от распаковки.</div>
            </div>
          </div>
          <div class="item">
            <div class="t1" data-num="05">05</div>
            <div class="t2">
              <div class="tt1">Распаковка и расстановка мебели</div>
              <div class="tt2">Опытные грузчики быстро расставят мебель и уберут мусор от распаковки.</div>
            </div>
          </div>
          <div class="item">
            <div class="t1" data-num="06">06</div>
            <div class="t2">
              <div class="tt1">Распаковка и расстановка мебели</div>
              <div class="tt2">Опытные грузчики быстро расставят мебель и уберут мусор от распаковки.</div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section class="sec3">
      <div class="container">
        <h2 class="center">Цены <span>Фиксированная стоимость на переезд под ключ </span></h2>
        <div class="block">
          <div class="item">
            <div class="t1">1-комнатная кв-ра</div>
            <ul>
              <li>1 фургон</li>
              <li>2 грузчика</li>
              <li>Переезд за 4 часа</li>
            </ul>
            <div class="t2">8 490₽ </div>
            <button class="md-trigger" data-modal="modal-1">Заказать</button>
          </div>
          <div class="item">
            <div class="t1">2-комнатная кв-ра</div>
            <ul>
              <li>1 газель - 3 метра </li>
              <li>2 грузчика</li>
              <li>Переезд за 4 часа</li>
            </ul>
            <div class="t2">10 990₽</div>
            <button class="md-trigger" data-modal="modal-1">Заказать</button>
          </div>
          <div class="item">
            <div class="t1">3-комнатная кв-ра</div>
            <ul>
              <li>1 газель - 4 метра</li>
              <li>2 грузчика</li>
              <li>Переезд за 6 часов</li>
            </ul>
            <div class="t2">16 490₽</div>
            <button class="md-trigger" data-modal="modal-1">Заказать</button>
          </div>
        </div>
      </div>
    </section>
    <section class="sec4">
      <div class="container">
        <span class="text h">10 видов автомобилей от 800 кг до 10 тонн</span>
        <span class="v">Автопарк</span>
        <div class="block tabs">
          <ul class="tabs__caption item">
            <li class="active tab">Газели</li>
            <li class="tab">Каблуки</li>
            <li class="tab">Грузовики</li>
          </ul>
          <div class="tabs__content active">
            <div class="truck-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="txt">
                    <span class="t1">Газель 3 метра</span>
                    <ul class="t2">
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Ширина 2 м</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Высота 2 м</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Объем 16 м³</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Грузоподъемность 1,5 т</li>
                    </ul>
                    <button class="md-trigger" data-modal="modal-1">Заказать</button>
                  </div>
                  <div class="img">
                    <img src="../movee/assets/img/slider-truck1.png" alt="">
                    <p>Газель 3 метра / 1,5 тонны </p>
                    <button class="md-trigger" data-modal="modal-1">Заказать</button>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="txt">
                    <span class="t1">Газель 3 метра</span>
                    <ul class="t2">
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Ширина 2 м</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Высота 2 м</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Объем 16 м³</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Грузоподъемность 1,5 т</li>
                    </ul>

                    <button class="md-trigger" data-modal="modal-1">Заказать</button>
                  </div>
                  <div class="img">
                    <img src="../movee/assets/img/slider-truck1.png" alt="">
                    <p>Газель 3 метра / 1,5 тонны </p>
                    <button class="md-trigger" data-modal="modal-1">Заказать</button>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="txt">
                    <span class="t1">Газель 3 метра</span>
                    <ul class="t2">
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Ширина 2 м</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Высота 2 м</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Объем 16 м³</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Грузоподъемность 1,5 т</li>
                    </ul>

                    <button class="md-trigger" data-modal="modal-1">Заказать</button>
                  </div>
                  <div class="img">
                    <img src="../movee/assets/img/slider-truck1.png" alt="">
                    <p>Газель 3 метра / 1,5 тонны </p>
                    <button class="md-trigger" data-modal="modal-1">Заказать</button>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="pagin">
              <div class="truck-next"><svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.25 2.25L9 10.125L2.25 18" stroke="#333333" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="truck-prev"><svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.75 17.75L2 9.875L8.75 2" stroke="#333333" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>
          <div class="tabs__content">
            <div class="truck-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="txt">
                    <span class="t1">Каблуки 4 метра</span>
                    <ul class="t2">
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Ширина 2 м</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Высота 2 м</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Объем 16 м³</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Грузоподъемность 2,5 т</li>
                    </ul>

                    <button class="md-trigger" data-modal="modal-1">Заказать</button>
                  </div>
                  <div class="img">
                    <img src="../movee/assets/img/slider-truck1.png" alt="">
                    <p>Каблук 4 метра / 2,5 тонны </p>
                    <button class="md-trigger" data-modal="modal-1">Заказать</button>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="txt">
                    <span class="t1">Каблуки 4 метра</span>
                    <ul class="t2">
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Ширина 2 м</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Высота 2 м</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Объем 16 м³</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Грузоподъемность 2,5 т</li>
                    </ul>

                    <button class="md-trigger" data-modal="modal-1">Заказать</button>
                  </div>
                  <div class="img">
                    <img src="../movee/assets/img/slider-truck1.png" alt="">
                    <p>Каблук 4 метра / 2,5 тонны </p>
                    <button class="md-trigger" data-modal="modal-1">Заказать</button>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="txt">
                    <span class="t1">Каблуки 4 метра</span>
                    <ul class="t2">
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Ширина 2 м</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Высота 2 м</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Объем 16 м³</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Грузоподъемность 2,5 т</li>
                    </ul>

                    <button class="md-trigger" data-modal="modal-1">Заказать</button>
                  </div>
                  <div class="img">
                    <img src="../movee/assets/img/slider-truck1.png" alt="">
                    <p>Каблук 4 метра / 2,5 тонны </p>
                    <button class="md-trigger" data-modal="modal-1">Заказать</button>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="pagin">
              <div class="truck-next"><svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.25 2.25L9 10.125L2.25 18" stroke="#333333" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="truck-prev"><svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.75 17.75L2 9.875L8.75 2" stroke="#333333" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>
          <div class="tabs__content">
            <div class="truck-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="txt">
                    <span class="t1">Грузовики 5 метров</span>
                    <ul class="t2">
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Ширина 2 м</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Высота 2 м</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Объем 16 м³</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Грузоподъемность 4 т</li>
                    </ul>

                    <button class="md-trigger" data-modal="modal-1">Заказать</button>
                  </div>
                  <div class="img">
                    <img src="../movee/assets/img/slider-truck1.png" alt="">
                    <p>Грузовик 5 метров / 4 тонны </p>
                    <button class="md-trigger" data-modal="modal-1">Заказать</button>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="txt">
                    <span class="t1">Грузовики 5 метров</span>
                    <ul class="t2">
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Ширина 2 м</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Высота 2 м</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Объем 16 м³</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Грузоподъемность 4 т</li>
                    </ul>

                    <button class="md-trigger" data-modal="modal-1">Заказать</button>
                  </div>
                  <div class="img">
                    <img src="../movee/assets/img/slider-truck1.png" alt="">
                    <p>Грузовик 5 метров / 4 тонны </p>
                    <button class="md-trigger" data-modal="modal-1">Заказать</button>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="txt">
                    <span class="t1">Грузовики 5 метров</span>
                    <ul class="t2">
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Ширина 2 м</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Высота 2 м</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Объем 16 м³</li>
                      <li class="t3"><img src="../movee/assets/img/v.png" alt="">Грузоподъемность 4 т</li>
                    </ul>

                    <button class="md-trigger" data-modal="modal-1">Заказать</button>
                  </div>
                  <div class="img">
                    <img src="../movee/assets/img/slider-truck1.png" alt="">
                    <p>Грузовик 5 метров / 4 тонны </p>
                    <button class="md-trigger" data-modal="modal-1">Заказать</button>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="pagin">
              <div class="truck-next"><svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.25 2.25L9 10.125L2.25 18" stroke="#333333" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="truck-prev"><svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.75 17.75L2 9.875L8.75 2" stroke="#333333" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="sec5">
      <div class="container">
        <h2>Отзывы</h2>
        <div class="block">
          <div class="item">
            <div class="name">Ирина</div>
            <div class="t2">
              <div class="date">24.03.2019</div>
              <div class="rev">
                <img src="./assets/img/star.png" alt="">
                <img src="./assets/img/star.png" alt="">
                <img src="./assets/img/star.png" alt="">
                <img src="./assets/img/star.png" alt="">
                <img src="./assets/img/star.png" alt="">
              </div>
            </div>
            <div class="t3">
              <p>Обращение к вам за помощью в переезде оставило только положительные впечатления. Хотелось отметить замечательного водителя газели Алексея. Были трудности с заездом
                во двор, он проявил себя как компетентный и профессиональный сотрудник, за что ему огромное </p>
            </div>
            <button class="md-trigger" data-modal="modal-2">Читать полностью </button>
          </div>
          <div class="item">
            <div class="name">Светлана Васильевна </div>
            <div class="t2">
              <div class="date">13.09.2019</div>
              <div class="rev">
                <img src="./assets/img/star.png" alt="">
                <img src="./assets/img/star.png" alt="">
                <img src="./assets/img/star.png" alt="">
                <img src="./assets/img/star.png" alt="">
                <img src="./assets/img/star.png" alt="">
              </div>
            </div>
            <div class="t3">
              <p>Сегодня ( 13.09.2019 ) мы переехали. Остались очень довольны, несмотря на то, что к нам опоздали на 1,5 часа. Морально были к этому готовы ( в прошлый переезд в другой фирме тоже опоздали на час). Водитель заранее позвонил, предупредил, что задерживается.
                Когда</p>
            </div>
            <button class="md-trigger" data-modal="modal-3">Читать полностью </button>
          </div>
          <div class="item">
            <div class="name">Ольга Петрова</div>
            <div class="t2">
              <div class="date">11.11.2019</div>
              <div class="rev">
                <img src="./assets/img/star.png" alt="">
                <img src="./assets/img/star.png" alt="">
                <img src="./assets/img/star.png" alt="">
                <img src="./assets/img/star.png" alt="">
                <img src="./assets/img/star.png" alt="">
              </div>
            </div>
            <div class="t3">
              <p>Могу на 100% порекомендовать компанию MOVEE и отметить, что цены фиксированы, что упрощает расчет. Безо всяких заморочек, в отличии от их конкурентов. Упаковали все качественно и быстро. Все вещи приехали в сохранности. Особлая благодарность Александру за его</p>
            </div>
            <button class="md-trigger" data-modal="modal-4">Читать полностью </button>
          </div>
        </div>
        <button class="show-more">Все отзывы</button>
      </div>
    </section>
    <section class="sec6">
      <div class="container">
        <h2>Закажи переезд <br>прямо сейчас</h2>
        <div class="t1">Мы перезвоним в течении 10 секунд</div>
        <div class="form">
          <form action="sender.php" method="post">
            <div class="inpb">
              <input type="text" placeholder="Ваше имя" name="name" required>
            </div>
            <div class="inpb">
              <input type="text" placeholder="Телефон" name="phone" required>
            </div>
            <div class="inpb e">
              <input type="text" placeholder="Email" name="email" required>
            </div>
            <div class="ibtn">
              <button type="button">Перезвонить мне</button>
              <div class="check">
                <input type="checkbox" name="checkbox" id="formid" required>
                <label for="formid">Даю согласие на обработку данных</label>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <section class="sec7">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d575582.8758312371!2d36.974627155811966!3d55.69992951545229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414ab5269715db59%3A0x3c9ede46f385b391!2z0JLQvtC70LPQvtCz0YDQsNC00YHQutC40Lkg0L_RgC3Rgi4sIDM4LCDQnNC-0YHQutCy0LAsINCg0L7RgdGB0LjRjywgMTA5MzE2!5e0!3m2!1sru!2sua!4v1613565875463!5m2!1sru!2sua" height="666" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      <div class="container">
        <div class="block">
          <div class="logo">
            <a href=""><img src="./assets/img/logo.svg" alt=""></a>
          </div>
          <ul class="item">
            <li><img src="./assets/img/checkIcon.png" alt="">
              Москва, Волгоградский пр-т, 38</li>
            <li><img src="./assets/img/checkIcon.png" alt=""><a href="tel:88000801213" class="tel">
                8(800)-080-12-13
              </a></li>
            <li><img src="./assets/img/checkIcon.png" alt=""><a href="mailto:hello@movee.ru">hello@movee.ru</a></li>
          </ul>
          <div class="social">
            <a href=""><img src="./assets/img/scyt.png" alt=""></a>
            <a href=""><img src="./assets/img/scvk.png" alt=""></a>
            <a href=""><img src="./assets/img/scfb.png" alt=""></a>
            <a href=""><img src="./assets/img/scinsta.png" alt=""></a>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="item1">
          <div class="logo">
            <a href=""><img src="./assets/img/logo.svg" alt=""></a>
          </div>
          <a href="">Политика <br>конфиденциальнности</a>
          <a href="">Соглашение на обработку <br>персональных данных</a>
        </div>
        <div class="item2">
          <a href="">Главная</a>
          <a href="">Цена</a>
          <a href="">Автопарк</a>
          <a href="">Отзывы</a>
          <a href="">Контакты</a>
        </div>
        <div class="item3">
          <div class="social">
            <div class="icon">
              <a href=""><img src="./assets/img/scyt.png" alt=""></a>
              <a href=""><img src="./assets/img/scvk.png" alt=""></a>
              <a href=""><img src="./assets/img/scfb.png" alt=""></a>
              <a href=""><img src="./assets/img/scinsta.png" alt=""></a>
            </div>
            <a href="mailto:hello@movee.ru">hello@movee.ru</a>
          </div>
        </div>
        <div class="item4">
          <button><span class="a">Обратный звонок</span>
            <span class="b">Заказать</span></button>
          <a href="tel:88000801213" class="tel">8(800)-080-12-13</a>
        </div>
      </div>
    </footer>

  </div>
  <div class="md-modal md-effect-5" id="modal-1">
    <div class="md-content">
      <h3>Закажи переезд прямо сейчас</h3>
      <div class="t1">Мы перезвоним в течении 10 секунд</div>
      <div class="form">
        <form action="sender.php" method="post">
          <div class="inpb">
            <input type="text" placeholder="Ваше имя" name="name" required>
          </div>
          <div class="inpb">
            <input type="text" class="phone" placeholder="Телефон" name="phone" required>
          </div>
          <div class="inpb">
            <input type="text" placeholder="Email" name="email" required>
          </div>
          <div class="ibtn">
            <button type="button">Перезвонить мне</button>
            <div class="check">
              <input type="checkbox" id="formid" required>
              <label for="formid">Даю согласие на обработку данных</label>
            </div>
          </div>
        </form>
      </div>
      <button class="md-close">Закрыть!</button>
    </div>
  </div>
  <div class="md-modal md-effect-1" id="modal-2">
    <div class="md-content">
      <img src="./assets/img/ava1.jpg" width="300" height="300" alt="">
      <h3>Ирина</h3>
      <div>
        <div class="t2">
          <div class="date">24.03.2019</div>
          <div class="rev">
            <img src="./assets/img/star.png" alt="">
            <img src="./assets/img/star.png" alt="">
            <img src="./assets/img/star.png" alt="">
            <img src="./assets/img/star.png" alt="">
            <img src="./assets/img/star.png" alt="">
          </div>
        </div>
        <div class="t3">
          <p>Обращение к вам за помощью в переезде оставило только положительные впечатления. Хотелось отметить замечательного водителя газели Алексея.</p> Были трудности с заездом
          во двор, он проявил себя как компетентный и профессиональный сотрудник, за что ему огромное <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, ad dolores ipsam fugit rem, amet perspiciatis libero animi quis iusto optio magni nobis hic commodi tenetur vitae natus nihil impedit.</p>
        </div>
        <button class="md-close">Закрыть!</button>
      </div>
    </div>
  </div>
  <div class="md-modal md-effect-1" id="modal-3">
    <div class="md-content">
      <img src="./assets/img/ava2.jpg" width="300" height="300" alt="">
      <h3>Светлана Васильевна</h3>
      <div>
        <div class="t2">
          <div class="date">13.09.2019</div>
          <div class="rev">
            <img src="./assets/img/star.png" alt="">
            <img src="./assets/img/star.png" alt="">
            <img src="./assets/img/star.png" alt="">
            <img src="./assets/img/star.png" alt="">
            <img src="./assets/img/star.png" alt="">
          </div>
        </div>
        <div class="t3">
          <p>Сегодня ( 13.09.2019 ) мы переехали. Остались очень довольны, несмотря на то, что к нам опоздали на 1,5 часа. Морально были к этому готовы ( в прошлый переезд в другой фирме тоже опоздали на час). Водитель заранее позвонил, предупредил, что задерживается.</p>
          <p>Когда Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus perspiciatis nostrum eum, tempore numquam labore sint vitae adipisci, pariatur quod rerum, ratione ipsum veritatis repudiandae nihil culpa nisi placeat aperiam.</p>
        </div>
        <button class="md-close">Закрыть!</button>
      </div>
    </div>
  </div>
  <div class="md-modal md-effect-1" id="modal-4">
    <div class="md-content">
      <img src="./assets/img/ava3.jpg" width="300" height="300" alt="">
      <h3>Ольга Петрова</h3>
      <div>
        <div class=" t2">
          <div class="date">11.11.2019</div>
          <div class="rev">
            <img src="./assets/img/star.png" alt="">
            <img src="./assets/img/star.png" alt="">
            <img src="./assets/img/star.png" alt="">
            <img src="./assets/img/star.png" alt="">
            <img src="./assets/img/star.png" alt="">
          </div>
        </div>
        <div class="t3">
          <p>Могу на 100% порекомендовать компанию MOVEE и отметить, что цены фиксированы, что упрощает расчет. Безо всяких заморочек, в отличии от их конкурентов. Упаковали все качественно и быстро.</p>
          <p>Все вещи приехали в сохранности. Особлая благодарность Александру за его Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, veniam. </p>
          <p>Vero ad explicabo totam quaerat inventore facilis repellendus, minima error minus autem temporibus odio, non soluta sit incidunt possimus vel!</p>
        </div>
        <button class="md-close">Закрыть!</button>
      </div>
    </div>
  </div>

  <div class="md-overlay"></div><!-- the overlay element -->


  <script src="./assets/js/classie.js"></script>
  <script src="./assets/js/modalEffects.js"></script>
  <script src="./assets/js/cssParser.js"></script>
  <script src="./assets/js/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="./assets/js/jquery.validate.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="./assets/js/jquery.maskedinput.js"></script>
  <script src="./assets/js/script.js"></script>

</body>

</html>
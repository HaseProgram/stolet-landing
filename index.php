<!DOCTYPE html>
<html>
  <head>
      <title>Производственно-строительное объединение СТОЛЕТ</title>
      <meta name="viewport" content="width=device-width">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/font-awesome.min.css" />
      <link rel="stylesheet" href="css/slick.css" />
      <link rel="stylesheet" href="css/slick-theme.css" />
      <link rel="stylesheet" href="css/photoswipe.css" />
      <link rel="stylesheet" href="css/style.css?v=2" />
      <script>
          function phonenumber(inputtxt) {
              var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
              return inputtxt.match(phoneno);
          }

          function validate() {
              var tel = document.getElementById("tel").value;
              if(phonenumber(tel)) {
                  document.getElementById('sub-form').removeAttribute('disabled');
                  document.getElementById('wrong-number').style.display = 'none';
                  return true;
              }
              else {
                  document.getElementById('sub-form').setAttribute('disabled','true');
                  document.getElementById('wrong-number').style.display = 'block';
              }
          }
      </script>
  </head>
  <body>
      <!-- RECONSTRUCTION OVERLAY -->
      <?php
      $figure = "<figure itemprop=\"associatedMedia\" itemscope itemtype=\"http://schema.org/ImageObject\">";
      $figureclose = "</figure>";
      $linkclose = "</a>";

      for($i = 1; $i <= 9; $i++)
      {
        $dir = 'images/portfolio/re/' . $i;
        for($state = 1; $state <= 3; $state++)
        {
          $REGALERY[$i][$state] = "<div class=\"ps-re\" data-activated=\"false\" data-default=\"true\">";
          $thumbs = scandir($dir . '/' . $state);
          foreach($thumbs as $index => $name)
          {
            if(strcmp($name, ".") != 0 && strcmp($name, "..") != 0 && strcmp($name, "Thumbs.db") != 0) {
              $size = getimagesize($dir . "/" . $state . "/" . $name);
              $link = "<a data-size=\"" . $size[0] . 'x' . $size[1] . "\" href=\"" . $dir . "/" . $state . "/" . $name . "\" itemprop=\"contentUrl\">";
              $img = "<img src=\"" . $dir . "/" . $state . "_preview/" . $name . "\" alt=\"Реконструкция\"/>";
              $REGALERY[$i][$state] .= $figure . $link . $img . $linkclose . $figureclose . "\n";
            }
          }
          $REGALERY[$i][$state] .= "</div>";
        }
      }
      ?>
      <div id="re-overlay">
        <a href="#" class="close">X</a>
        <h2>Примеры реконструкции объектов</h2>
        <div class="wrapper">
          <div class="container-fluid">
            <div class="col-xs-12 col-md-7 col-lg-8">
              <div class="container-fluid main">
                <div class="col-xs-4 col-md-4 col-lg-4 re-thumbs">
                  Было
                  <div class="re-active" id="before-anos"><?=$REGALERY[9][1];?></div>
                  <div id="before-lamon"><?=$REGALERY[5][1];?></div>
                  <div id="before-grib"><?=$REGALERY[6][1];?></div>
                  <div id="before-kalug"><?=$REGALERY[2][1];?></div>
                  <div id="before-krek"><?=$REGALERY[3][1];?></div>
                  <div id="before-bityag"><?=$REGALERY[7][1];?></div>
                  <div id="before-shagan"><?=$REGALERY[4][1];?></div>
                  <div id="before-krat"><?=$REGALERY[1][1];?></div>
                  <div id="before-cherk"><?=$REGALERY[8][1];?></div>
                </div>
                <div class="col-xs-4 col-md-4 col-lg-4 re-thumbs">
                  Процесс
                  <div class="re-active" id="work-anos"><?=$REGALERY[9][2];?></div>
                  <div id="work-lamon"><?=$REGALERY[5][2];?></div>
                  <div id="work-grib"><?=$REGALERY[6][2];?></div>
                  <div id="work-kalug"><?=$REGALERY[2][2];?></div>
                  <div id="work-krek"><?=$REGALERY[3][2];?></div>
                  <div id="work-bityag"><?=$REGALERY[7][2];?></div>
                  <div id="work-shagan"><?=$REGALERY[4][2];?></div>
                  <div id="work-krat"><?=$REGALERY[1][2];?></div>
                  <div id="work-cherk"><?=$REGALERY[8][2];?></div>
                </div>
                <div class="col-xs-4 col-md-4 col-lg-4 re-thumbs">
                  Стало
                  <div class="re-active" id="after-anos"><?=$REGALERY[9][3];?></div>
                  <div id="after-lamon"><?=$REGALERY[5][3];?></div>
                  <div id="after-grib"><?=$REGALERY[6][3];?></div>
                  <div id="after-kalug"><?=$REGALERY[2][3];?></div>
                  <div id="after-krek"><?=$REGALERY[3][3];?></div>
                  <div id="after-bityag"><?=$REGALERY[7][3];?></div>
                  <div id="after-shagan"><?=$REGALERY[4][3];?></div>
                  <div id="after-krat"><?=$REGALERY[1][3];?></div>
                  <div id="after-cherk"><?=$REGALERY[8][3];?></div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-5 col-lg-4">
              <div class="block-header">
                  Галерея
              </div>
              <span class="helper">нажмите на картинку слева чтобы перейти в полный просмотр</span>
              <ul class="re-menu ver-menu">
                  <li class="btn btn-default btn-s re-anos" data-re="anos">Недострой от строительных хулиганов</li>
                  <li class="btn btn-default re-lamon" data-re="lamon">Унылый дом из оцилиндрованного бревна</li>
                  <li class="btn btn-default re-grib" data-re="grib">Реконструкция фасада</li>
                  <li class="btn btn-default re-kalug" data-re="kalug">Строеный-перестроеный дом</li>
                  <li class="btn btn-default re-krek" data-re="krek">Безликая коробка из пеноблоков</li>
                  <li class="btn btn-default re-bityag" data-re="bityag">Брутальный недострой из бревна</li>
                  <li class="btn btn-default re-shagan" data-re="shagan">Кирпичная коробка по типовому проекту</li>
                  <li class="btn btn-default re-krat" data-re="krat">Дом из ОЦБ по типовому проекту</li>
                  <li class="btn btn-default re-cherk" data-re="cherk">Надоевший фасад</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- RECONSTRUCTION OVERLAY -->
      <!-- BANNER -->
      <header id="home" class="banner" data-paroller-factor="0.6">
          <div class="wrapper">
              <div class="container">
                  <div class="text">
                      <p class="title">
                          СТРОИТЕЛЬНОЕ ОБЪЕДИНЕНИЕ
                      </p>
                      <p class="description">
                          Строительство домов от СТОЛЕТ -
                          комплексный подход от проекта до сдачи под&nbsp;ключ.
                      </p>
                  </div>
                  <a href="#contacts" class="btn btn-default btn-s">СВЯЗАТЬСЯ С НАМИ</a>
              </div>
          </div>
          <nav class="navbar">
              <div class="container-fluid">
                  <div class="navbar-header">
                      <a class="navbar-brand" href="#">
                          <img src="images/logo-white.png" alt="СТОЛЕТ ХОЛДИНГ" />
                      </a>
                  </div>
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="#home">В начало</a></li>
                      <li><a href="#services">Услуги</a></li>
                      <li><a href="#about">О нас</a></li>
                      <li><a href="#galery">Галерея</a></li>
                      <li><a href="#contacts">Контакты</a></li>
                      <li class="phone">
                          <a href="#">
                              <i class="fa fa-mobile" aria-hidden="true"></i>
                              <span id="phone-number">+7 499 611 40 58</span>
                          </a>
                      </li>
                  </ul>
              </div>
          </nav>
      </header>
      <!-- BANNER -->
      <!-- SERVICES -->
      <div id="services" class="services">
          <div class="wrapper">
              <div class="container">
                  <div class="block-header">
                      Наши услуги
                  </div>
                  <div class="sliders">
                      <div class="slide">
                          <div class="slide-header">
                              <img src="images/icon-pencil.png" alt="Проектиование" />
                              <span>ПРОЕКТИРОВАНИЕ</span>
                          </div>
                          <div class="description">
                              <p>
                                СТехнический прогресс не стоит на месте. Новые технологии активно внедряются во все сферы деятельности человека, в том числе и в строительство.
                              </p>
                              <p>
                                Не за горами время, когда дома будут не строить, а «печатать» с использованием 3D-принтеров. При этом строители многих специальностей, возможно, перепрофилируются в операторов этих устройств.
                              </p>
                              <p>
                                Необходимо отметить, что построить дом по такой технологии без тщательно проработанного проекта, а тем более «по самочувствию, из головы», просто невозможно, а следовательно роль проектировщиков не уменьшается, а становится еще более актуальной и значимой.
                              </p>
                              <p>
                                Успех разработки любого строительного проекта (будь то эскизный или рабочий проект здания, дизайн-проект ремонта вторичного жилья или офиса, дизайн-проект внутренней отделки загородного дома или квартиры со «свободной» планировкой) в огромной степени зависит от тесного творческого взаимодействия заказчика и коллектива специалистов, участвующих в процессе проектирования.
                              </p>
                              <p>
                                Такие подходы к проектированию всегда являлись основополагающими в деятельности нашей компании. Некоторые примеры результатов этой деятельности представлены в галерее наших работ.
                              </p>
                          </div>
                      </div>
                      <div class="slide">
                          <div class="slide-header">
                              <img src="images/icon-wood.png" alt="Строительство домов из дерева" />
                              <span>СТРОИТЕЛЬСТВО ДОМОВ ИЗ ДЕРЕВА</span>
                          </div>
                          <div class="description">
                              <p>
                                Строительство домов из дерева является традиционным для нашей страны.
                              </p>
                              <p>
                                Даже рубленый дом, построеный сотню лет назад продолжает верой и правдой служить своим владельцам при условии заботы о целостности кровли и фундамента.
                              </p>
                              <p>
                                В качестве строительного материала в современных деревянных домах чаще всего используют оцилиндрованное бревно и клееный брус. При условии надежного и долговечного кровельного покрытия и регулярной профилактической обработки наружных стен современными лакокрасочными материалами, такой дом послужит не только Вашим правнукам, но и более далеким потомкам.
                              </p>
                              <p>
                                При проектировании и строительстве домов из дерева, а также при выполнении внутренней отделки необходимо обязательно учитывать специфику древесины, а именно – усадочные процессы при высыхании строительного материала.
                              </p>
                              <p>
                                Наш опыт в разработке проектов и строительстве деревянных домов составляет более 20 лет. И сегодня мы с гордостью можем сказать , что в этой области мы достигли высокого профессионального уровня.
                              </p>
                          </div>
                          <a class="photos" data-change="galery-wood" href="#galery">
                              <i class="fa fa-camera" aria-hidden="true"></i>
                              фото работ
                          </a>
                      </div>
                      <div class="slide">
                          <div class="slide-header">
                              <img src="images/icon-brick.png" alt="Строительство домов из кирпича" />
                              <span>СТРОИТЕЛЬСТВО ДОМОВ ИЗ КИРПИЧА</span>
                          </div>
                          <div class="description">
                              <p>
                                  Кирпич – это надежный и экологичный строительный материал, котрорый никогда не терял своей привлекательности и актуальности.
                                  Приняв решение построить дом из кирпича Вы, несомненно, закладываете основу в долговечность и солидность Вашего сооружения.
                                  Данный строительный материал предоставляет Вам широкий спектр вариантов отделки фасадов дома, а также относительную свободу его внутренней планировки.
                                  При этом появляются дополнительные требования к фундаменту, в котором, как правило, появляются эксплуатируемые помещения, требования к межэтажным перекрытиям, которые обычно монтируются из монолитного бетона и т.д.
                              </p>
                              <p>
                                  Наши специалисты обладают достаточным опытом и знаниями, чтобы при Вашем непосредственном и активном участии спроектировать, а затем и построить Ваше будущее родовое гнездо, используя самые современные материалы и технологии.
                              </p>
                          </div>
                          <a class="photos" data-change="galery-stone" href="#galery">
                              <i class="fa fa-camera" aria-hidden="true"></i>
                              фото работ
                          </a>
                      </div>
                      <div class="slide">
                          <div class="slide-header">
                              <img src="images/icon-outside.png" alt="Строительство надворных построек" />
                              <span>НАДВОРНЫЕ ПОСТРОЙКИ</span>
                          </div>
                          <div class="description">
                              <p>
                                  При застройке загородного земельного участка важен комплексный подход. И начинать необходимо с разработки генерального плана участка, учитывая его ландшафтные особенности.
                                  Ведь, как правило, Ваше загородное имение – это не только дом и ограждение по периметру участка. Наверняка в Ваших планах застройки могут фигурировать баня, беседка, барбекю, навес для а/м, хозблок, водоем или уличный бассейн детская площадка или спортивный уголок и т.д.
                                  Никто не говорит, что необходимо все Ваши планы воплощать в жизнь одновременно, но все они  могут быть запланированы и должны быть отражены в генеральном плане застройки участка.
                              </p>
                              <p>
                                  Наши специалисты имеют богатый опыт проектирования и строительства надворных построек и организации ландшафта.
                                  Чтобы в этом убедиться, достаточно полистать фотогалерею наших работ.
                              </p>
                          </div>
                          <a class="photos" data-change="galery-outside" href="#galery">
                              <i class="fa fa-camera" aria-hidden="true"></i>
                              фото работ
                          </a>
                      </div>
                      <div class="slide">
                          <div class="slide-header">
                              <img src="images/icon-inside.png" alt="Отделка внутренних помещений" />
                              <span>ОТДЕЛКА ВНУТРЕННИХ ПОМЕЩЕНИЙ</span>
                          </div>
                          <div class="description">
                              <p>
                                Ничего из того, что создал человек, не существует вечно. Поэтому не удивительно если Ваш дом  или квартира со временем стали нуждаться в ремонте.
                              </p>
                              <p>
                                А если Вы приобрели квартиру в новостройке или строительство Вашего загородного дома приближается к финишу – неизбежно встает задача внутренней отделки помещений.
                              </p>
                              <p>
                                Вне зависимости от сложности и бюджета планируемых отделочных работ, возникает  целый комплекс взаимосвязанных задач: подбор материалов, сантехнического оборрудования, приборов освещения, мебели и т.д.
                              </p>
                              <p>
                                Наконец – выбор квалифицированных исполнителей, которые все расставят по своим местам.
                              </p>
                              <p>
                                Если у Вас есть готовый дизайн-проект или Вы сами готовы выступить в роли дизайнера, наши специалисты-отделочники воплотят Ваши творческие замыслы и идеи в жизнь.
                              </p>
                              <p>
                                А если это потребуется, наши дизайнеры разработают проект интерьеров, который будет максимально учитывать Ваши пожелания и обеспечит эргономичность и удобство Вашего жилища.
                              </p>
                          </div>
                          <a class="photos" data-change="galery-inter" href="#galery">
                              <i class="fa fa-camera" aria-hidden="true"></i>
                              фото работ
                          </a>
                      </div>
                      <div class="slide">
                          <div class="slide-header">
                              <img src="images/icon-re.png" alt="Реконструкция" />
                              <span>РЕКОНСТРУКЦИЯ</span>
                          </div>
                          <div class="description">
                              <p>
                                  Причины, по которым владелец дома может задуматься о необходимости реконструкции могут быть различными, например:
                                  Вы приобрели загородный дом, построенный по типовому проекту, пожили в нем и «не подружились» с его планировкой и фасадом.
                                  Вы приобрели недостроенное сооружение.
                                  Вы получили в наследство или приобрели земельный участок с еще «крепким», но не отвечающим Вашим потребностям домом.
                              </p>
                              <p>
                                  Процесс реконструкции включает следующую последовательность шагов:
                                  <ul>
                                      <li>Оценка текущего состояния конструкций сооружениия, выявление допущенных при его проектировании и строительстве промахов и  ошибок, определение ущерба, нанесенного элементам сооружения беспощадным временем.</li>
                                      <li>Подготовка проекта реконструкции объекта, максимально учивающего идеи и пожелания владельца по изменению планировочных решений и внешнего облика сооружения. </li>
                                      <li>Подготовка и согласование сметной документации .</li>
                                      <li>Воплощение в жизнь Ваших идей и технических решений, сформулированных в проекте реконструкции.</li>
                                  </ul>
                              </p>
                              <p>
                                  Наши специалисты (архитекторы, конструкторы, строители) обладают реальным опытом в области реконструкции загородных домов и способны превратить Ваши мечты в реальность.
                              </p>
                          </div>
                          <a class="photos-re" href="#">
                              <i class="fa fa-camera" aria-hidden="true"></i>
                              фото работ
                          </a>
                      </div>
                      <div class="slide">
                          <div class="slide-header">
                              <img src="images/icon-sys.png" alt="Реконструкция" />
                              <span>МОНТАЖ ИНЖЕНЕРНЫХ СИСТЕМ</span>
                          </div>
                          <div class="description">
                              <p>
                                  <b>
                                      Современный загородный дом или городская квартира – это не только стены, кровля и интерьер.
                                      Это целый комплекс сложных инженерных систем.
                                  </b>
                              </p>
                              <p>
                                  <center><b>Для загородного дома.</b></center><br>
                                  <u>Наружные сети:</u>
                                  <ul>
                                      <li>Подключение внутренних канализационных магистралей к поселковой (городской) канализации или монтаж автономных очистных сооружений (септика).</li>
                                      <li>Уличное освещение и прокладка сетей электроснабжения надворных построек и прочих потребителей (въездные ворота, насосное оборудование и т.п.)</li>
                                      <li>Подключение дома к поселковой сети водоснабжения или обеспечение индивидуального источника водоснабжения (скважина, колодец), обеспечение холодной и горячей водой надворных построек.</li>
                                      <li>Монтаж пристенного или обводного дренажа фундамента.</li>
                                      <li>Монтаж ливневой канализации, дренажной и поливочной системы участка.</li>
                                      <li>Монтаж систем видеонаблюдения и охранных систем. Подключение дома и надворных построек к поселковым слаботочным сетям (интернет, телефон, телевидение).</li>
                                  </ul>
                                  <u>Внутренние инженерные системы:</u>
                                  <ul>
                                      <li>Сети электроснабжения и освещения.</li>
                                      <li>Отопление и вентиляция и (или) кондиционирование.</li>
                                      <li>Водоснабжение и канализация.</li>
                                      <li>Слаботочные сети (TV, интернет, видеонаблюдение, сигнализация и т.д.).</li>
                                      <li>Резервное электроснабжение (электрогенератор или инвертор).</li>
                                      <li>Альтернативные источники электроснабжения (солнечные батареи и пр.).</li>
                                  </ul>
                              </p>
                              <p>
                                  <center><b>Для квартиры.</b></center>
                                  Как правило, масштабы решаемых задач существенно меньше, поскольку приходится заниматься только внутренними инженерными сетями.
                              </p>
                              <p>
                                  <b>
                                      Наш опыт позволяет смонтировать системы жизнеобеспечения Вашего объекта на самом высоком и современном уровне.
                                  </b>
                              </p>


                          </div>
                          <a class="photos" data-change="galery-sys" href="#galery">
                              <i class="fa fa-camera" aria-hidden="true"></i>
                              фото работ
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- SERVICES -->
      <!-- ABOUT -->
      <div id="about" class="about">
          <div class="wrapper">
              <div class="container">
                  <div class="row">
                      <div class="col-xs-6 col-md-6 col-lg-6">
                          <div class="block-header">
                              О нашей компании
                          </div>
                          <div class="text">
                              <p>
                                  Компания ООО “Столет-Холдинг” работает на рынке малоэтажного загородного строительства с 1993 года.
                              </p>
                              <p>
                                  Мы специализируемся на строитлеьстве по индивидуальным проектам респектабельных и комфортных коттеджей и загородных домов, на ремонте и реконструкции сооружений, а так же ремонте и отделке квартир в Москве и Московской области.
                              </p>
                              <p>
                                  Вдумчивый подход к проектированию и строительству Вашего загородного дома, или городской квартиры - основа деятельности нашей компании.
                              </p>
                              <p>
                                  Будьте уверены в наших специалистах, мы с Вами найдем то решение, которое идеально подойдет Вам, а мы воплотим его в жизнь.
                              </p>
                              <a class="btn btn-default btn-s" href="#contacts">СВЯЗАТЬСЯ</a>
                          </div>
                      </div>
                      <div class="col-xs-6 col-md-6 col-lg-6">
                          <div class="license">
                              <img src="images/license.jpg">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- ABOUT -->
      <!-- GALERY -->
      <div id="galery" class="galery">
          <div class="wrapper">
              <div class="container-fluid">
                  <div class="col-xs-7 col-md-7 col-lg-7">
                      <div class="big-image" itemscope itemtype="http://schema.org/ImageGallery">
                          <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                              <a href="images/portfolio/wood/1.jpg" itemprop="contentUrl">
                                  <img src="images/portfolio/wood/1.jpg" itemprop="thumbnail" alt="Деревянный дом Photo: Stolet" />
                              </a>
                              <figcaption itemprop="caption description">
                                  <span class="description">Баня</span>
                                  <span itemprop="copyrightHolder">Photo: Stolet</span>
                              </figcaption>
                          </figure>
                      </div>
                      <div class="re">
                              <div class="col-xs-12 col-md-6 col-lg-6">
                                  Было

                              </div>
                              <div class="col-xs-12 col-md-6 col-lg-6">
                                  Стало

                              </div>
                      </div>
                  </div>
                  <div class="col-xs-5 col-md-5 col-lg-5">
                      <div class="block-header">
                          Галерея
                      </div>
                      <span class="helper">нажмите на картинку слева чтобы перейти в полный просмотр</span>
                      <ul class="galery-menu ver-menu">
                          <li class="btn btn-default btn-s galery-all" data-galery="all">Все проекты</li>
                          <li class="btn btn-default galery-wood" data-galery="wood">Деревянные дома</li>
                          <li class="btn btn-default galery-stone" data-galery="stone">Каменные дома</li>
                          <li class="btn btn-default galery-inter" data-galery="inter">Интерьер</li>
                          <li class="btn btn-default galery-outside" data-galery="outside">Надворные постройки</li>
                          <li class="btn btn-default galery-re" data-galery="re">Реконструкция</li>
                          <li class="btn btn-default galery-sys" data-galery="sys">Инженерные системы</li>
						  <li class="btn btn-default galery-work" data-galery="work">В процессе работы</li>
                      </ul>
                  </div>
                  <?php

                    function generateThumb($dirname, $alt)
                    {
                      $figure = "<figure itemprop=\"associatedMedia\" itemscope itemtype=\"http://schema.org/ImageObject\">";
                      $figureclose = "</figure>";
                      $linkclose = "</a>";
                      $content = "";

                      $dir = 'images/portfolio/' . $dirname;
                      $thumbs = scandir($dir . '_preview');
                      foreach($thumbs as $index => $name)
                      {
                        if($name != '.' && $name != '..') {
                          $size = getimagesize($dir . "/" . $name);
                          $link = "<a data-size=\"" . $size[0] . 'x' . $size[1] . "\" href=\"" . $dir . "/" . $name . "\" itemprop=\"contentUrl\">";
                          $img = "<img src=\"" . $dir . "_preview/" . $name . "\" alt=\"$alt\" />";
                          $content .= $figure . $link . $img . $linkclose . $figureclose . "\n";
                        }
                      }

                      return $content;
                    }


                    $PORTFOLIO['wood'] = generateThumb('wood', 'Деревянный дом');
                    $PORTFOLIO['stone'] = generateThumb('stone', 'Каменный дом');
                    $PORTFOLIO['outside'] = generateThumb('outside', 'Надворные постройки');
					$PORTFOLIO['inter'] = generateThumb('inter', 'Внутренняя отделка');
                    $PORTFOLIO['sys'] = generateThumb('sys', 'Инженерные системы');
					$PORTFOLIO['work'] = generateThumb('work', 'В процессе работы');
                    $PORTFOLIO['all'] =
                      $PORTFOLIO['wood'] .
                      $PORTFOLIO['stone'] .
                      $PORTFOLIO['outside'] .
                      $PORTFOLIO['inter'] .
					  $PORTFOLIO['sys'] .
                      $PORTFOLIO['work'];

                   ?>
                  <div class="thumbs thumbs-all thumbs-active col-xs-12 col-md-12 col-lg-12" itemscope itemtype="http://schema.org/ImageGallery"><?=$PORTFOLIO['all'];?></div>
                  <div class="thumbs thumbs-wood col-xs-12 col-md-12 col-lg-12" itemscope itemtype="http://schema.org/ImageGallery"><?=$PORTFOLIO['wood'];?></div>
                  <div class="thumbs thumbs-stone col-xs-12 col-md-12 col-lg-12" itemscope itemtype="http://schema.org/ImageGallery"><?=$PORTFOLIO['stone'];?></div>
                  <div class="thumbs thumbs-outside col-xs-12 col-md-12 col-lg-12" itemscope itemtype="http://schema.org/ImageGallery"><?=$PORTFOLIO['outside'];?></div>
                  <div class="thumbs thumbs-inter col-xs-12 col-md-12 col-lg-12" itemscope itemtype="http://schema.org/ImageGallery"><?=$PORTFOLIO['inter'];?></div>
                  <div class="thumbs thumbs-sys col-xs-12 col-md-12 col-lg-12" itemscope itemtype="http://schema.org/ImageGallery"><?=$PORTFOLIO['sys'];?></div>
				  <div class="thumbs thumbs-work col-xs-12 col-md-12 col-lg-12" itemscope itemtype="http://schema.org/ImageGallery"><?=$PORTFOLIO['work'];?></div>
			  </div>
          </div>
      </div>
      <!-- GALERY -->
      <!-- CONTACTS -->
      <div id="contacts" class="contacts" data-paroller-factor="0.4">
          <div class="wrapper">
              <div class="container">
                  <div class="block-header">
                      Свяжитесь с нами
                  </div>
                  <div class="appeal">
                      Оставьте Ваше сообщение и наш менеджер свяжется с Вами в <br> ближайшее время!
                  </div>
              </div>
          </div>
      </div>
      <div class="overlay"></div>
      <div class="contact-us">
          <div class="wrapper">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-xs-12 col-md-6 col-lg-6 contact-form">
                          <form action="mail.php" method="POST">
                              <div class="form-group">
                                  <input type="text" class="form-control" id="name" placeholder="Как нам к Вам обращаться? (ФИО)" required>
                              </div>
                              <div class="form-group">
                                  <input type="email" class="form-control" id="email" placeholder="Ваш email адрес">
                              </div>
                              <div class="form-group">
                                  <input onfocusout="validate()" type="text" class="form-control" id="tel" placeholder="Ваш контактный телефон (без кода)" required>
                                  <span id="wrong-number">Некорректный номер. Введите номер вида 499 611 40 58 </span>
                              </div>
                              <div class="form-group">
                                  <textarea class="form-control" rows="7" id="comment" placeholder="Ваш комментарий"></textarea>
                              </div>
                              <div class="checkbox">
                                  <input id="checkb" type="checkbox" value="none" name="check" required checked>
                                  <label class="control-label">
                                      <a href="#popup">Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных в Согласии на обработку персональных данных</a>
                                  </label>
                              </div>
                              <button type="submit" id="sub-form" class="btn btn-default btn-s">Оставить заявку</button>
                          </form>
                      </div>
                      <div class="col-xs-12 col-md-6 col-lg-6 data">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1590.5873297028993!2d37.62931666223193!3d55.68150850597438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414ab35688ae14e7%3A0xc659dceb8a95c915!2z0J3QsNCz0LDRgtC40L3RgdC60LDRjyDRg9C7LiwgM9CQLCDQnNC-0YHQutCy0LAsIDExNzEwNQ!5e0!3m2!1sru!2sru!4v1506878509739" width="100%" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
                          <div class="specified">
                              <span>КОНТАКТЫ</span>
                              <ul>
                                  <li>
                                      <i class="fa fa-home" aria-hidden="true"></i>
                                      г. Москва, ул. Нагатинская, 3Ф, 117105
                                  </li>
                                  <li>
                                      <i class="fa fa-phone" aria-hidden="true"></i>
                                      8 (499) 611 40 58
                                  </li>
                                  <li>
                                      <i class="fake"></i>
                                      8 (499) 611 15 48
                                  </li>
                                  <li>
                                      <i class="fa fa-envelope" aria-hidden="true"></i>
                                      <a href="mailto:stolet@stolet.ru">stolet@stolet.ru</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <footer>
          <div class="wrapper">
              <div class="container-fluid">
                  <span class="copyright">
                      © 2003-2017 Stolet все права защищены
                  </span>
                  <ul class="social">
                      <li><i class="fa fa-vk" aria-hidden="true"></i></li>
                      <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                      <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                  </ul>
              </div>
          </div>
      </footer>
      <!-- CONTACTS -->
      <!-- Root element of PhotoSwipe. Must have class pswp. -->
      <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

          <!-- Background of PhotoSwipe.
               It's a separate element as animating opacity is faster than rgba(). -->
          <div class="pswp__bg"></div>

          <!-- Slides wrapper with overflow:hidden. -->
          <div class="pswp__scroll-wrap">

              <!-- Container that holds slides.
                  PhotoSwipe keeps only 3 of them in the DOM to save memory.
                  Don't modify these 3 pswp__item elements, data is added later on. -->
              <div class="pswp__container">
                  <div class="pswp__item"></div>
                  <div class="pswp__item"></div>
                  <div class="pswp__item"></div>
              </div>

              <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
              <div class="pswp__ui pswp__ui--hidden">

                  <div class="pswp__top-bar">

                      <!--  Controls are self-explanatory. Order can be changed. -->

                      <div class="pswp__counter"></div>

                      <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                      <button class="pswp__button pswp__button--share" title="Share"></button>

                      <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                      <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                      <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                      <!-- element will get class pswp__preloader--active when preloader is running -->
                      <div class="pswp__preloader">
                          <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                              <div class="pswp__preloader__donut"></div>
                            </div>
                          </div>
                      </div>
                  </div>

                  <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                      <div class="pswp__share-tooltip"></div>
                  </div>

                  <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                  </button>

                  <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                  </button>

                  <div class="pswp__caption">
                      <div class="pswp__caption__center"></div>
                  </div>
              </div>
          </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="js/paroller.js"></script>
      <script src="js/slick.js"></script>
      <script src="js/photoswipe.js?v=2"></script>
      <script src="js/photoswipe-ui.js?v=2"></script>
      <script src="js/initapp.js?v=2"></script>
  </body>
</html>

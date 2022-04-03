<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>
    <!-- normalize flie  -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- font icon file  -->
    <link rel="stylesheet" href="css/all.min.css">
    <!--  google font  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
     <!-- main css files  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- change language  -->
    <link rel="stylesheet" href="css/arblan.css">
    <!-- media  -->
    <link rel="stylesheet" href="css/media.css">
</head>
<body>
    <!-- start  header  -->
    <header>
        <!-- start nav  -->
        <div class="container head-top">
            <div class="colum">
                <div class="row">
                    <nav>
                        <ul>
                            <li id="open-pop-wind"><a href=""class="bold">
                                <span class="js-color"><i class="fas fa-user"></i></span>
                                <span class="js-color">ادخل لحسابك أو سجل الان</span>
                                </a>
                             </li>
                             <li><a href="">
                                <span>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span>المفضلة</span>
                                </a>
                             </li>
                             <li><a href="">
                                <span>
                                    <i class="fas fa-truck"></i>
                                </span>
                                <span>تتبع الشحنة</span>
                                </a>
                             </li>
                             <li><a href="">
                                <span>
                                    <i class="fas fa-shield-alt"></i>
                                </span>
                                <span>طلبات الصيانة</span>
                                </a>
                             </li>
                             <li><a href="">
                                <span>
                                    <i class="fas fa-info-circle"></i>
                                </span>
                                <span>المساعدة</span>
                                </a>
                             </li>
                             <li><a href="">
                                <span>
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                <span>فروعنا</span>
                                </a>
                             </li>
                             <li><a href="">
                                <span>
                                   <img src="images/Flag_of_Saudi_Arabia.svg.png" alt="" srcset="" width="15px" height="15px">
                                </span>
                                <span>المملكة العربية السعودية/ ر.س</span>
                                </a>
                             </li>
                             <li id="lang">
                                <span>English</span>
                                <span><i class="fas fa-language"></i></span>                           
                                
                             </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end nav -->
        <div class="container">
            <div class="colum">
               
                <div class="row h-r-2">
                    <div class="humprgar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="logo">
                        <img src="images/logo.svg" alt="logo" srcset="">
                    </div>
                    <div class="search">
                        <input type="text" placeholder="البحث" id="input-search">
                        <i class="fas fa-search"></i>
                        <div class="search-link">
                            <ul>
                                <li><a href="">ايفون</a></li>
                                <li><a href="">سماعات</a></li>
                                <li><a href="">ساعة ابل</a></li>
                                <li><a href="">ايباد</a></li>
                                <li><a href="">هواوي</a></li>
                                <li><a href="">سامسونج</a></li>
                                <li><a href="">تلفزيون</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="basket" id="shoping-cart">
                        <a href="ckickout.html"> <i class="fas fa-shopping-cart"></i></a>
                        <span id="counter">0</span>
                    </div>
                </div>
                <div class="row list">
                    <ul>
                        <li><a href="catgery.html" class="bold">
                            جميع الاقسام
                            <i class="fas fa-sort-down"></i>
                        </a></li>
                        <li><a href=""class="bold">
                            تصفح بالعلامة التجارية
                            <i class="fas fa-sort-down"></i>
                        </a></li>
                        <li><a href="">تذاكر جرير</a></li>
                        <li><a href="">حصرياً</a></li>
                        <li><a href="">العروض الاسبوعية</a></li>
                        <li><a href="">وصل حديثاً</a></li>
                        <li><a href="">المنتجات المجددة</a></li>
                    </ul>
                </div>
                <div class="timer ">
                    <span>عروضنا مستمرة لمدة</span>
                    <span id="days"></span> 
                    <span> يوم</span>   <span id="hours"></span>
                    <span>ساعة</span>   <span id="minutes"></span>
                    <span>دقيقة</span>   <span id="seconds"></span>
                    <span>ثانية</span>
                </div>
            </div>
        </div>
    </header>
    <!-- end headre  -->

    <!-- start main  -->
    <main>
        <!-- strat top pag content slider and login window-->
        <div class="container" id="con-refrech">
            <!-- strat image animation using css -->
            <div class="anim-images" id="js-hiddin">
                
            </div>
            <!-- ennd image animation using css -->
            
            <!-- strat login window  -->
            <div class="login" id="login">
                <h1>تسجيل الدخول أو انشاء حساب جديد</h1>
                <span id="close-wind">X</span>
                <div class="timer">
                 <span>الوقت المتبقي لتسجيل</span>
                <span id="days"></span> 
                 <span> يوم</span>   <span id="hours"></span>
                 <span>ساعة</span>   <span id="minutes"></span>
                 <span>دقيقة</span>   <span id="seconds"></span>
                 <span>ثانية</span>
                </div>
                <div class="row">
                    <div class="col">
                        <h1 class="bo-right" id="show-right" onclick="showright()">تسجيل الدخول</h1>
                        <form action="" class="fo-right" id="wind-right">
                            <div>
                                <h1>البريد الالكتروني  او رقم الجوال</h1>
                               <input type="text">
                            </div>
                            <div>
                               <h1>كلمة السر</h1>
                               <div class="lock">
                                <input type="text">
                                <a href="http://">نسيت؟</a>
                               </div>
                            </div>
                            <div class="btn-form">
                                <input type="button" value="تسجيل الدخول" class="btn-send">
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <h1 class="bo-left" id="show-left" onclick="showleft()">أنشاء حساب</h1>
                        <form action="" class="fo-left" id="wind-left">
                            <div>
                                <div class="num">
                                    <h1>       رقم الجوال</h1>
                                    <input type="text">
                                </div>
                                <div class="num">
                                    <span>رمز البلد</span>
                                    <br>
                                   <br>
                                    <div>
                                        <span>
                                            <i></i>
                                        </span>
                                        <span>+970</span>
                                        <span>
                                            <img src="images/Flag_of_Saudi_Arabia.svg.png" alt="" srcset="">
                                        </span>
                                    </div> 
                                </div>
                            </div>
                            <p>سوف ترسل لك <span>رمز التحقق عن طريق رسالة نصية</span></p>
                            <div class="massage-input">
                                <h1>ارسال رمز التحقق</h1>
                                <input type="text">
                            </div>
                            <div>
                                <h1>الاسم الاول </h1>
                               <input type="text">
                            </div>
                            <div>
                                <h1> اسم العائلة</h1>
                               <input type="text">
                            </div>
                            <div>
                                <h1>البريد الالكتروني       </h1>
                               <input type="text">
                            </div>
                            <div>
                                <h1>  تأكيد البريد الالكتروني </h1>
                               <input type="text">
                            </div>
                            <div>
                                <h1>   كلمة السر </h1>
                               <input type="text">
                            </div>
                             <div class="checked">
                                 <div>
                                    <i class="fas fa-check"></i>
                                 </div>
                                 <label for="">اوافق على <a href="">
                                     الشروط والاحكام
                                 </a></label>
                             </div>
                             <div class="checked">
                                <div>
                                    <i class="fas fa-check"></i>
                                </div>
                                <label for=""> التسجيل للانضمام للنشرة البريدية</label>
                            </div>
                            <div class="btn-form">
                               <input type="button" value="تسجيل الدخول" class="btn-send btn-new">
                            </div>
                        </form>
                         
                    </div>
                </div>
            </div>
            <!-- end login window  -->

        </div>
        <!-- end top pag content slider and login window-->

        <!-- content page -->
        <div class="container container-content  ">
             <!-- start content  and details content -->
             <div class="content cat">
                 <div>
                     <ul>
                         <li><a href="">الرئيسية</a></li>
                         <li><a href="">الكتب العربية</a></li>
                         <li><a href="">كتب الكترونية</a></li>
                         <li><a href="">   لانك الله كتب الالكتروني</li>
                     </ul>
                     
                 </div>
                 <!-- strat details -->
                <div class="grid-cat grid-details">
                    <div class="grid-right">
                      <img src="images/b-1.jpg" alt="" srcset="">
                      <br>
                      <ul>
                          <li><img src="images/b-1.jpg" alt="" srcset=""></li>
                          <li><img src="images/b-1.jpg" alt="" srcset=""></li>
                          <li><img src="images/b-1.jpg" alt="" srcset=""></li>
                      </ul>
                    </div>
                    <div class="grid-center">
                        <h1 class="title-book">لانك الله (كتاب الكتروني)</h1>
                          <a href="" class="more-view">عرض المزيد
                            <i class="fas fa-sort-down"></i>
                          </a>
                          <h2>
                              12.99 <span>ر.س</span>
                          </h2>
                          <p>شامل الضريبة</p>
                            <div>
                                <div class="txt">
                                    <h2>وحدة البيع Each</h2>
                                    <div class="icons">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>
                                            (15 المراجعات)
                                        </span>
                                    </div>
                                    <h2>
                                        رقم الصنف <span class="num-pro-de">JBB410156 </span>
                                        <span>
                                            رقم المنتج
                                        </span>
                                        <span class="num-pro">4</span>
                                    </h2>
                                </div>
                                
                                <div class="grid-conf">
                                    <h2>الصيغ المتوفرة</h2>
                                    <div class="flew-row">
                                       <div>
                                            <input type="radio" id="book-alc" name="selc" checked>
                                            <label for="book-alc">كتاب الكتروني 
                                                <span>?</span>
                                            </label>
                                       </div>
                                        <div class="prices">
                                            <h2>
                                                12.99
                                                <span>ر.س</span>
                                            </h2>
                                            <p>شامل الضريبة</p>
                                        </div>
                                      
                                    </div>
                                    <div class="flew-row">
                                        <div>
                                             <input type="radio" id="book-alc" name="selc" checked>
                                             <label for="book-alc">كتاب الكتروني 
                                                 <span>?</span>
                                             </label>
                                        </div>
                                         <div class="prices">
                                             <h2>
                                                 12.99
                                                 <span>ر.س</span>
                                             </h2>
                                             <p>شامل الضريبة</p>
                                         </div>
                                       
                                     </div>
                                </div>
                            </div>
                    </div>
                    <div class="grid-left">
                        <div>
                            <div class="txt">
                                <p>
                                    <span>ملاحظة :</span>
                                    هذا المنتج رقمي وسيتم توصيله من خلال البريد الالكتروني
                                  <br>  <a href="">كيفية الحصول على المنتج</a>
                                </p>
                            </div>
                            <div>
                                <select name="" id="">
                                    <option value="1">1</option>
                                </select>
                                <button>
                                  <i class="fas fa-shopping-cart"></i>
                                  <span>اضف الى السلة</span>
                                </button>
                            </div>
                            <div>
                                <h3>
                                    <i class="fas fa-shopping-cart"></i>
                                    <span>تسوق امن</span>
                                    <span class="qution">?</span>
                                </h3>
                                <h3>
                                    <i class="fas fa-shopping-cart"></i>
                                    <span>تسوق امن</span>
                                    <span class="qution">?</span>
                                </h3>
                                <h3>
                                    <i class="fas fa-shopping-cart"></i>
                                    <span>تسوق امن</span>
                                    <span class="qution">?</span>
                                </h3>
                            </div>
                            <div>
                                <button>
                                    <i class="fas fa-shopping-cart"></i>
                                    <span>مشاركة</span>
                                </button>
                                <button>
                                    <i class="fas fa-shopping-cart"></i>
                                    <span>مشاركة</span>
                                </button>
                                <button>
                                    <i class="fas fa-shopping-cart"></i>
                                    <span>مشاركة</span>
                                </button>
                            </div>
                        </div>
                        <div>
                            
                                <button>
                                    <i class="fas fa-shopping-cart"></i>
                                    <span>مشاركة</span>
                                </button>
                                <button>
                                    <i class="fas fa-shopping-cart"></i>
                                    <span>مشاركة</span>
                                </button>
                                <button>
                                    <i class="fas fa-shopping-cart"></i>
                                    <span>مشاركة</span>
                                </button>
                             
                        </div>
                       
                    </div>
                </div>
                 <!-- end details -->
            </div>
            <!-- end content  -->
        </div>
    </main>
    <!-- end main  -->


    <!-- start footer  -->
    <footer>
        <div class="container">
            <div class="row one">
                <div class="colum">
                    <div class="txt bold">
                        انضم الى نشرتننا البريدية
                    </div>
                    <form action="#">
                        <div class="input-txt">
                            <input type="email" placeholder="ادخل بريدك الالكتروني">
                            <i class="fas fa-lock"></i>
                        </div>
                        <button>
                            اشتراك
                        </button>
                    </form>
                </div>
                
                <div class="colum">
                    <div class="txt bold">
                        خدمة العملاء
                    </div>
                    <ul>
                        <li><a href="">مبيعاات الشركات</a></li>
                        <li><a href="">الاسئلة المتكررة</a></li>
                        <li><a href="">دليل التسوق والمطبوعات</a></li>
                        <li><a href="">مواقع المعارض</a></li>
                        <li><a href="">سياسة الضمان</a></li>
                        <li><a href="">سياسية الاسترجاع والاستبدال</a></li>
                        <li><a href="">اتصل بنا></a></li>
                        <li><a href="" class="bold">920000089</a></li>
                    </ul>
                </div>
                <div class="colum">
                    <div class="txt bold">
                           خدمات جرير
                    </div>
                    <ul>
                        <li><a href="">تذاكر جرير</a></li>
                        <li><a href="">خدمات مابعد البيع</a></li>
                        <li><a href="">خددمة الحماية الشاملة</a></li>
                        <li><a href="">خدمة تمديد الضمان</a></li>
                        <li><a href="">حماية اجهزة ابل</a></li>
                        <li><a href="">بطاقة خصمم جرير</a></li>
                        <li><a href="">بطاثة جرير للهدايا</a></li>
                    </ul>
                </div>
                <div class="colum">
                    <div class="txt bold">
                           رواابط سريعة
                    </div>
                    <ul>
                        <li><a href="">اصددارات جرير</a></li>
                        <li><a href="">قارى جرير</a></li>
                        <li><a href="">شركاء برامج المكافئات</a></li>
                        <li><a href="">خدمات شركات الاتصالات</a></li>
                    </ul>
                </div>
                <div class="colum">
                    <div class="txt bold">
                        عن جرير
                    </div>
                    <ul>
                        <li><a href="">من نحن</a></li>
                        <li><a href="">الحوكمة</a></li>
                        <li><a href="">علاقات المستثمرين والتقارير</a></li>
                        <li><a href="">الاستدامة</a></li>
                        <li><a href="">الاخبار</a></li>
                        <div class="txt bold">
                            فرص العمل
                         </div>
                    </ul>
                   
                </div>
            </div>
            <div class="row tow">
                <div class="colum">
                    <div class="txt  tow">
                        تواصل معنا
                    </div>
                </div>
            </div>
            <div class="row three">
                <div class="icons">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-tiktok"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-snapchat-ghost"></i>
                    <i class="fab fa-linkedin-in"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                 </div>
            </div>
        </div>
        <div class="container payments">
            <div class="pay">
                <img src="images/visa.png" alt="">
                <img src="images/qitaf.png" alt="">
                <img src="images/master.png" alt="">
                <img src="images/mada.jpg" alt="">
                <img src="images/american-express.png" alt="">
             </div>
            <div class="txt">
                <p> سياسة الخصوصية  | شروط الخدمة
                    <br>
                    جميع الحقوق محفوظة لمكتبة &copy; 2015 س.ت.1010032264.اونلاين س.ت.1010654213
                </p>
            </div>
        </div>
    </footer>
    <!-- end footer  -->
    <script src="js/main.js"></script>
    <script src="js/search.js"></script>
</body>
</html>
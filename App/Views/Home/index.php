<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
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
        <div class="container head-top">
            <div class="colum">
                <div class="row">
                    <nav>
                        <ul>
                            <li id="open-pop-wind"><a href="login.php"class="bold">
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

    <!-- start maiin  -->
    <main>
        <div class="container" id="con-refrech">
            <!-- strat image animation using css -->
          
            <div class="anim-images" id="js-hiddin">
                
            </div>
            <!-- strat login window  -->
            <div class="login" id="login">
                <h1>تسجيل الدخول أو انشاء حساب جديد</h1>
                <span id="close-wind">X</span>
                <div class="row">
                    <div class="col">
                        <h1 class="bo-right" id="show-right" onclick="showright()">تسجيل الدخول</h1>
                    </div>
                    <div class="col">
                        <h1 class="bo-left" id="show-left" onclick="showleft()">أنشاء حساب</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="dis-none-right">
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
                    <div class="col" id="dis-none-left">
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
        </div>
        <div class="container container-content ">
             <!-- start content  -->
             <div class="content">
                <div class="row">
                    <h1>
                   1     تصفح حسب القسم
                    </h1>
                </div>
                <div class="slide">
                    <div class="move">
                        <i class="fas fa-chevron-right move-right " id="move-right"></i>
                        <i class="fas fa-chevron-left move-left"  id="move-left"></i>
                    </div>
                    <div class="slider">
                   
                        <div class="con-img">
                            <div class="row icons-image secion1">
                                <a href="" class="prod">
                                    <img src="images/e1.webp" alt="" srcset="">
                                </a>
                               <a href="" class="prod">
                                    <img src="images/3-SchoolSuppliesARWeb.webp" alt="" srcset="">
                                </a>
                               <a href="" class="prod">
                                    <img src="images/e2.webp" alt="" srcset="">
                                </a>
                               <a href="" class="prod">
                                    <img src="images/e3.webp" alt="" srcset="">
                                </a>
                               <a href="" class="prod">
                                    <img src="images/e4.webp" alt="" srcset="">
                                </a>
                               <a href="" class="prod">
                                    <img src="images/e5.webp" alt="" srcset="">
                                </a>
                               <a href="" class="prod">
                                    <img src="images/e6.webp" alt="" srcset="">
                                </a>
                               <a href="" class="prod">
                                    <img src="images/e1.webp" alt="" srcset="">
                                </a>
                               <a href="" class="prod">
                                    <img src="images/3-SchoolSuppliesARWeb.webp" alt="" srcset="">
                                </a>
                               <a href="" class="prod">
                                    <img src="images/e2.webp" alt="" srcset="">
                                </a>
                               <a href="" class="prod">
                                    <img src="images/e3.webp" alt="" srcset="">
                                </a>
                               <a href="" class="prod">
                                    <img src="images/e4.webp" alt="" srcset="">
                                </a>
                               <a href="" class="prod">
                                    <img src="images/e5.webp" alt="" srcset="">
                                </a>
                               <a href="" class="prod">
                                    <img src="images/e6.webp" alt="" srcset="">
                                </a>
                            </div>
                        </div>
                       
                    </div>
                </div>
               
                <div class="row  ads">

                </div>
                 
               
                <div class="row">
                    <h1>
                        تصفح حسب القسم
                    </h1>
                </div>
                <div class="slide">
                    <div class="move">
                        <i class="fas fa-chevron-right move-right " id="move-right"></i>
                        <i class="fas fa-chevron-left move-left"  id="move-left"></i>
                    </div>
                    <div class="slider">
                  
                        <div class="con-img">
                            <div class="row icons-image lo-flex">
                                <div class="prodc">
                                    <img src="images/books/book1.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب ثقافية</span>
                                        </h1>
                                        <div class="likes">
                                            
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب رياضية)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book2.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب علمية</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب ديننية)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book3.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-lock">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب مرح</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب رويات)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book4.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب قصص وعبر</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب  علمية)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book5.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب الكتروني</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب الكتروني)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book6.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب الكتروني</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب الكتروني)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book7.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب الكتروني</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب الكتروني)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book8.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب الكتروني</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب الكتروني)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <h1>
                        تصفح حسب القسم
                    </h1>
                </div>
                <div class="slide">
                    <div class="move">
                        <i class="fas fa-chevron-right move-right " id="move-right"></i>
                        <i class="fas fa-chevron-left move-left"  id="move-left"></i>
                    </div>
                    <div class="slider">
                  
                        <div class="con-img">
                            <div class="row icons-image lo-flex">
                                <div class="prodc">
                                    <img src="images/books/book9.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب ثقافية</span>
                                        </h1>
                                        <div class="likes">
                                            
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب رياضية)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book10.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب علمية</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب ديننية)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book11.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب مرح</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب رويات)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book12.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب قصص وعبر</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب  علمية)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book1.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب الكتروني</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب الكتروني)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book2.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب الكتروني</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب الكتروني)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book3.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب الكتروني</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب الكتروني)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book4.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب الكتروني</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب الكتروني)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h1>
                        تصفح حسب القسم
                    </h1>
                </div>
                <div class="slide">
                    <div class="move">
                        <i class="fas fa-chevron-right move-right " id="move-right"></i>
                        <i class="fas fa-chevron-left move-left"  id="move-left"></i>
                    </div>
                    <div class="slider">
                  
                        <div class="con-img">
                            <div class="row icons-image lo-flex">
                                <div class="prodc">
                                    <img src="images/books/book5.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب ثقافية</span>
                                        </h1>
                                        <div class="likes">
                                            
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب رياضية)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book6.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب علمية</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب ديننية)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book7.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب مرح</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب رويات)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book8.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب قصص وعبر</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب  علمية)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book9.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب الكتروني</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب الكتروني)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book10.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب الكتروني</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب الكتروني)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book11.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب الكتروني</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب الكتروني)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                                <div class="prodc">
                                    <img src="images/books/book12.jpg" alt="" srcset="">
                                    <div class="txt">
                                        <h1>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                            <span class="name-book">كتاب الكتروني</span>
                                        </h1>
                                        <div class="likes">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="detiles-pro">كلي ونامي وابهري الاخرين
                                            <span>(كتاب الكتروني)</span>
                                        </p>
                                        <h1 class="price">24.99
                                            <span class="type-price">ر.س</span>
                                            <br>
                                            <span>
                                                شامل الضريبة
                                            </span>
                                        </h1>
                                        <p class="note"> 
                                            صيغ اخرى :
                                            <span>كتاب مطبوع</span>
                                        </p>
                                        <div class="icons">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-shopping-cart btn-cart"></i>
                                            <i class="fas fa-locexk">&LeftArrowRightArrow;</i>
                                        </div>
                                    </div>
                    
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                            <i class="fas fa-lock  "></i>
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
    <script src="js/slider.js"></script>
</body>
</html>
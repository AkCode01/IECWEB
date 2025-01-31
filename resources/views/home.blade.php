@extends('layout.master')
@section('content')
<section class="mt-5">
    <div class="container">
        <div class="iec__banner__slider">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/images/carousel/banner_02.jpg') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <a href="">
                            <img src="{{ asset('assets/images/carousel/banner_01.jpg') }}" alt=""></a>
                    </div>
                    <div class="carousel-item">
                        <a href="">
                            <img src="{{ asset('assets/images/carousel/banner_03.jpg') }}" alt=""></a>
                    </div>
                </div>
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1" class=""></li>
                    <li data-target="#demo" data-slide-to="2" class=""></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="extra-space">
    <div class="container">
      <div class="dreamit-section-title text-left">
        <h5>Announcement & Updates</h5>
      </div>
      <div class="">
        <div class="row">
          <div class=" blog-list owl-carousel">
            <div class="single_blog">
              <div class="col-12">
                <div class="single_blog_thumb"> <a href="javascript:void(0);"><img src="assets/images/islamic-economics/4.jpg" alt="" /></a> </div>
              </div>
            </div>
            <div class="single_blog">
              <div class="col-12">
                <div class="single_blog_thumb"> <a href="javascript:void(0);"><img src="assets/images/islamic-economics/5.jpg" alt="" /></a> </div>
              </div>
            </div>
            <div class="single_blog">
              <div class="col-12">
                <div class="single_blog_thumb"> <a href="javascript:void(0);"><img src="assets/images/islamic-economics/6.jpg" alt="" /></a> </div>
              </div>
            </div>
            <div class="single_blog">
              <div class="col-12">
                <div class="single_blog_thumb"> <a href="javascript:void(0);"><img src="assets/images/islamic-economics/7.jpg" alt="" /></a> </div>
              </div>
            </div>
            <div class="single_blog">
              <div class="col-12">
                <div class="single_blog_thumb"> <a href="javascript:void(0);"><img src="assets/images/islamic-economics/8.jpg" alt="" /></a> </div>
              </div>
            </div>
            <div class="single_blog">
              <div class="col-12">
                <div class="single_blog_thumb"> <a href="javascript:void(0);"><img src="assets/images/islamic-economics/9.jpg" alt="" /></a> </div>
              </div>
            </div>
            <div class="single_blog">
              <div class="col-12">
                <div class="single_blog_thumb"> <a href="javascript:void(0);"><img src="assets/images/islamic-economics/10.jpg" alt="" /></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="intros__section">
    <div class="service-ar-ea pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 padding-left">
                    <div class="dreamit-section-title text-left">
                        <h5>Introduction of</h5>
                        <h1>islamic economics <span>CENTRE</span></h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-10">
                    <div class="row make__it__very__flex">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 float__unset">
                            <div class="images__div__projects">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('assets/images/shriah_guidnance/shriah_guidnance.jpg') }}"
                                        class="w-100" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 float__unset" style=" margin: 10px auto 10px auto; ">
                            <div class="box__details__flexxy">
                                <h4 class="en__text mb-3 urdu__heading__style">Shariah Guidance</h4>
                                <div class="col-12 p-0">
                                    <p class="en__text font__style">
                                        Islamic Economics Centre, Dar al-Iftaa Ahl al-Sunnah (Dawat-e-Islami) aims
                                        to provide Shariah guidance in matters
                                    </p>
                                </div>
                                <div class="col-md-12 p-0">
                                    <div class="blog-button">
                                        <a href="https://iecdawateislami.com/shariya-guidance-en.html"
                                            class="en__text">See details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-10">
                    <div class="row make__it__very__flex">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 float__unset">
                            <div class="images__div__projects">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('assets/images/islamic-finance/islamic_finance.jpg') }}"
                                        class="w-100" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 float__unset" style=" margin: 10px auto 10px auto; ">
                            <div class="box__details__flexxy">
                                <h4 class="en__text mb-3 urdu__heading__style">Shariah Consultancy:</h4>
                                <div class="col-12 p-0">
                                    <p class="en__text font__style">
                                        By utilizing the Shariah consultancy service provided by Islamic Economics
                                        Centre, Dar al-Iftaa Ahl al-Sunnah
                                    </p>
                                </div>
                                <div class="col-md-12 p-0">
                                    <div class="blog-button">
                                        <a href="https://iecdawateislami.com/shariya-consultancy-en.html"
                                            class="en__text">See details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-10">
                    <div class="row make__it__very__flex">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 float__unset">
                            <div class="images__div__projects">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('assets/images/islamic-finance/islamic_finance_img.jpg') }}"
                                        class="w-100" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 float__unset" style=" margin: 10px auto 10px auto; ">
                            <div class="box__details__flexxy">
                                <h4 class="en__text mb-3 urdu__heading__style">Islamic Finance Course</h4>
                                <div class="col-12 p-0">
                                    <p class="en__text font__style">
                                        Islamic Economics Centre Dar-ul-Ifta Ahl-al-Sunnah (Dawat-e-Islami)
                                        initiated an Islamic Finance Course in 2020.
                                    </p>
                                </div>
                                <div class="col-md-12 p-0">
                                    <div class="blog-button">
                                        <a href="https://iecdawateislami.com/islamic-finance-course-en.html"
                                            class="en__text">See details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 mb-10">
                    <div class="row make__it__very__flex">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 float__unset">
                            <div class="images__div__projects">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('assets/images/specialization_in_Islamic_economics_jursiprudence.jpg') }}"
                                        class="w-100" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 float__unset" style=" margin: 10px auto 10px auto; ">
                            <div class="box__details__flexxy">
                                <h4 class="en__text mb-3 urdu__heading__style">Specialization in Islamic Economics
                                    &amp; Jurisprudence</h4>
                                <div class="col-12 p-0">
                                    <p class="en__text font__style">
                                        Islamic Economics Centre, Dar-ul-Ifta Ahl-e-Sunnat (Dawat-e-Islami)
                                        introduced classes for Specialization in Islamic
                                    </p>
                                </div>
                                <div class="col-md-12 p-0">
                                    <div class="blog-button">
                                        <a href="https://iecdawateislami.com/takhassus-fil-fiqh-en.html"
                                            class="en__text">See details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="dreamit-letter-area pt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="dreamit-letter-text pb-3">
                    <h2>Pamphlets</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-10 mertab-img-box">
                <a href="https://www.daruliftaahlesunnat.net/fatawa_tasheer/ur/1088" target="_blank">
                    <img class="mertab-img img-fluid" src="{{ asset('assets/images/carousel/mr4.jpg') }}"
                        alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-10 mertab-img-box">
                <a href="https://www.daruliftaahlesunnat.net/fatawa_tasheer/ur/1086" target="_blank">
                    <img class="mertab-img img-fluid" src="{{ asset('assets/images/carousel/mr2.jpg') }}"
                        alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-10 mertab-img-box">
                <a href="https://www.daruliftaahlesunnat.net/fatawa_tasheer/ur/957" target="_blank">
                    <img class="mertab-img img-fluid" src="{{ asset('assets/images/carousel/mr1.jpg') }}"
                        alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-10 mertab-img-box">
                <a href="https://www.daruliftaahlesunnat.net/fatawa_tasheer/ur/1087" target="_blank">
                    <img class="mertab-img img-fluid" src="{{ asset('assets/images/carousel/mr3.jpg') }}"
                        alt="">
                </a>
            </div>
        </div>
    </div>
</div>

<section class="pt-2 pb-4">
    <div class="fatawa-area  pb-3">
        <div class="container">
            <div class="row fatawa-row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 class="text-center pb-4 theme_color">
                        Fatawa
                    </h2>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-10 mx-auto">
                    <div class="fatwa__boxes">
                        <div class="col-12 p-0">
                            <span class="heading__fatwa urdu__text">
                                آئی ڈی اے (IDA) وغیرہ کمپنیوں کے ذریعے آن لائن کاروبار اور انویسٹ کرنے کا حکم
                            </span>
                        </div>
                        <div class="col-12 p-0">
                            <span class="fatwa__question urdu__text">
                                <b>سوال:</b>
                                انٹر نیٹ پر آن لائن ٹریڈنگ کے حوالے سے IDA نام کی ایک ایپلیکیشن متعارف ہوئی ہے،جو
                                جدید عالمی بلاک چین مالیاتی پروگرام کے تحت کام کر رہی ہے اور اس کا دار و مدارڈیجیٹل
                                کرنسی پر ہے،اس کے کام کرنے کا طریقہ کار کچھ یوں ہے کہ:
                            </span>
                        </div>
                        <div class="fatwa__btn__area">
                            <a href="https://www.daruliftaahlesunnat.net/ur/ida-waghera-companies-ke-zariye-online-karobar-aur-invest-karne-ka-hukum"
                                target="_blank">
                                مزید پڑھیے
                            </a>
                            <a href="https://data2.dawateislami.net/download/special/static/pdf/fatawa/v1095-ida-waghera-companies-ke-zariye-online-karobar-aur-invest-karne-ka-hukum.pdf"
                                download="">
                                ڈاؤن لوڈ
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-10 mx-auto">
                    <div class="fatwa__boxes">
                        <div class="col-12 p-0">
                            <span class="heading__fatwa urdu__text">
                                مضاربت میں نقصان کیا ہے اور اس کے اصول کیا ہیں؟
                            </span>
                        </div>
                        <div class="col-12 p-0">
                            <span class="fatwa__question urdu__text">
                                <b>سوال:</b>
                                زید کاروبار کرنے کے لئے بکر کو پانچ لاکھ روپے دے اور طے یہ کرے کہ نفع ہمارے درمیان
                                آدھا آدھا تقسیم ہوگا اور نقصان میں بھی ہم دونوں برابر کے ہی شریک ہوں گے تو کیا اس
                                صورت میں یہ کاروبار کرنا درست ہے ؟ اور اس سودے میں نقصان کب رَبُّ المال ( Investor )
                                کی طرف لوٹے گا؟
                            </span>
                        </div>
                        <div class="fatwa__btn__area">
                            <a href="https://www.daruliftaahlesunnat.net/ur/muzarbat-mein-nuqsaan-kya-hai-aur-is-ke-usool-kya-hain"
                                target="_blank">
                                مزید پڑھیے
                            </a>
                            <a href="https://data2.dawateislami.net/download/special/static/pdf/fatawa/m-4025-muzarbat-mein-nuqsaan-kya-hai-aur-is-ke-usool-kya-hain.pdf"
                                download="">
                                ڈاؤن لوڈ
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-10 mx-auto">
                    <div class="fatwa__boxes">
                        <div class="col-12 p-0">
                            <span class="heading__fatwa urdu__text">
                                معاہدہ شرکت کو ختم کرنے کا طریقہ کیا ہے؟
                            </span>
                        </div>
                        <div class="col-12 p-0">
                            <span class="fatwa__question urdu__text">
                                <b>سوال:</b>
                                دو فریق کا ایک مشترکہ کام چل رہا تھا اس کو ختم کرنے کا طریقہ کار کیاہے؟
                            </span>
                        </div>
                        <div class="fatwa__btn__area">
                            <a href="https://www.daruliftaahlesunnat.net/ur/partnership-khatam-karne-ka-tarika-kya-hai"
                                target="_blank">
                                مزید پڑھیے
                            </a>
                            <a href="https://data2.dawateislami.net/download/special/static/images/fatawa/m-1402-partnership-khatam-karne-ka-tarika-kya-hai.jpg"
                                download="">
                                ڈاؤن لوڈ
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-10 mx-auto">
                    <div class="fatwa__boxes">
                        <div class="col-12 p-0">
                            <span class="heading__fatwa urdu__text">
                                کمیشن کی فیلڈ میں ایک جدید صورت کا حکم
                            </span>
                        </div>
                        <div class="col-12 p-0">
                            <span class="fatwa__question urdu__text">
                                <b>سوال:</b>
                                اگر کوئی شخص کسی بروکر کو کہے کہ آپ میری پراپرٹی جتنے میں چاہیں فروخت کریں مجھے پچاس
                                لاکھ روپے دے دیجئےگا تو اب اگر بروکر پراپرٹی باون لاکھ کی فروخت کرےاور دو لاکھ خود
                                رکھ کر پچاس لاکھ پارٹی کو دے تو کیا یوں دو لاکھ روپے رکھنا اس بروکرکے لیے درست ہے؟
                                جبکہ پارٹی کو بھی سب حقیقت معلوم ہو۔
                            </span>
                        </div>
                        <div class="fatwa__btn__area">
                            <a href="https://www.daruliftaahlesunnat.net/ur/496" target="_blank">
                                مزید پڑھیے
                            </a>
                            <a href="https://data2.dawateislami.net/download/special/static/images/fatawa/579-mth-0318-05.jpg"
                                download="">
                                ڈاؤن لوڈ
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-10 mx-auto">
                    <div class="fatwa__boxes">
                        <div class="col-12 p-0">
                            <span class="heading__fatwa urdu__text">
                                پرائز بانڈ اور اس کے انعام کا حکم؟
                            </span>
                        </div>
                        <div class="col-12 p-0">
                            <span class="fatwa__question urdu__text">
                                <b>سوال:</b>
                                پرائز بانڈ لینا اور اس سے نکلا ہوا انعام حاصل کرنا جائز ہے یا نہیں؟ بعض لوگ اسے
                                ناجائز کہتے ہیں۔کیا یہ درست ہے؟
                            </span>
                        </div>
                        <div class="fatwa__btn__area">
                            <a href="https://www.daruliftaahlesunnat.net/ur/505" target="_blank">
                                مزید پڑھیے
                            </a>
                            <a href="https://data2.dawateislami.net/download/special/static/images/fatawa/330-mth-0418-01.jpg"
                                download="">
                                ڈاؤن لوڈ
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-10 mx-auto">
                    <div class="fatwa__boxes">
                        <div class="col-12 p-0">
                            <span class="heading__fatwa urdu__text">
                                پریمئیم پرائز بانڈ کا حکم
                                <br>
                                (Premium Prize Bond)
                            </span>
                        </div>
                        <div class="col-12 p-0">
                            <span class="fatwa__question urdu__text">
                                <b>سوال:</b>
                                پریمئیم پرائز بانڈ(Premium Prize Bond ) کے نام سے ایک نیا بانڈ جاری کیا گیا ہے جس
                                میں ششماہی بنیاد پر نفع بھی ملے گا اور ہر تین مہینے بعد بذریعہ قرعہ اندازی حاملانِ
                                بانڈ (جن کے پاس پرائز بانڈ ہو ان) میں سے کچھ افراد کو مختلف انعامی رقم بھی دی جائے
                                گی جس طرح کہ عام پرائز بانڈ میں دی جاتی ہے۔
                            </span>
                        </div>
                        <div class="fatwa__btn__area">
                            <a href="https://www.daruliftaahlesunnat.net/ur/387" target="_blank">
                                مزید پڑھیے
                            </a>
                            <a href="https://data2.dawateislami.net/download/special/static/pdf/fatawa/547-mth-0617-01.pdf"
                                download="">
                                ڈاؤن لوڈ
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-10 mx-auto">
                    <div class="fatwa__boxes">
                        <div class="col-12 p-0">
                            <span class="heading__fatwa urdu__text">
                                اوور بلنگ کرنا جائز ہے یا نہیں؟
                            </span>
                        </div>
                        <div class="col-12 p-0">
                            <span class="fatwa__question urdu__text">
                                <b>سوال:</b>
                                زیدایک فیکٹری میں مال سپلائی کرتاہے ، فیکٹری کامنشی بکراووربلنگ کا مطالبہ کرتا ہے
                                ،اووربلنگ کرناجائزہے یانہیں ؟
                            </span>
                        </div>
                        <div class="fatwa__btn__area">
                            <a href="https://www.daruliftaahlesunnat.net/ur/over-billing-karna-6730"
                                target="_blank">
                                مزید پڑھیے
                            </a>
                            <a href="https://data2.dawateislami.net/download/special/static/pdf/fatawa/v15-over-billing-karna-jaiz-hai-ya-nahi.pdf"
                                download="">
                                ڈاؤن لوڈ
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-10 mx-auto">
                    <div class="fatwa__boxes">
                        <div class="col-12 p-0">
                            <span class="heading__fatwa urdu__text">
                                گاڑی ادھار بیچ کر واپس خریدنا جائز ہے یانہیں؟
                            </span>
                        </div>
                        <div class="col-12 p-0">
                            <span class="fatwa__question urdu__text">
                                <b>سوال:</b>
                                زید ایک شوروم سے گاڑی ادھارمیں خریدتاہے اوروہی گاڑی دوسرے شخص کونقدیاادھارمیں بیچ
                                دیتاہے۔پھردوسرا شخص وہی گاڑی اسی شوروم والے کوجس سے زیدنے خریدی تھی،بیچ دیتاہے۔جبکہ
                                ابھی زیدنے شوروم والے کوپوری ادائیگی نہیں کی ہے۔توکیاشوروم والے کااس طرح معاملہ
                                کرناصحیح ہے؟
                            </span>
                        </div>
                        <div class="fatwa__btn__area">
                            <a href="https://www.daruliftaahlesunnat.net/ur/gaari-udhar-beech-kar-wapis-kharidna-12145"
                                target="_blank">
                                مزید پڑھیے
                            </a>
                            <a href="https://data2.dawateislami.net/download/special/static/images/fatawa/173-Kan-12145.jpg"
                                download="">
                                ڈاؤن لوڈ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="viral__fatawa__sec_eng">
    <div class="container">
       <div class="col-lg-12 col-md-12 col-sm-12">
          <h2 class="text-center pb-4 theme_color mt-0">
             Important Fatawa
          </h2>
       </div>
       <div class="row">
          <div class="blog-list owl-carousel">
             <div class="single_blog">
                <div class="single_blog_thumb">
                   <a href="https://daruliftaahlesunnat.net/fatawa_tasheer/en/768"><img src="assets/images/iec-images/img_01.jpg" alt="" /></a>
                </div>
                <div class="single_blog_content style_two">
                   <div class="blog_page_title_eng">
                      <h4>
                         <a href="https://daruliftaahlesunnat.net/fatawa_tasheer/en/768">
                            Plot Ki Khareedo Farokh Ki Sorat Aur Ahkam
                         </a>
                      </h4>
                   </div>
                   <div class="blog_button">
                      <a href="#">Share  </a>
                      <a href="https://data2.dawateislami.net/download/special/static/pdf/fatawa/v772-plot-ki-khareedo-farokh-ki-sorat-aur-ahkam.pdf" download>Download</a>
                      <a href="https://daruliftaahlesunnat.net/fatawa_tasheer/ur/768" target="_blank">More </a>
                   </div>
                </div>
             </div>
             <div class="single_blog">
                <div class="single_blog_thumb">
                   <a href="https://daruliftaahlesunnat.net/fatawa_tasheer/en/943"><img src="assets/images/iec-images/img_02.jpg" alt="" /></a>
                </div>
                <div class="single_blog_content">
                   <div class="blog_page_title_eng">
                      <h4>
                         <a href="https://daruliftaahlesunnat.net/fatawa_tasheer/en/943">
                            Installments Par Liya Howa Plot Asal Malik Ko Wapis Bechna Kaisa?
                         </a>
                      </h4>
                   </div>
                   <div class="blog_button">
                      <a href="#">Share  </a>
                      <a href="https://data2.dawateislami.net/download/special/static/pdf/fatawa/v946-installments-par-liya-howa-plot-asal-malik-ko-wapis-bechna-kaisa.pdf" class="btn btn-dark btn-transparent btn-theme-colored btn-lg" class="btn btn-dark btn-transparent btn-theme-colored btn-lg noori fs-18 " download>Download</a>
                      <a href="https://daruliftaahlesunnat.net/fatawa_tasheer/ur/943" target="_blank">More </a>
                   </div>
                </div>
             </div>
             <div class="single_blog">
                <div class="single_blog_thumb">
                   <a href="https://daruliftaahlesunnat.net/fatawa_tasheer/en/708"><img src="assets/images/iec-images/img_03.jpg" alt="" /></a>
                </div>
                <div class="single_blog_content">
                   <div class="blog_page_title_eng">
                      <h4>
                         <a href="https://daruliftaahlesunnat.net/fatawa_tasheer/en/708">
                            Khareedari Me Raqam Advance De Kar Saman Aik Saal Bad Lena Kya Ye Durust Hai?
                         </a>
                      </h4>
                   </div>
                   <div class="blog_button">
                      <a href="#">Share  </a>
                      <a href="https://data2.dawateislami.net/download/special/static/pdf/fatawa/v712-khareedari-me-raqam-advance-de-kar-saman-aik-saal-bad-lena-kya-ye-durust-hai.pdf" class="btn btn-dark btn-transparent btn-theme-colored btn-lg" download>Download</a>
                      <a href="https://daruliftaahlesunnat.net/fatawa_tasheer/ur/708" target="_blank">More </a>
                   </div>
                </div>
             </div>
             <div class="single_blog">
                <div class="single_blog_thumb">
                   <a href="https://daruliftaahlesunnat.net/fatawa_tasheer/en/119"><img src="assets/images/iec-images/img_04.jpg" alt="" /></a>
                </div>
                <div class="single_blog_content style_two">
                   <div class="blog_page_title_eng">
                      <h4>
                         <a href="https://daruliftaahlesunnat.net/fatawa_tasheer/en/119">
                            Lottery Kay Zariye Khareed O Farokh
                         </a>
                      </h4>
                   </div>
                   <div class="blog_button">
                      <a href="#">Share  </a>
                      <a href="https://data2.dawateislami.net/download/special/static/pdf/fatawa/v122-lottery-kay-zariye-khareed-o-farokh.pdf" class="btn btn-dark btn-transparent btn-theme-colored btn-lg noori fs-18" download>Download</a>
                      <a href="https://daruliftaahlesunnat.net/fatawa_tasheer/ur/119" target="_blank">More </a>
                   </div>
                </div>
             </div>
             
          </div>
       </div>
    </div>
 </section>
 

@stop

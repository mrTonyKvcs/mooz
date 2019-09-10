@extends('layouts.app')

@section('content')

    <!-- Section main banner -->
    <section id="home" class="parallax-fixed main-banner" data-stellar-background-ratio="0.5">
        <div class="content-table">
            <div class="content-middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-lg-7 text-center text-md-left wow zoomIn" data-wow-duration=".2s" data-wow-delay=".1s">
                            <h1  class="text-white text-capitalize strong mt-0">Mi már tudjuk, mi a mai programod.</h1>
                            <p class="lead text-white">Randipartner kellene, vagy egy baráti beszélgetés? Biliárdoznál, vagy épp az élet értelmén merengenél valakivel? Mázlid van: pár kattintásra vagy attól, hogy azt csinálhasd, amihez kedved van, azzal, akivel biztosan élvezni is fogod. Ráadásul helybe visszük neked a társaságot.
</p>
                            <a href="#hogy-mukodik" class="btn btn-light btn-xl btn-rounded mr-md-4 mb-4 mb-md-0 align-top">HOGY MŰKÖDIK?</a>
                            <a href="#letoltes" class="btn btn-outline-light btn-xl btn-rounded mb-4 mb-md-0 align-top">IDE VELE!</a>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-4 text-center text-md-left ml-auto wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".1s">
                            <img class="img-fluid" src="/images/home-mobile.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section main banner -->


    <!-- Section App Feature -->
    <section id="az-uj-szarnysegeded">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ml-auto mr-auto text-center wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".1s">
                    <h2 class="text-uppercase">Miért mi leszünk a szárnysegéded?</h2>
                    <p>Nem lehetőséget, hanem társaságot kapsz: hús-vér embereket, akik ugyanott járnak ahol te, és ugyanolyan programra vágynak. Percek alatt a találkozásig juttatunk egy új baráttal, egy bulipartnerrel vagy akár az esti randiddal.
</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 text-center wow zoomIn" data-wow-duration=".2s" data-wow-delay=".1s">
                    <div class="icon-block mb-md-5 mb-sm-4">
                        {{--<i class="lnr lnr-diamond"></i>--}}
                        <img src="/images/icons/pofonegyszeru.svg" alt="">
                        <h4>Pofonegyszerű</h4>
                        <p>Az appot úgy terveztük, hogy bárki ösztönösen használhassa - képtelenség eltévedni benne.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 text-center wow zoomIn" data-wow-duration=".3s" data-wow-delay=".2s">
                    <div class="icon-block mb-md-5 mb-sm-4">
                        {{--<i class="lnr lnr-enter-down"></i>--}}
                        <img src="/images/icons/megmutatjuk.svg" alt="">
                        <h4>Megmutatjuk, hová indulj</h4>
                        <p>Pontosan és azonnal látni fogod, a városban éppen hol van pont neked való társaság és esemény.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 text-center wow zoomIn" data-wow-duration=".4s" data-wow-delay=".3s">
                    <div class="icon-block mb-md-5 mb-sm-4">
                        {{--<i class="lnr lnr-rocket"></i>--}}
                        <img src="/images/icons/valosidoben.svg" alt="">
                        <h4>Valós időben</h4>
                        <p>Nem azt látod majd, hány embert &quot;érdekel&quot; egy hely vagy rendezvény - hanem hogy éppen akkor kik vannak ott.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 text-center wow zoomIn" data-wow-duration=".5s" data-wow-delay=".4s">
                    <div class="icon-block mb-md-0 mb-sm-4">
                        {{--<i class="lnr lnr-cog"></i>--}}
                        <img src="/images/icons/nincstobb.svg" alt="">
                        <h4>Nincs több félreértés</h4>
                        <p>Unod a homályos megfogalmazásokat, a kétértelmű szmájlikat? Mi is. Itt mindenki szándékai tűpontosak.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 text-center wow zoomIn" data-wow-duration=".6s" data-wow-delay=".5s">
                    <div class="icon-block mb-md-0 mb-sm-4">
                        {{--<i class="lnr lnr-laptop-phone"></i>--}}
                        <img src="/images/icons/szohozjtt.svg" alt="">
                        <h4>Szóhoz juttatunk</h4>
                        <p>Match-eltél, de hirtelen nincs egy jó dumád se? Nyugi: nekünk van, és azonnal válogathatsz közülük.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 text-center wow zoomIn" data-wow-duration=".7s" data-wow-delay=".6s">
                    <div class="icon-block">
                        {{--<i class="lnr lnr-alarm"></i>--}}
                        <img src="/images/icons/sohatobbe.svg" alt="">
                        <h4>Soha többé ghosting</h4>
                        <p>Nincs hitegetés, nincs eltűnés: csak annak mutatunk be, aki szimpatikus lehet és ott is van, így azonnal kiderül, bírjátok-e egymást.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section App Feature -->

    <!-- Section About -->
    <section id="mi-ez" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ml-auto mr-auto text-center text-white wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".1s">
                    <h2 class="text-white text-uppercase">Mi ez?</h2>
                    <p>Ha azt írnánk, a moOz egy ismerkedős app, messze alábecsülnénk. A moOz valóban egy szárnysegéd, ami valós időben megmondja, hogy kivel és hol találkozhatsz, és még azt is, mit kell mondanod, hogy jól induljon az ismeretség.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8 ml-md-auto mr-md-auto col-xl-5 text-center wow zoomIn" data-wow-duration=".3s" data-wow-delay=".2s">
                    <div class="row swiper-container">
                        <div class="swiper-wrapper">
                            <div data-page-number="1" class="swiper-slide"><img src="/images/mi-ez/1.png" class="img-fluid" alt="" /></div>
                            <div data-page-number="2" class="swiper-slide"><img src="/images/mi-ez/2.png" class="img-fluid" alt="" /></div>
                            <div data-page-number="3" class="swiper-slide"><img src="/images/mi-ez/3.png" class="img-fluid" alt="" /></div>
                            <div data-page-number="4" class="swiper-slide"><img src="/images/mi-ez/4.png" class="img-fluid" alt="" /></div>
                            <div data-page-number="4" class="swiper-slide"><img src="/images/mi-ez/5.png" class="img-fluid" alt="" /></div>
                            <div data-page-number="4" class="swiper-slide"><img src="/images/mi-ez/6.png" class="img-fluid" alt="" /></div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="col-lg-6 ml-auto text-white wow zoomIn" data-wow-duration=".3s" data-wow-delay=".2s">
                    <h3 class="text-tertiary text-center text-lg-left">Szerezz barátokat, ismerkedj élőben!</h3>
                    <p class="text-center text-lg-left">A kulcs a közelség, időben és térben. Ha match-elsz valakivel, jó eséllyel csak körül kell nézned, és már látod is. A találkozás pillanatáig vezetünk - és villámgyorsan elhozzuk azt.</p>

                    <div class="text-center text-lg-left">
                        <p><a href="#hogy-mukodik" class="btn btn-cta btn-lg">MUTASD, HOGY MŰKÖDIK!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section About -->

    <!-- Section Features -->
    <section id="hogy-mukodik">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ml-auto mr-auto text-center">
                    <h2>Hogy működik?</h2>
                    <p>Az appot úgy terveztük, hogy egyszerű legyen használni: a gyorsaság itt a kulcs, hiszen percek alatt ismertetünk össze a társaságodddal.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 text-center text-lg-right">
                    <div class="service-box icon-right mb-xs-4 wow zoomIn" data-wow-duration=".2s" data-wow-delay=".1s">
                            <i>
                                <img class="icon" src="/images/icons/villamgyors.svg" alt="">
                            </i>
                            <h4 class="m-0 mb-2">Villámgyors regisztráció</h4>
                        <p>Add meg az alapvető adataid, lépj be akár Facebookkal, tölts fel néhány képet és mondd el, mit kell rólad tudni - ennyi az egész.</p>
                    </div>
                    <div class="service-box icon-right mb-xs-4 wow zoomIn" data-wow-duration=".4s" data-wow-delay=".2s">
                        <i>
                            <img class="icon" src="/images/icons/hovaerdemes.svg" alt="">
                        </i>
                        <h4 class="m-0 mb-2">Hová érdemes menned?</h4>
                        <p>Azonnal látni is fogod, hol vannak épp abban a pillanatban, akik hozzád hasonló programot keresnek - és hogy szimpatikusak-e neked.</p>
                    </div>
                    <div class="service-box icon-right mb-xs-4 wow zoomIn" data-wow-duration=".6s" data-wow-delay=".4s">
                        <i>
                            <img class="icon" src="/images/icons/egyszeru.svg" alt="">
                        </i>
                        <h4 class="m-0 mb-2">Egyszerű, informatív profilok</h4>
                        <p>Egy elkapott pillantásnál sokkal többet tudhatsz így meg - mégsem telik több időbe felmérni azt, akit leszólítanál.</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center mb-xs-4 wow zoomIn" data-wow-duration=".3s" data-wow-delay=".2s">
                    <p><img class="img-fluid" src="/images/hogy-mukodik.png" alt="" /></p>
                </div>
                <div class="col-lg-4 text-center text-lg-left">
                    <div class="service-box icon-left mb-xs-4 wow zoomIn" data-wow-duration=".4s" data-wow-delay=".2s">
                        <i>
                            <img class="icon" src="/images/icons/amachrol.svg" alt="">
                        </i>
                        <h4 class="m-0 mb-2">A match-ről étresítést kapsz</h4>
                        <p>Ha valakivel kölcsönös a szimpátia, azonnal szólunk, így akár másodpercek alatt egy beszélgetés közepén találhatod magad - ott helyben.</p>
                    </div>
                    <div class="service-box icon-left mb-xs-4 wow zoomIn" data-wow-duration=".6s" data-wow-delay=".4s">
                        <i>
                            <img class="icon" src="/images/icons/azindulasban.svg" alt="">
                        </i>
                        <h4 class="m-0 mb-2">Az indulásban is segítünk</h4>
                        <p>Megtörnéd a jeget? Kapsz hozzá egy csákányt: egy sor kipróbált beszélgetésindítóval beindítjuk a fantáziádat.</p>
                    </div>
                    <div class="service-box icon-left wow zoomIn" data-wow-duration=".8s" data-wow-delay=".6s">
                        <i>
                            <img class="icon" src="/images/icons/rogton.svg" alt="">
                        </i>
                        <h4 class="m-0 mb-2">Rögtön kiderül</h4>
                        <p>Nem kell hetekig csetelned valakivel, hogy kiderüljön, megéri-e az időd: az ismerkedést úgy tesszükk könnyűvé, hogy kiiktatjuk a felesleges köröket.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Features -->
    <!-- Section Counter -->
    <section class="bg-dark text-white">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <div class="counter-block wow fadeIn" data-wow-duration=".2s" data-wow-delay=".1s">
                        <i class="lnr lnr-download size-xl"></i>
                        <h4 class="counter-title text-uppercase mt-2">App letöltés</h4>
                        <div class="counter-number">
                            <div class="counter" data-from="0" data-to="615">615</div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="counter-block wow fadeIn" data-wow-duration=".3s" data-wow-delay=".2s">
                        <i class="lnr lnr-smile size-xl"></i>
                        <h4 class="counter-title text-uppercase mt-2">Mach</h4>
                        <div class="counter-number">
                            <div class="counter" data-from="0" data-to="244">244</div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="counter-block wow fadeIn" data-wow-duration=".5s" data-wow-delay=".4s">
                        <i class="lnr lnr-flag size-xl"></i>
                        <h4 class="counter-title text-uppercase mt-2">Helyek száma</h4>
                        <div class="counter-number">
                            <div class="counter" data-from="0" data-to="789.673">789.673</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Counter -->
    <!-- Section Intro -->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 ml-auto ml-auto wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">
                    <img class="img-fluid" src="/images/talcan-kinaljuk.png" alt="" />
                </div>
                <div class="col-lg-6 ml-auto mr-auto wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">
                    <h2 class="text-capitalize h1">Tálcán kínáljuk a társaságot</h2>
                    <p>Az appot elképesztően egyszerű használni. Belépsz a Facebook fiókoddal vagy telefonszámoddal, bekapcsolod a GPS-t, kitöltöd a profilod - és már láthatod is, aznap hová érdemes bulizni, ismerkedni vagy épp barátkozni indulni, mert látod, a többi felhasználó éppen merre jár és mit keres.</p>
                    <div class="service-xs-box icon-block icon-left mb-xs-4 d-flex">
                        <i>
                            <img class="icon mr-2" src="/images/icons/amitkeresel.svg" alt="" style="width: auto;">
                        </i>
                        <p>Amit keresel, akit keresel - ahol vagy.</p>
                    </div>
                    <div class="service-xs-box icon-block icon-left mb-xs-4 d-flex">
                        <i>
                            <img class="icon mr-2" src="/images/icons/aterkepen.svg" alt="" style="width: auto;">
                        </i>
                        <p>A térképen láthatod, a városban merre vannak a legtöbben - így nem kell vakon elindulnod, pontosan tudni fogod, hová érdemes menned, akár egy jó beszélgetésre, egy társasozásra vagy éppen flörtre vágysz.</p>
                    </div>
                    <p><a href="#letoltes" class="btn btn-primary btn-lg">RÖGTÖN KIPRÓBÁLOM</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Intro -->

    <!-- Section Intro -->
    <section class="bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 ml-auto order-md-2 wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">
                    <img class="img-fluid" src="/images/ismerkedj.png" alt="" />
                </div>
                <div class="col-lg-6 mr-auto text-left text-lg-right order-md-1 wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">
                    <h2 class="text-capitalize h1">Ismerkedj élőben azzal, <br>akire szükséged van</h2>
                    <p>Ez nem egy online chat: a cél, hogy élőben és percek alatt társaságot találj. Látni fogod, ki, hol és mit keres - de csak akkor kezdhetsz ismerkedni, ha meg is érkeztél az adott helyre.</p>
                    <div class="service-xs-box icon-block icon-right mb-xs-4 d-flex">
                        <i>
                            <img class="icon mr-2" src="/images/icons/ismerkedjazzal.svg" alt="">
                        </i>
                        <p class="w-100 mr-2 mb-4">Ismerkedj azzal, aki ott is van</p>
                    </div>
                    <div class="service-xs-box icon-block icon-right mb-xs-4 d-flex">
                        <i>
                            <img class="icon mr-2" src="/images/icons/hagydki.svg" alt="">
                        </i>
                        <p class="mr-2">Hagyd ki a felesleges lépéseket: a keresgélést, a félénk méregetést, a béna első mondatokat. Ugorj a közepébe magabiztosan - akivel találkozol, arról már tudni fogod, hogy szimpatikusnak talált, és a találkozás azonnali.</p>
                    </div>
                    <p><a href="#letoltes" class="btn btn-primary btn-lg">VÁGJUNK BELE</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Intro -->
    <!-- Section App Screenshorts -->
    <section id="nezz-bele" class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ml-auto mr-auto text-center">
                    <h2 class="text-uppercase">Nézz bele!</h2>
                    <p>Így néz ki az app: egyszerű, gyors, egyértelmű. Ennél gyorsabban és egyszerűbben tényleg nem tudunk az esti programod közelébe juttatni.</p>
                </div>
            </div>

            <div class="app-screenshots center-align owl-carousel owl-theme row">
                <div class="card item shadow20 wow fadeIn" data-wow-duration=".2s" data-wow-delay=".1s">
                    <img class="img-fluid" src="/images/screenshot/1.png" alt="" />
                </div>
                <div class="card item wow fadeIn" data-wow-duration=".3s" data-wow-delay=".2s">
                    <img class="img-fluid" src="/images/screenshot/2.png" alt="" />
                </div>

                <div class="card item wow fadeIn" data-wow-duration=".4s" data-wow-delay=".3s">
                    <img class="img-fluid" src="/images/screenshot/3.png" alt="" />
                </div>
                <div class="card item wow fadeIn" data-wow-duration=".5s" data-wow-delay=".4s">
                    <img class="img-fluid" src="/images/screenshot/4.png" alt="" />
                </div>
                <div class="card item wow fadeIn" data-wow-duration=".5s" data-wow-delay=".4s">
                    <img class="img-fluid" src="/images/screenshot/5.png" alt="" />
                </div>
                <div class="card item wow fadeIn" data-wow-duration=".5s" data-wow-delay=".4s">
                    <img class="img-fluid" src="/images/screenshot/6.png" alt="" />
                </div>
                <div class="card item wow fadeIn" data-wow-duration=".5s" data-wow-delay=".4s">
                    <img class="img-fluid" src="/images/screenshot/7.png" alt="" />
                </div>
                <div class="card item wow fadeIn" data-wow-duration=".5s" data-wow-delay=".4s">
                    <img class="img-fluid" src="/images/screenshot/8.png" alt="" />
                </div>
                <div class="card item wow fadeIn" data-wow-duration=".5s" data-wow-delay=".4s">
                    <img class="img-fluid" src="/images/screenshot/9.png" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End App Screenshorts -->

    <!-- Section TESTIMONIAL -->
    <section class="parallax-fixed testimonial black-overlay" id="testimonial" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ml-auto mr-auto text-center text-white">
                    <h2 class="text-uppercase mb-md-4">Our Testimonials</h2>
                    </div>
                </div>
            <div class="owl-carousel">
                <div class="row">
                    <div class="col-lg-10 mr-auto ml-auto text-white wow fadeIn" data-wow-duration=".4s" data-wow-delay=".2s">
                        <div class="owl-carousel owl-theme owl-testimonials-full">
                            @foreach($testimonials as $person)
                                <div class="item text-center text-md-left">
                                    <div class="clearfix testimonial-author ml-md-0 ml-auto mr-md-0 mr-auto">
                                        <img src="{{ $person['image_path'] }}" alt="{{ $person['name'] }} moOz App" class="img-fluid float-left mr-3 rounded-circle" width="170">
                                    </div>
                                    <div class="testimonial-full">
                                        <p class="lead">"{{ $person['description'] }}"</p>
                                        <h5 class="mb-0 text-white">{{ $person['name'] }}</h5>
                                        <p>{{ $person['social_name'] }}</p>
                                    </div>
                                </div>
                                @endforeach
                            <!--/item-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- TESTIMONIAL END -->

    <!-- Section FAQs -->
    <section id="gyakran-ismetelt-kerdesek" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ml-auto mr-auto text-center">
                    <h2 class="text-uppercase">Gyakran Ismételt Kérdések</h2>
                    {{--<p> Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc mi a libero.  </p>--}}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mr-auto wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">
                    <img class="img-fluid" src="/images/faq.png" alt="" />
                </div>
                <div class="col-lg-6 ml-auto wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">
                    <div class="accordion panel-group" id="faq">
                        <div class="card">
                            <div class="card-header">
                                <a data-toggle="collapse" data-parent="#faq" aria-expanded="true" href="#collapse2">Már megint egy randiapp?</a>
                            </div>
                            <div class="collapse show" id="collapse2" style="">
                                <div class="card-body">
                                    <p>Nem. A moOz nem társkereső, hanem elsősorban közösségépítő app. Egyrészt messze nem csak randit szervezhetsz - ugyanúgy társaságra találhatsz egy jó biliárdozáshoz vagy éppen összehozhatsz egy jó társaságot egy bulihoz. És ezt helyben, valós időben teheted meg. Nincs várakozás, faképnél hagyás, feszengés vagy bizonytalanság. Ez az, ami az új szárnysegédeddé tesz minket.
</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header"> <a data-toggle="collapse" data-parent="#faq" aria-expanded="false" href="#collapse3" class="collapsed">Kivel ismerkedhetek?</a></div>
                            <div class="collapse" id="collapse3">
                                <div class="card-body">
                                    <p>Bárkivel, aki a közeledben van - és senkivel, aki éppen nincs. (Ezt a GPS biztosítja.) Ez a lényeg: hogy adott legyen a közelség, és ne csak tudd, ki érdekelhet, de azt is, mik a szándékai.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header"><a data-toggle="collapse" data-parent="#faq" aria-expanded="false" href="#collapse4" class="collapsed">Mi van, ha mégsem kedvelek valakit?</a></div>
                            <div class="collapse" id="collapse4">
                                <div class="card-body">
                                    <p>Ez azonnal kiderül. Nem kell feszengened: köszönj el, és keress megfelelőbb partnert
                                    az aznapi programodhoz. (Telepátiát még nem tudtunk beépíteni - minden mást
                                    igen.)</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header"><a data-toggle="collapse" data-parent="#faq" aria-expanded="false" href="#collapse5" class="collapsed">Miért nem kapok match-eket?</a></div>
                            <div class="collapse" id="collapse5">
                                <div class="card-body">
                                    <p>Valószínűleg elfelejtetted kitölteni a profilod, így leendő társaságod nem tudja, ki is vagy te. De az is lehet, hogy rosszul választottál programot: figylej, hogy ne
                                    ivópertnert keress egy felolvasóesten és ne társasozni akarj egy vad party közepén. :)</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header"><a data-toggle="collapse" data-parent="#faq" aria-expanded="false" href="#collapse6" class="collapsed">Miért nem tudok beszélgetni?</a></div>
                            <div class="collapse" id="collapse6">
                                <div class="card-body">
                                    <p>Minden bizonnyal túl messze vagy. Ha úgy látod, szimpatikus egymberek gyúltek
                                    össze valahol, oda is kell menned ahhoz, hogy elkezdhess beszélgetni.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header"><a data-toggle="collapse" data-parent="#faq" aria-expanded="false" href="#collapse7" class="collapsed">Mi van, ha valaki bunkó velem?</a></div>
                            <div class="collapse" id="collapse7">
                                <div class="card-body">
                                    <p>Nem gyűjtünk neked stalkereket: egyszerűen letilthatod az illetőt, és jelentheted
                                    nekünk, így többé nem fogja látni, hol vagy és mit csinálsz, és nem is üzenhet neked.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQs -->
    <!-- Section Download App -->
    <section id="letoltes" class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ml-auto mr-auto text-center wow fadeIn" data-wow-duration=".4s" data-wow-delay=".2s">
                    <h5>Indulhatunk?</h5>
                    <h2 class="text-uppercase">LETÖLTÉS</h2>
                    <p>A cipődet felhúzni több idő lesz, mint a MOOZ-t kiismerni. A letöltés pár perc, a regisztráció sem több ennél. Nézd meg, hol ismerkedsz ma!</p>
                    <p><a href="#"><img src="assets/images/google-play.png" class="img-fluid mr-md-3 mb-3" width="180" alt="" /></a>
                    <a href="#"><img class="img-fluid mb-3" width="180" src="assets/images/app-store.png" alt="" /></a></p>
                    <p class="mb-0 wow zoomIn" data-wow-duration=".4s" data-wow-delay=".2s"><img class="img-fluid" src="/images/download.png" alt="" /></p>
                </div>
            </div>

        </div>

    </section>
    <!-- End Download App -->
    <!-- Section CTA -->
    <section class="cta bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-9 col-xl-8 mr-auto text-center text-lg-left">
                    <h4 class="text-white">Megakadtál?</h4>
                    <p>Írj nekünk egy emailt ide: <a href="mailto: info@moozapp.com">info@moozapp.com</a >vagy írj ránk <a href="https://www.facebook.com/moozforzoom" target="_blank">Facebookon chaten</a> és segítünk lendületet venni!</p>
                </div>
                <div class="col-md-12 col-lg-3 ml-auto mr-auto mb-4 text-center text-lg-right">
                    <a href="mailto: info@moozapp.com" class="btn btn-cta btn-xl btn-rounded">Üzenet Küldése</a>
                    {{--<a href="#kapcsolat" class="btn btn-cta btn-xl btn-rounded">Üzenet Küldése</a>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA -->
    <!-- Section Blogs -->
    {{--<section id="blog">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-8 ml-auto mr-auto text-center">--}}
                    {{--<h2 class="text-uppercase">Blog</h2>--}}
                    {{--<p>Hogyan viselkedj, ha leszólítasz valakit? Mi van, ha kínos csend áll be? Mit mondd el a testbeszéded, mielőtt megszólalnál? Nem csajozni-pasizni tanítunk, ne aggódj. De azt elmondjuk, hogyan lehetsz magabiztos ismerkedés közben.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="blog-slider center-align owl-carousel owl-theme">--}}
                {{--<div class="item wow fadeIn" data-wow-duration=".2s" data-wow-delay=".1s">--}}
                    {{--<div class="post-block">--}}
                        {{--<a href="#">--}}
                            {{--<img class="img-fluid w-100" src="assets/images/Rounded-Rectangle-35.jpg" alt="" />--}}
                        {{--</a>--}}
                        {{--<div class="post-meta">--}}
                            {{--<ul class="list-inline mb-0">--}}
                                {{--<li class="list-inline-item"><a href="#"><i class="fa fa-user" aria-hidden="true"></i> John</a></li>--}}
                                {{--<li class="list-inline-item"><a href="#"><i class="fa fa-calendar"></i> 20 Sep. 2017</a></li>--}}
                                {{--<li class="list-inline-item"><a href="#"><i class="fa fa-comments"></i> 20 Comments</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<h6 class="mb-3 mt-3"><a href="#">Aenean leo ligula, porttitor consequat</a></h6>--}}
                        {{--<p>Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="item wow fadeIn" data-wow-duration=".3s" data-wow-delay=".2s">--}}
                    {{--<div class="post-block">--}}
                        {{--<a href="#">--}}
                            {{--<img class="img-fluid w-100" src="assets/images/Rounded-Rectangle-352.jpg" alt="" />--}}
                        {{--</a>--}}
                        {{--<div class="post-meta">--}}
                            {{--<ul class="list-inline mb-0">--}}
                                {{--<li class="list-inline-item"><a href="#"><i class="fa fa-user" aria-hidden="true"></i> John</a></li>--}}
                                {{--<li class="list-inline-item"><a href="#"><i class="fa fa-calendar"></i> 20 Sep. 2017</a></li>--}}
                                {{--<li class="list-inline-item"><a href="#"><i class="fa fa-comments"></i> 20 Comments</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<h6 class="mb-3 mt-3"><a href="#">Aenean leo ligula, porttitor consequat</a></h6>--}}
                        {{--<p>Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="item wow fadeIn" data-wow-duration=".4s" data-wow-delay=".3s">--}}
                    {{--<div class="post-block">--}}
                        {{--<a href="#">--}}
                            {{--<img class="img-fluid w-100" src="assets/images/Rounded-Rectangle-351.jpg" alt="" />--}}
                        {{--</a>--}}
                        {{--<div class="post-meta">--}}
                            {{--<ul class="list-inline mb-0">--}}
                                {{--<li class="list-inline-item"><a href="#"><i class="fa fa-user" aria-hidden="true"></i> John</a></li>--}}
                                {{--<li class="list-inline-item"><a href="#"><i class="fa fa-calendar"></i> 20 Sep. 2017</a></li>--}}
                                {{--<li class="list-inline-item"><a href="#"><i class="fa fa-comments"></i> 20 Comments</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<h6 class="mb-3 mt-3"><a href="#">Aenean leo ligula, porttitor consequat</a></h6>--}}
                        {{--<p>Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="item wow fadeIn" data-wow-duration=".2s" data-wow-delay=".1s">--}}
                    {{--<div class="post-block">--}}
                        {{--<a href="#">--}}
                            {{--<img class="img-fluid w-100" src="assets/images/Rounded-Rectangle-351.jpg" alt="" />--}}
                        {{--</a>--}}
                        {{--<div class="post-meta">--}}
                            {{--<ul class="list-inline mb-0">--}}
                                {{--<li class="list-inline-item"><a href="#"><i class="fa fa-user" aria-hidden="true"></i> John</a></li>--}}
                                {{--<li class="list-inline-item"><a href="#"><i class="fa fa-calendar"></i> 20 Sep. 2017</a></li>--}}
                                {{--<li class="list-inline-item"><a href="#"><i class="fa fa-comments"></i> 20 Comments</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<h6 class="mb-3 mt-3"><a href="#">Aenean leo ligula, porttitor consequat</a></h6>--}}
                        {{--<p>Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- End Blogs -->
    <!-- Section Contact -->
    {{--<section id="kapcsolat" class="bg-dark text-white">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-8 ml-auto mr-auto text-center wow fadeInUp">--}}
                    {{--<h2 class="text-white text-uppercase">Kérdésed van?</h2>--}}
                    {{--<p>Add meg a neved, e-mail-címed és üzenj nekünk azonnal: lelkesen válaszolunk, akár az appról kérdeznél, a tartalomról vagy éppen van egy történeted, amiről mindenképpen tudnunk kell!</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row align-items-center">--}}
                {{--<div class="col-md-12 col-xl-10 mr-auto ml-auto">--}}
                    {{--<div class="row justify-content-center">--}}
                        {{--<div class="col-md-6 col-lg-6 wow fadeInUp">--}}
                            {{--<form id="contact-form" action="contact-form/contact.php" method="post">--}}
                                {{--<div class="form-group">--}}
                                    {{--<input type="text" name="contact_name" id="contact_name" class="form-control" placeholder="Teljes Neve" required>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<input type="text" name="contact_email" id="contact_email" class="form-control" placeholder="E-mail Címe" required>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<textarea class="form-control" name="contact_message" id="contact_message" placeholder="Üzenete" rows="5" cols="4" required></textarea>--}}
                                {{--</div>--}}
                                {{--<div class="d-flex justify-content-start mb-4"><input type="submit" name="contact_submit" class="btn btn-cta text-uppercase col-lg-12 btn-xl" value="Üzenet Küldése"></div>--}}
                                {{--<div id="contact-result"></div>--}}
                            {{--</form>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- End Contact -->
    <!-- Section Newsletter -->
    {{--<section class="text-white" style="background: #000;">--}}
        {{--<div class="container">--}}
            {{--<div class="row align-items-center">--}}
                {{--<div class="col-lg-8 ml-auto mr-auto wow fadeInUp text-center text-white">--}}
                    {{--<h2 class="text-white text-uppercase">Ne maradj le ma sem… </h2>--}}
                    {{--<p>Ha feliratkozol a hírlevelünkre, mindig szólunk, amikor különlegesen jó program ajánlkozik vagy éppen új tudással bővítjük a blogot. Nem bombázunk spammel: csak olyasmit küldünk, ami téged érdekel.</p>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-8 col-lg-8 ml-auto mr-auto">--}}
                            {{--<form action="{{ route('newsletter.subscribe') }}" id="mc-form" method="post">--}}
                                {{--@csrf--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-12 col-lg-8 px-md-0 px-lg-2">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<input type="text" name="email" required="required" class="form-control" placeholder="E-mail Címe" required>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-12 col-lg-4 px-md-0">--}}
                                        {{--<input type="submit" class="btn btn-cta btn-sm mb-4" value="Feliratkozás">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="text-center" id="mc-result"></div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- End Newsletter -->
@endsection

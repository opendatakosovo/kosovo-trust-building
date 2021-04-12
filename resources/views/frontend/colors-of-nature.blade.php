<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    @include('frontend.includes.head')
</head>
<body class="header-sticky blog-single">
<!-- Header -->
<header id="header" class="header clearfix">
    @include('frontend.includes.header')
</header>

<?php $locale = Config::get('app.locale');?>

<!-- Page title -->
<div class="bond-page-title">
    <div class="page-title parallax parallax1">
        <div class="overlay v1"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading v1">
                        <div class="page-title-heading">
                            @if($locale === 'al')
                            <h1 class="title">Agjenda: Java Digjitale e Ndërtimit të Besimit, 12-16 prill</h1>
                            @elseif($locale === 'sr')
                            <h1 class="title">Dnevni red: Digitalna nedelja izgradnje poverenja, 12-16. april</h1>
                            @else
                            <h1 class="title">"Colors of nature with Uta and Miljana": Diversity is our strength, to work as one for future generations</h1>
                            @endif
                        </div><!-- /.page-title-captions -->
                    </div><!-- /.page-title-captions -->

                    <div class="breadcrumb-trail breadcrumbs" >
                        <ul>
                            <li class="trail-item"><a href="/" title="bond" rel="home">@lang('messages.home')</a></li>
                            <li class="trail-item"><a href="/stories" title="BLOG">@lang('messages.stories')</a></li>
                        </ul>
                    </div>

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->
</div>

<section class="main-content blog-detail-aries v1">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="post-wrap">
                    <div class="featured-blog-post">
                        <div class="entry-image">
                            <img src="frontend/images/stories/uta-i-miljana11.jpg" alt="image">
                        </div>
                    </div>

                    <article class="blog-post">
                        <div class="content-blog-post">
                            <h2 class="title-blog-post">
                                @if($locale === 'al')
                                <a href="#">Agjenda: Java Digjitale e Ndërtimit të Besimit, 12-16 prill</a>
                                @elseif($locale === 'sr')
                                <a href="#">Dnevni red: Digitalna nedelja izgradnje poverenja, 12-16. april</a>
                                @else
                                <a href="#">"Colors of nature with Uta and Miljana": Diversity is our strength, to work as one for future generations</a>
                                @endif
                            </h2>

                        </div><!-- /content-blog-post -->


                        @if($locale === 'al')
                        <div class="entry-blog-content">
                            <p style="line-height:1.2"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Platform&euml; e Nd&euml;rtimit t&euml; Besimit n&euml; Kosov&euml; ju fton t&euml; bashkoheni me ne p&euml;r Jav&euml;n e Digjitale t&euml; Nd&euml;rtimit t&euml; Mir&euml;besimit me diskutime ekspert&euml;sh, nj&euml; fushat&euml; t&euml; mediave sociale me premtime p&euml;r veprim nga an&euml;tar&euml;t e </span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="background-color:#ffffff"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Rrjetin e Nd&euml;rtimit t&euml; Besimit t&euml; Kosov&euml;s dhe me p&euml;rmbajtje interesante nga nd&euml;rtuesit vendor&euml; t&euml; mir&euml;besimit n&euml; komunitetet tuaja.</span></span></span></span></span></span></span></p>


                            <p style="line-height:1.2"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Premtimet nga an&euml;tar&euml;t e rrjetit, si dhe p&euml;rmbajtja origjinale me heronjt&euml; e nd&euml;rtimit t&euml; mir&euml;besimit t&euml; p&euml;rditsh&euml;m dhe histori nga komunitetet lokale do t&euml; l&euml;shohen &ccedil;do dit&euml;.</span></span></span></span></span></span></p>


                            <p style="line-height:1.2; text-align:justify"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Mos humb asnj&euml; p&euml;rdit&euml;sim! Na ndiqni n&euml; Facebook: </span></span></span></span></span></span><a href="http://www.facebook.com/trustbuildingks" style="text-decoration:none"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#0563c1"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:underline"><span style="-webkit-text-decoration-skip:none"><span style="text-decoration-skip-ink:none">@trustbuildingks</span></span></span></span></span></span></span></span></a></p>


                            <p style="line-height:1.2"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Orari i premier&euml;s n&euml; Facebook:</span></span></span></span></span></span></p>


                            <p style="line-height:1.2"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">E h&euml;n&euml;, 12 Prill</span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"> - Fillimi: Nd&euml;rtimi i mir&euml;besimit, Inovacioni dhe Teknologjia</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">10:00 ALB | 11:00 SRB</span></span></span></span></span></span></br>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Paraqiten: Blerta Tha&ccedil;i (ODK), Sanja Stojković (NSI)</span></span></span></span></span></span></br>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Moderuar nga Paulina Behluli</span></span></span></span></span></span></p>

                            <p style="line-height:1.2"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">E mart&euml;, 13 Prill</span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"> - Grat&euml; n&euml; Sh&euml;rbimin Publik</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">10:00 ALB | 11:00 SRB</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Paraqiten: Donika Emini (CiviKos), Njomza Emini (Forumi p&euml;r Lidership dhe Demokraci)</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Moderuar nga Milica Andrić</span></span></span></span></span></span></p>

                            <p style="line-height:1.2"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">E m&euml;rkur&euml;, 14 Prill </span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">- Grat&euml; n&euml; Biznes</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">10:00 ALB | 11:00 SRB</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Paraqiten: Florentina Dushi (BDG), Shpresa Agushi (NRAEVOK)</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Moderuar nga Paulina Behluli</span></span></span></span></span></span></p>


                            <p style="line-height:1.2"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">E enjte, 15 Prill </span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">- Grat&euml; n&euml; Paqe dhe Siguri</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">10:00 ALB | 11:00 SRB</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Paraqiten: Brikena Avdyli (Fondacioni Jahjaga), Jovana Radosavljević (NSI)</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Moderuar nga Milica Andrić</span></span></span></span></span></span></p>


                            <p style="line-height:1.2"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">E Premte, 16 Prill</span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"> - Grat&euml; n&euml; Media</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">10:00 ALB | 11:00 SRB</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Paraqiten: Una Hajdari (E pavarur), Zorica Vorgučić (RTV Kim)</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Moderuar nga Milica Andrić</span></span></span></span></span></span></p>


                            <p style="line-height:1.2"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">** T&euml; gjith&euml; pjes&euml;marr&euml;sit ekspert&euml; jan&euml; nga n&euml;ngrupi i Rrjetit t&euml; Nd&euml;rtimit t&euml; Mir&euml;besimit t&euml; Kosov&euml;s p&euml;r Grat&euml;, Paqen dhe Sigurin&euml; </span></span></span></span></span></span></p>

                        </div>
                        @elseif($locale === 'sr')
                        <div class="entry-blog-content">
                            <p style="line-height:1.2"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="background-color:#ffffff"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Platforma za izgradnju poverenja na Kosovu</span></span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"> vas poziva da se pridružite digitalnoj nedelji izgradnje poverenja, razgovorima sa ekspertima, kampanji na dru&scaron;tvenim medijima koja će sadržati i čvrsta obećanja članova Mreži za izgradnju poverenja na Kosovu, ali i interesantnog sadržaja koji su proizveli lokalni članovi zajednica koji rade na izgradnji poverenja.&nbsp;&nbsp;</span></span></span></span></span></span></p>

                            <p style="line-height:1.2"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Zalaganje članova mreže, kao i originalni sadržaj svakodnevnih aktivnosti heroja izgradnje poverenja, i priče iz lokalnih zajednica će biti objavljivani svakoga dana.&nbsp;</span></span></span></span></span></span></p>


                            <p style="line-height:1.2"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Ne propustite novosti! Pratite nas na Facebook-u: </span></span></span></span></span></span><a href="http://www.facebook.com/trustbuildingks" style="text-decoration:none"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#0563c1"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:underline"><span style="-webkit-text-decoration-skip:none"><span style="text-decoration-skip-ink:none">@trustbuildingks</span></span></span></span></span></span></span></span></a></p>


                            <p style="line-height:1.2"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Raspored Facebook premijere:</span></span></span></span></span></span></p>


                            <p style="line-height:1.2"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">Ponedeljak: 12. april &mdash; Početak:</span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"> Izgradnja poverenja, inovacije i tehnologija&nbsp;</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">10:00 ALB | 11:00 SRB</span></span></span></span></span></span><br />
                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Učestvuju: Blerta Tha&ccedil;i (ODK), Sanja Stojković (NSI)</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Moderatorka: Paulina Behluli</span></span></span></span></span></span></p>

                            <p style="line-height:1.2"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">Utorak, 13. april &mdash; </span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Arial"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">ž</span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">ene u javnim službama </span></span></span></span></span></span><br />
                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">10:00 ALB | 11:00 SRB</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Učestvuju: Donika Emini (CiviKos), Njomza Emini (Forum for Leadership and Democracy)</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Moderatorka: Milica Andrić</span></span></span></span></span></span></p>


                            <p style="line-height:1.2"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">Sreda, 14. april &mdash; </span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Arial"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">ž</span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">ene u biznisu</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">10:00 ALB | 11:00 SRB</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Učestvuju: Florentina Dushi (BDG), Shpresa Agushi (NRAEVOK)</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Moderatorka: Paulina Behluli</span></span></span></span></span></span></p>


                            <p style="line-height:1.2"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">Četvrtak, 15. april &mdash; </span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Arial"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">ž</span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">ene, mir i bezbednost</span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">&nbsp;</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">10:00 ALB | 11:00 SRB</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Učestvuju: Brikena Avdyli (Jahjaga Foundation), Jovana Radosavljević (NSI)</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Moderatorka: Milica Andrić</span></span></span></span></span></span></p>


                            <p style="line-height:1.2"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">Petak, 16. april &mdash;</span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"> </span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Arial"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">ž</span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">ene u medijima</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">10:00 ALB | 11:00 SRB</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Učestvuju: Una Hajdari (Independent), Zorica Vorgučić (RTV Kim)</span></span></span></span></span></span><br/>

                                <span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Moderatorka: Milica Andrić</span></span></span></span></span></span><br/>

                            <p style="line-height:1.2"><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">**Sve učesnice su&nbsp; članice podgrupe Mreže za izgradnju poverenja na Kosovu - &ldquo;</span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Arial"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">ž</span></span></span></span></span></span><span style="font-size:12pt; font-variant:normal; white-space:pre-wrap"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">ene, mir I bezbednost&rdquo;.</span></span></span></span></span></span></p>


                        </div>
                        @else
                        <div class="entry-blog-content">
                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Respect for diversity, acceptance and respect for the other, a culture of mutual dialogue, are values ​​that should be nurtured from an early age. "Colors of Nature with Uta and Miljana" is a multilingual book intended for the youngest and is the product of cooperation between alpinist Uta Ibrahimi and artist Miljana Djundjerin. It should see the light of day at the end of May and be in the hands of young readers already on the International Children's Day (June 1).&nbsp;&nbsp;</span></span></span></p>

                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">While the Utalaya Foundation team, together with collaborators, works hard to create illustrations, plan the look and design of books, and wait for the publication and reaction of the youngest and most sincere audience, we are talking about the idea for such a project with the first Albanian woman to climb the highest peak in the world - Uta Ibrahimi. The enthusiasm and curiosity of the children, which she met at numerous exhibitions and motivational speeches, which she gave after a successful hike to Mount Everest, encouraged her to create something like this.&nbsp;</span></span></span></p>

                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">"That inspired me to share my story through a children's book, and at the beginning of 2020, with the help of UN agencies in Kosovo, the Municipality of Pristina and my designer, illustrator and friend of writers, the book 'Uta and mountains' was published. After its publication, I received thousands of messages and drawings from children and my heart was filled. At that moment, I realized that this book must be available to all children, and with the support of UNICEF, we published a supplementary coloring book ’Uta and the Mountains’, translated it into Serbian and Romani and donated to community centers," explains Uta. </span></span></span></p>


                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">"Later, we came across a UNMIK announcement of a trust-building project and concluded that merging two success stories of people from both the Albanian and Serbian communities would result in the creation of a compelling multilingual book and thus nurture children's diversity of culture, language and passions,” she adds.</span></span></span></p>


                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Among others, she points out, many inspiring people from North Mitrovica, they decided that Miljana Dunđerin and her artistic approach would perfectly suit their story. </span></span></span></p>


                             <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">"We wanted to add a new dimension to the book, this time not dealing strictly with mountains and nature, but with the beauty of art and the creative power of people," she points out. </span></span></span></p>

                              <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">And what about Miljana, who Uta says is great for collaborating and will remain a good friend of the Utalaya Foundation team. </span></span></span></p>

                               <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">"Sometimes I feel an earthquake that makes me forget reality, we need that starting point, even if it was a grain of dust or a flash of light. My encounter with Uta may be a grain of dust, but the book is, I hope, a flash of light for children. After all, those grains, no matter how tiny and intangible, reveal the paths of sensitivity and represent the path to true understanding," Miljana emphasizes. </span></span></span></p>

                                <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">The text is currently ready in Serbian and Albanian, but translation into other languages ​​is also planned. Uta believes that the project of creating this book will encourage reading among children, but also contribute to reconciliation through building dialogue and empathy among future generations, while promoting interethnic cooperation between writers and artists. </span></span></span></p>

                                <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">"I am happy to have found the support of UNMIK and all these amazing people who are working and doing their best to publish this book. Cultural diversity, multiethnic tolerance, gender equality and ecology have always been the pillars of my commitment and I am more than happy to convey such messages in a friendly tone to our most sacred good, children and youth, regardless of their ethnicity. "We all live in Kosovo and we should work as one for the greater good and successful future generations," he said.</span></span></span></p>

                                <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">What are her impressions? </span></span></span></p>

                                <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">"All I can say is that I enjoy every part of the process and I am thrilled with all the new information and perceptions I gain every day. "I am fully convinced that the diversity we have in Kosovo is our strength and that we should join forces more often in order to create inspiring work," she said. </span></span></span></p>
                        </div>
                        @endif

                    </article><!-- /blog-post -->

                    <div class="social-share-article" >
                        <!--                            <div class="tagcloud">-->
                        <!--                                <span><a href="#">GENDER EQUALITY</a></span>-->
                        <!--                                <span><a href="#"> YOUTH</a></span>-->
                        <!--                                <span><a href="#"> MilleniumFoundationKosovo</a></span>-->
                        <!--                                <span><a href="#"> Help</a></span>-->
                        <!---->
                        <!--                            </div>-->
                        <div class="box icon-circle bg-1">
                            <ul class="bond-socials text-right">
                                <li class="facebook">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="google-plus">
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li class="pinterest">
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                            </ul><!-- /bond-socials -->
                        </div>
                    </div> <!-- social share -->



                    <nav class="navigation posts-navigation" role="navigation">
                        <h2 class="screen-reader-text" style="display:none;">Post navigation</h2>
                        <div class="nav-links clearfix">
                            <div class="nav-previous">
                                <a href="#" rel="prev">Prev Post</a>
                            </div>
                            <div class="nav-next">
                                <a href="#" rel="next">Next post</a>
                            </div>
                        </div><!-- .nav-links -->
                    </nav>


                </div><!-- /post-wrap -->
            </div><!-- /col-md-8 -->

            <div class="col-md-4">
                <div class="sidebar">
                    <div class="widget widget-search">
                        <form method="get" role="search" class="search-form">
                            <input type="search" class="search-field" name="s" size="25" maxlength="128" value="" placeholder="Search"/>
                            <input type="submit" class="search-submit fa" value="&#xf002;"/>
                        </form>
                    </div>

<!--                    <div class="widget widget-popular">-->
<!--                        <h5 class="widget-title widget-line">RECENT POSTS</h5>-->
<!--                        <ul class="popular-news clearfix">-->
<!--                            <li>-->
<!--                                <div class="thumb">-->
<!--                                    <img src="images/blog/widget/recent-post-1.jpg" alt="images">-->
<!--                                </div>-->
<!--                                <div class="text">-->
<!--                                    <a href="#">Librarian girl you know youth that you can change</a>-->
<!--                                    <p><span class="date updated" >June 8, 2016</span></p>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <div class="thumb">-->
<!--                                    <img src="images/blog/widget/recent-post-2.jpg" alt="images">-->
<!--                                </div>-->
<!--                                <div class="text">-->
<!--                                    <a href="#">You know that you can change my world ilove post</a>-->
<!--                                    <p><span class="date updated" >June 8, 2016</span></p>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <div class="thumb">-->
<!--                                    <img src="images/blog/widget/recent-post-3.jpg" alt="images">-->
<!--                                </div>-->
<!--                                <div class="text">-->
<!--                                    <a href="#">This is a great opportunity to write a blog post</a>-->
<!--                                    <p><span class="date updated" >June 8, 2016</span></p>-->
<!--                                </div>-->
<!--                            </li>-->
<!---->
<!--                        </ul>-->
<!--                    </div>-->

                    <!-- /widget-popular -->




                </div><!-- /sidebar -->
            </div><!-- /col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!-- Footer -->
<footer class="footer">
<!--    <div class="page-callout">-->
<!--        <div class="page-callout-background">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="flat-contact-us">-->
<!--                            <h2>Are you Falling in love with bond</h2>-->
<!--                            <p>Lorem ipsum dolor sit amet consectetur </p>-->
<!--                            <a class="button" href="#"> VIEW MORE </a>-->
<!--                        </div>-->
<!--                    </div> /.col-md-12 -->-->
<!--                </div> /.row -->-->
<!--            </div> /.container -->-->
<!--        </div>-->
<!--    </div>-->

    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="widget widget_text">
                        <p>UNMIK is funding the establishment, launch and maintenance of the platform until
                            handover.</p>
                    </div><!-- /.widget-text -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-2">
                    <div class="widget widget_text">
                        <p>UNMIK does not necessarily endorse the opinions or statements expressed on the platform.
                        </p>
                    </div><!-- /.widget-text -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-2">
                    <div class="widget widget_text">
                        <p>UNMIK does not necessarily support the policies and beliefs of organizations or
                            individuals listed or referred to.</p>
                    </div><!-- /.widget-text -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-2">
                    <div class="widget widget_new_letter">
                        <p>The use of geographic names and boundaries does not imply judgement on the legal status
                            of Kosovo.</p>
                        <p>UNMIK is not liable for the conduct of any user.</p>
                    </div><!-- /.widget-new_letter -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-2">
                    <div class="widget widget_new_letter">
                        <p>The inclusion of a link or reference does not imply the endorsement of the linked website
                            by UNMIK.</p>
                    </div><!-- /.widget-new_letter -->
                </div>
                <div class="col-md-2">
                    <div class="widget widget_new_letter">
                        <p>Communications added to forums shall not be considered as having been reviewed or
                            approved by UNMIK.</p>
                    </div><!-- /.widget-new_letter -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-widgets -->
</footer>

<!-- Bottom -->
<div class="bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="line-top"></div>
            </div>
        </div>
        <div class="row">
            <div class="container-bottom">
                <div class="copyright">
                    <p>Copyright (C) Kosovo Trust Building 2021</p>
                </div>

                <ul class="bond-socials text-right">
                    <li class="facebook">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="twitter">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="google-plus">
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>

                    <li class="linkedin">
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>

                </ul>
            </div><!-- /.container-bottom -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>

<a class="go-top show vertical-text">
    BACK TO TOP <i class="fa fa-angle-double-right"></i>
</a>

</body>
</html>

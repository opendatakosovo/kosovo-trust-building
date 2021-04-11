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
                            <h1 class="title">Agenda: Digital Trustbuilding Week, April 12-16</h1>
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
                            <img src="frontend/images/pledge-logo.png" alt="image">
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
                                <a href="#">Agenda: Digital Trustbuilding Week, April 12-16</a>
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
                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">The Kosovo Trustbuilding Platform invites you to join us for Digital Trustbuilding Week, with expert discussions, a social media campaign with actionable pledges from Kosovo Trustbuilding Network members, and interesting content from local trustbuilders in your communities.&nbsp;&nbsp;</span></span></span></p>

                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Pledges from members of the Network, as well as original content featuring everyday trustbuilding heroes and stories from local communities will be released daily.&nbsp;</span></span></span></p>

                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Don&rsquo;t miss any updates! Follow us on Facebook: </span></span></span><a href="http://www.facebook.com/trustbuildingks" style="text-decoration:none"><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#0563c1"><u>@trustbuildingks</u></span></span></span></a></p>


                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Facebook Premiere schedule:</span></span></span></p>

                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong>Monday, April 12</strong></span></span></span><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong><sup>th</sup></strong></span></span></span><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong>&nbsp; &mdash; </strong></span></span></span><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Kick-off: Trustbuilding, Innovation and Technology&nbsp;</span></span></span><br/>

                                <span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">10:00 ALB | 11:00 SRB</span></span></span></br>
                                <span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Featuring: Blerta Tha&ccedil;i (ODK), Sanja Stojković (NSI)</span></span></span><br/>

                                <span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Moderated by Paulina Behluli</span></span></span></p>

                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong>Tuesday, April 13</strong></span></span></span><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong><sup>th</sup></strong></span></span></span><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong>&nbsp; &mdash; </strong></span></span></span><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Women in Public Service </span></span></span><br/>
                                <span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">10:00 ALB | 11:00 SRB</span></span></span><br/>

                                <span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Featuring: Donika Emini (CiviKos), Njomza Emini (Forum for Leadership and Democracy)</span></span></span><br/>

                                <span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Moderated by Milica Andrić</span></span></span></p>


                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong>Wednesday, April 14</strong></span></span></span><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong><sup>th</sup></strong></span></span></span><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong>&nbsp; &mdash; </strong></span></span></span><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Women in Business</span></span></span><br/>

                                <span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">10:00 ALB | 11:00 SRB</span></span></span><br/>

                                <span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Featuring: Florentina Dushi (BDG), Shpresa Agushi (NRAEVOK)</span></span></span><br/>

                                <span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Moderated by Paulina Behluli</span></span></span></p>


                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong>Thursday, April 15</strong></span></span></span><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong><sup>th</sup></strong></span></span></span><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong>&nbsp; &mdash; </strong></span></span></span><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Women in Peace and Security</span></span></span><br/>

                                <span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">10:00 ALB | 11:00 SRB</span></span></span><br/>

                                <span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Featuring: Brikena Avdyli (Jahjaga Foundation), Jovana Radosavljević (NSI)</span></span></span><br/>

                                <span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Moderated by Milica Andrić</span></span></span></p>


                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong>Friday, April 16</strong></span></span></span><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong><sup>th</sup></strong></span></span></span><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000"><strong>&nbsp; &mdash; </strong></span></span></span><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Women in the Media</span></span></span><br/>

                                <span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">10:00 ALB | 11:00 SRB</span></span></span><br />

                                <span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Featuring: Una Hajdari (Independent), Zorica Vorgučić (RTV Kim)</span></span></span><br/>

                                <span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Moderated by Milica Andrić</span></span></span><br/>

                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">**All expert participants are from the Kosovo Trustbuilding Network&rsquo;s sub-group on Women, Peace and Security. </span></span></span></p>

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

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
                            <h1 class="title">Ngjyrat e natyrës me Uta-n dhe Miljanën": Diversiteti është forca jonë, për të punuar si një për brezat e ardhshëm</h1>
                            @elseif($locale === 'sr')
                            <h1 class="title">“Boje prirode sa Utom i Miljanom”: Raznolikost naša snaga, da radimo kao jedno za buduće generacije</h1>
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
                        <img src="frontend/images/uta-i-miljana11.jpg" alt="image">
                        </div>
                    </div>

                    <article class="blog-post">
                        <div class="content-blog-post">
                            <h2 class="title-blog-post">
                                @if($locale === 'al')
                                <a href="#">"Ngjyrat e natyrës me Uta-n dhe Miljanën": Diversiteti është forca jonë, për të punuar si një për brezat e ardhshëm</a>
                                @elseif($locale === 'sr')
                                <a href="#">“Boje prirode sa Utom i Miljanom”: Raznolikost naša snaga, da radimo kao jedno za buduće generacije</a>
                                @else
                                <a href="#">"Colors of nature with Uta and Miljana": Diversity is our strength, to work as one for future generations</a>
                                @endif
                            </h2>

                        </div><!-- /content-blog-post -->


                        @if($locale === 'al')
                        <div class="entry-blog-content">
                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Respekti për diversitetin, pranimi dhe respekti ndaj tjetrit, një kulturë e dialogut të ndërsjellë, janë vlera që duhet të ushqehen që në moshë të vogël. "Ngjyrat e natyrës me Uta-n dhe Miljanën" është një libër shumëgjuhësh i destinuar për më të rinjtë dhe është produkt i bashkëpunimit mes alpinistes Uta Ibrahimi dhe artistes Miljana Djundjerin. Duhet të shohë dritën e diellit në fund të majit dhe të jetë në duart e lexuesve të vegjël tashmë në Ditën Ndërkombëtare të Fëmijëve (1 Qershor).&nbsp;&nbsp;</span></span></span></p>

                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Aventurat në natyrë, bota e artit, surprizat, miqësitë e reja, respekti reciprok dhe respekti për natyrën, janë tema që do të hasen nga të gjithë ata që shikojnë në këtë krijim.&nbsp;&nbsp;</span></span></span></p>

                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Ndërsa ekipi i Fondacionit Utalaya, së bashku me bashkëpunëtorët, punon shumë për të krijuar ilustrime, për të planifikuar pamjen dhe dizajnin e librave dhe për të pritur botimin dhe reagimin e audiencës më të re dhe më të sinqertë, ne po flasim për idenë për një projekt nga shqiptarja e parë që u ngjit në majën më të lartë Utom Ibrahimi. Entuziazmi dhe kureshtja e fëmijëve, të cilën ajo e takoi në shumë ekspozita dhe fjalime motivuese, të cilat ajo i dha pas një arritje të suksesshëm në ngjitje në malin Everest, e inkurajoi atë të krijonte.&nbsp;</span></span></span></p>

                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">"Kjo më frymëzoi që të ndaj historinë time përmes një libri për fëmijë, dhe në fillim të vitit 2020, me ndihmën e agjencive të OKB në Kosovë, Komuna e Prishtinës dhe krijuesit, ilustruesit dhe miqtë shkrimtar, libri 'Uta dhe malet' u botua. Pas botimit të tij, mora mijëra mesazhe dhe vizatime nga fëmijët dhe zemra ime u mbush plot. Në atë moment, kuptova se ky libër duhet të jetë në dispozicion për të gjithë fëmijët, dhe me mbështetjen e UNICEF, ne botuam një ngjyrosje shtesë libri ’Uta dhe Malet’, e përkthyer në Serbisht dhe Roma dhe u dhuroi qendrave të komunitetit," shpjegon Uta. </span></span></span></p>


                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">""Më vonë, ne hasëm në një njoftim të UNMIK-ut për një projekt për ndërtimin e besimit dhe arritëm në përfundimin se bashkimi i dy historive të suksesit të njerëzve nga komuniteti shqiptar dhe serb do të rezultojë në krijimin e një libri tërheqës shumëgjuhësh dhe kështu të ushqejmë larminë e fëmijëve të kulturës, gjuhës dhe ëndrrat e pasionet”, shton ajo.</span></span></span></p>


                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Ndër, thekson ajo, shumë njerëz frymëzues nga Mitrovica e Veriut, ata vendosën që Miljana Dunđerin dhe qasja e saj artistike t'i përshtatej përsosmërisht historisë së tyre.</span></span></span></p>


                             <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">"Ne dëshironim t'i shtonim një dimension të ri librit, kësaj here jo duke u marrë rreptësisht me malet dhe natyrën, por me bukurinë e artit dhe fuqinë krijuese të njerëzve", thekson ai. </span></span></span></p>

                              <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Po Miljana, për të cilën Uta thotë se është e shkëlqyeshme për të bashkëpunuar dhe do të mbetet një mik i mirë i ekipit të Fondacionit Utalaya. </span></span></span></p>

                               <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">"Ndonjëherë ndjej një tërmet që më bën të harroj realitetin, ne kemi nevojë për atë pikë fillestare, edhe nëse do të ishte një kokërr pluhuri ose një dritë. Takimi im me Uta mund të jetë një kokërr pluhuri, por libri është, shpresoj , një dritë për fëmijët. Në fund të fundit, ato kokrra, pa marrë parasysh sa të vogla dhe të paprekshme, zbulojnë rrugët e ndjeshmërisë dhe përfaqësojnë rrugën drejt mirëkuptimit të vërtetë", thekson Miljana.</span></span></span></p>

                                <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Teksti aktualisht është në dispozicion në serbisht dhe shqip, por gjithashtu është planifikuar përkthimi në gjuhë të tjera. Uta beson se projekti i krijimit të këtij libri do të inkurajojë leximin mes fëmijëve, por gjithashtu do të kontribuojë në pajtimin përmes ndërtimit të dialogut dhe ndjeshmërisë midis brezave të ardhshëm, ndërsa promovon bashkëpunimin ndëretnik midis shkrimtarëve dhe artistëve. </span></span></span></p>

                                <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">"Unë jam e lumtur që gjeta mbështetjen e UNMIK-ut dhe të gjithë këtyre njerëzve të mahnitshëm që po punojnë dhe po bëjnë më të mirën për të botuar këtë libër. Diversiteti kulturor, toleranca multietnike, barazia gjinore dhe ekologjia kanë qenë gjithmonë shtyllat e angazhimit tim dhe unë jam më shumë se sa të lumtur për të përcjellë mesazhe të tilla me një ton miqësor për të mirën tonë më të shenjtë, fëmijët dhe të rinjtë, pavarësisht nga përkatësia e tyre etnike. "Ne të gjithë jetojmë në Kosovë dhe duhet të punojmë si një për të mirën më të madhe dhe brezat e ardhshëm të suksesshëm," tha ai.</span></span></span></p>
                                <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Tuba Safciu - menaxhere e projektit dhe PR e Fondacionit Utalaya - ishte gjithashtu e përfshirë në projektin e krijimit të librit.</span></span></span></p>
                                <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Cilat janë përshtypjet e saj?</span></span></span></p>

                                <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">"E tëra që mund të them është se unë kënaqem me çdo pjesë të procesit dhe jam e entuziazmuar me të gjitha informacionet dhe perceptimet e reja që fitoj çdo ditë. Unë jam plotësisht e bindur se diversiteti që kemi në Kosovë është forca jonë dhe se duhet të bashkojmë forcat më shpesh në mënyrë që të krijojmë punë frymëzuese", tha ajo.</span></span></span></p>
                        </div>
                        @elseif($locale === 'sr')
                        <div class="entry-blog-content">
                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Uvažavanje različitosti, prihvatanje i poštovanje drugog, kultura međusobnog dijaloga, vrednosti su koje bi trebalo negovati od najranijeg uzrasta. „Boje prirode sa Utom i Miljanom“ višejezična je knjiga namenjena najmlađima i proizvod je saradnje alpinistkinje Ute Ibrahimi i umetnice Miljane Dunđerin. Svetlost dana trebalo bi da ugleda krajem maja i da već na Međunarodni dan deteta (1. juna) bude u rukama mladih čitalaca.&nbsp;&nbsp;</span></span></span></p>
                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Avanture u prirodi, svet umetnosti, iznenađenja, nova prijateljstva, međusobno poštovanje i poštovanje prirode, teme su sa kojima će se susresti svi koji zavire u ovo ostvarenje.&nbsp;&nbsp;</span></span></span></p>
                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Dok tim Utalaya fondacije, zajedno sa saradnicima, vredno radi na kreiranju ilustracija, planiranju izgleda i dizajna knjiga, a u iščekivanju objavljivanja i reakcije najmlađe i najiskrenije publike, o tome otkud ideja za ovakav projekat razgovaramo sa prvom Albankom koja se popela na najviši vrh sveta, Utom Ibrahimi. Entuzijazam i radoznalost dece sa kojom se susretala na brojnim izložbama i motivacionim govorima koje je održala posle uspešnog pohoda na Mont Everest, podstaklo ju je na stvaranje.&nbsp;</span></span></span></p>

                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">"To me je inspirisalo da svoju priču podelim kroz knjigu za decu i početkom 2020, uz pomoć UN agencija na Кosovu, Opštine Priština i mog dizajnera, ilustratora i prijatelja pisaca, objavljena je knjiga ’Uta i planine’. Nakon njenog objavljivanja, dobila sam hiljade poruka i crteža od dece i moje srce je bilo ispunjeno. U tom trenutku sam shvatila da ova knjiga mora biti dostupna svoj deci i uz podršku UNICEF-a objavili smo dopunsku bojanku ’Uta i planine’, preveli je na srpski i romski jezik i donirali centrima u okviru zajednica,“ objašnjava Uta.</span></span></span></p>


                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">"Кasnije smo naišli na objavu UNMIК-a o projektu izgradnje poverenja i zaključili da bi spajanje dve uspešne priče ljudi i iz albanske i iz srpske zajednice rezultiralo stvaranjem uverljive višejezične knjige i, na taj način, deca bi negovala različitost kulture, jezika i ostvarivanja snova, strasti,“ dodaje.</span></span></span></p>


                            <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Među, ističe, mnogim inspirativnim ljudima iz Severne Mitrovice, odlučili su da bi Miljana Dunđerin i njen umetnički pristup odlično odgovarao njihovoj priči. </span></span></span></p>


                             <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">"Želeli smo da dodamo novu dimenziju knjizi, ovoga puta ne baveći se striktno planinama i prirodom, već lepotom umetnosti i kreativnom snagom ljudi,“ ističe. </span></span></span></p>

                              <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">A šta kaže Miljana, za koju Uta kaže da je sjajna za saradnju i da će ostati dobar prijatelj tima Utalaya fondacije.</span></span></span></p>

                               <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">"Ponekad osetim potres od kojeg zaboravljam stvarnost, potrebna nam je ta polazna tačka makar to bilo zrnce prašine iliti bljesak svetlosti. Moj susret sa Utom je možda zrno prašine, ali je knjiga, nadam se, bljesak svetlosti za decu. Uostalom, ta zrna, ma koliko bila sicušna i neopipljiva, razotkrivaju puteve osećajnosti i predstavljaju put za istinsko razumevanje,“ naglašava Miljana.</span></span></span></p>

                                <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Tekst je, za sada, dostupna na srpskom i albanskom, ali je u planu i prevođenje na druge jezike. Uta veruje da će projekat nastajanje ove knjige podstaći čitanje među decom, ali i doprineti pomirenju kroz izgradnju dijaloga i empatije među sledećim generacijama, istovremeno promovišući međuetničku saradnju pisaca i umetnika.</span></span></span></p>

                                <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">"Srećna sam što sam naišla na podršku UNMIK-a i svih ovih neverovatnih ljudi koji rade i daju sve od sebe za objavljivanje ove knjige. Kulturna raznolikost, multietnička tolerancija, rodna ravnopravnost i ekologija uvek su bili stubovi mog zalaganja i više sam nego srećna što takve poruke u prijateljskom tonu prenosim našem najsvetijem dobru, deci i omladini, bez obzira na njihovu etničku pripadnost. Svi živimo na Кosovu i trebalo bi da radimo kao jedno za veće dobro i uspešne buduće generacije,“ ističe.</span></span></span></p>
                                <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">U projekat nastajanja knjige bila je uključena i Tuba Safciu - menadžerka projekta i PR Utalaya fondacije. </span></span></span></p>
                                <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">Kakvi su njeni utisci? </span></span></span></p>

                                <p><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#000000">"Sve što mogu da kažem je da uživam u svakom delu procesa i oduševljena sam svim novim informacijama i percepcijama koje stičem svaki dan. Potpuno sam uverena da je ta raznolikost koju imamo na Кosovu naša snaga i da bi trebalo da češće udružujemo snage kako bismo stvorili inspirativni rad,“ njena je poruka.</span></span></span></p>
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

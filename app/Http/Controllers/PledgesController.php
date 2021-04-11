<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class PledgesController extends Controller
{
    public function index(Request $request)
    {
$pledges = [
    [ "file" => "GIZ.png" , "name" => "GIZ"],
    [ "file" => "Handikos.png" , "name" => "Handikos"],
    [ "file" => "HiljmnijetaApuk.png" , "name" => "Hiljmnijeta Apuk"],
    [ "file" => "IvanaPavlovic.png" , "name" => "Ivana Pavlovic"],
    [ "file" => "JelenaBulatovic.png" , "name" => "Jelena Bulatovic"],
    [ "file" => "JovanaRadosavljevic.png" , "name" => "Jovana Radosavljevic"],
    [ "file" => "KaltrinaRexhepi.png" , "name" => "Kaltrina Rexhepi"],
    [ "file" => "KorabJaha.png" , "name" => "Korab Jaha"],
    [ "file" => "LINK.png" , "name" => "LINK"],
    [ "file" => "LjubisaBascarevic.png" , "name" => "Ljubisa Bascarevic"],
    [ "file" => "MajaFicovic.png" , "name" => "Maja Ficovic"],
    [ "file" => "ManushaqeRexhepi.png" , "name" => "Manushaqe Rexhepi"],
    [ "file" => "MarijaOrovicJovanovic.png" , "name" => "Marija Orovic Jovanovic"],
    [ "file" => "MarijaRadulovic.png" , "name" => "Marija Radulovic"],
    [ "file" => "MarkoZakic.png" , "name" => "Marko Zakic"],
    [ "file" => "MilicaMandic.png" , "name" => "Milica Mandic"],
    [ "file" => "MilicaStojanovicKostic.png" , "name" => "Milica Stojanovic Kostic"],
    [ "file" => "MirishaheSyla.png" , "name" => "Mirishahe Syla"],
    [ "file" => "MirlindaRushiti.png" , "name" => "Mirlinda Rushiti"],
    [ "file" => "MrikaNikqi.png" , "name" => "Mrika Nikqi"],
    [ "file" => "MustafShjigjeqi.png" , "name" => "Mustaf Shjigjeqi"],
    [ "file" => "NebojsaSimic.png" , "name" => "Nebojsa Simic"],
    [ "file" => "NenadMaksimovic.png" , "name" => "Nenad Maksimovic"],
    [ "file" => "NjomzaBerisha.png" , "name" => "Njomza Berisha"],
    [ "file" => "NjomzaEmini.png" , "name" => "Njomza Emini"],
    [ "file" => "NOPM.png" , "name" => "NOPM"],
    [ "file" => "NoraBezera.png" , "name" => "Nora Bezera"],
    [ "file" => "NoraPajtimSmolica.png" , "name" => "Nora Pajtim Smolica"],
    [ "file" => "NoraPrekazi.png" , "name" => "Nora Prekazi"],
    [ "file" => "NSI.png" , "name" => "NSI"],
    [ "file" => "ODK.png" , "name" => "ODK"],
    [ "file" => "PartnersK.png" , "name" => "PartnersK"],
    [ "file" => "PranveraSelimi.png" , "name" => "Pranvera Selimi"],
    [ "file" => "RexhepLushta.png" , "name" => "Rexhep Lushta"],
    [ "file" => "RIA.png" , "name" => "RIA"],
    [ "file" => "SanelMehmedi.png" , "name" => "Sanel Mehmedi"],
    [ "file" => "SanjaSovrlic.png" , "name" => "Sanja Sovrlic"],
    [ "file" => "SanjaVukovic.png" , "name" => "Sanja Vukovic"],
    [ "file" => "SazanIbrahimi.png" , "name" => "Sazan Ibrahimi"],
    [ "file" => "SehidaMiftari.png" , "name" => "Sehida Miftari"],
    [ "file" => "ShenajBelegu.png" , "name" => "Shenaj Belegu"],
    [ "file" => "ShpresaAgushi.png" , "name" => "Shpresa Agushi"],
    [ "file" => "ShqipeHajredini.png" , "name" => "Shqipe Hajredini"],
    [ "file" => "SlavisaMladenovic.png" , "name" => "Slavisa Mladenovic"],
    [ "file" => "SOKRAT.png" , "name" => "SOKRAT"],
    [ "file" => "StefanStojanovic.png" , "name" => "Stefan Stojanovic"],
    [ "file" => "StevanVukadinovic.png" , "name" => "Stevan Vukadinovic"],
    [ "file" => "ThomasKolly.png" , "name" => "Thomas Kolly"],
    [ "file" => "UnaHajdari.png" , "name" => "Una Hajdari"],
    [ "file" => "ValbonaRraci.png" , "name" => "Valbona Rraci"],
    [ "file" => "VeljkoSamardzic.png" , "name" => "Veljko Samardzic"],
    [ "file" => "VladimirZivkovic.png" , "name" => "Vladimir Zivkovic"],
    [ "file" => "XhenetaMusliu.png" , "name" => "Xheneta Musliu"],
    [ "file" => "YAG.png" , "name" => "YAG"],
    [ "file" => "ZahirTanin.png" , "name" => "Zahir Tanin"],
    [ "file" => "ZoricaVorgucic.png" , "name" => "Zorica Vorgucic"]
];
        return view('frontend.pledges', compact('pledges'));
    }
}

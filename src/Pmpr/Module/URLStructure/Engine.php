<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800fbfdd4dc9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\URLStructure; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Term; class Engine extends Container { private function okgymwqyacwayqce() : string { return (string) $this->weysguygiseoukqw(Setting::okygsiiusyaymuke, Constants::gmmygyiecgmggaam); } public function keyqcqiyiowceuuc(string $useksmwkuswkwcqg) : bool { $sciomagaqmgggsiu = $this->ikswooimyuycoeiw(true, [Constants::aisguagukaewucii => Constants::uouymeyqasaeckso]); return in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu, true); } public function ikswooimyuycoeiw(bool $cskqaekycgacowwg = false, array $ywmkwiwkosakssii = []) : array { $sciomagaqmgggsiu = []; if (!$cskqaekycgacowwg || Constants::yyoaeaaaquyigiim === $this->okgymwqyacwayqce()) { $sciomagaqmgggsiu = $this->weysguygiseoukqw(Setting::yguukwesekwkiwws, [], $ywmkwiwkosakssii); } return $sciomagaqmgggsiu; } public function esikumuskomeaiqq(bool $cskqaekycgacowwg = false) { $kesssewsiegssiya = null; if (!$cskqaekycgacowwg || Constants::gmmygyiecgmggaam === $this->okgymwqyacwayqce()) { $kesssewsiegssiya = $this->weysguygiseoukqw(Setting::iksimwyqakouyyoe); } return $kesssewsiegssiya; } public function euyyuaecekwekuag() : ?string { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->euyyuaecekwekuag(); } public function eeekyqskuiwamoyc() { static $mksyucucyswaukig = false; if ($mksyucucyswaukig) { return $mksyucucyswaukig; } if ($soyimggocqaeswge = $this->euyyuaecekwekuag()) { switch ($this->weysguygiseoukqw(Setting::okygsiiusyaymuke, Constants::gmmygyiecgmggaam)) { case Constants::gmmygyiecgmggaam: if ($sgcwcgagkwsskssc = $this->esikumuskomeaiqq()) { $mksyucucyswaukig = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()->woimamkkeyoyauoa(Constants::ouywiegeiyuaaawo, $soyimggocqaeswge, $sgcwcgagkwsskssc); } break; case Constants::yyoaeaaaquyigiim: break; } } return $mksyucucyswaukig; } public function giycagwmuawumcou() : bool { return !empty($this->eeekyqskuiwamoyc()); } public function cssikuqamakyikki(string $iwywmkygwewiamwm, $mksyucucyswaukig = null) : string { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if (!$mksyucucyswaukig) { $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); } switch ($this->weysguygiseoukqw(Setting::okygsiiusyaymuke, Constants::gmmygyiecgmggaam)) { case Constants::gmmygyiecgmggaam: if ($sgcwcgagkwsskssc = $this->esikumuskomeaiqq()) { if ($mksyucucyswaukig instanceof WP_Term) { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if ($sgcwcgagkwsskssc === $aoskwucuugeuaeus->yyoeeseewqmmyaee($mksyucucyswaukig)) { $aaokuekaimigoyue = $aoskwucuugeuaeus->aqcogscycyycgkuq($mksyucucyswaukig, $sgcwcgagkwsskssc); $iwywmkygwewiamwm = str_replace(["/{$sgcwcgagkwsskssc}/", "/{$aaokuekaimigoyue}"], ['/', ''], $iwywmkygwewiamwm); $iwywmkygwewiamwm = trailingslashit(str_replace("://", "://{$aaokuekaimigoyue}.", $iwywmkygwewiamwm)); } } else { if ($mksyucucyswaukig instanceof WP_Post) { $iwewcwusemqaiggk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->kckogqkiycqeumoa($mksyucucyswaukig, $sgcwcgagkwsskssc, [Constants::yewiqemgmmucemey => true]); if ($iwewcwusemqaiggk) { $iwywmkygwewiamwm = str_replace("://", "://{$this->caokeucsksukesyo()->kckogqkiycqeumoa()->aqcogscycyycgkuq($iwewcwusemqaiggk)}.", $iwywmkygwewiamwm); } } } } break; case Constants::yyoaeaaaquyigiim: if ($mksyucucyswaukig instanceof WP_Post) { } break; } return $iwywmkygwewiamwm; } public function eikmwwusgumqyika($mksyucucyswaukig = null, string $aqykuigiuwmmcieu = Constants::cwsguekoagqkaesm) { $qqakqoekigkcmyek = false; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if (!$mksyucucyswaukig) { $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); } switch ($this->weysguygiseoukqw(Setting::okygsiiusyaymuke, Constants::gmmygyiecgmggaam)) { case Constants::gmmygyiecgmggaam: if ($sgcwcgagkwsskssc = $this->esikumuskomeaiqq()) { if ($mksyucucyswaukig instanceof WP_Term) { $qqakqoekigkcmyek = $sgcwcgagkwsskssc === $aoskwucuugeuaeus->yyoeeseewqmmyaee($mksyucucyswaukig); if ($qqakqoekigkcmyek && $aqykuigiuwmmcieu === Constants::ouywiegeiyuaaawo) { $qqakqoekigkcmyek = $aoskwucuugeuaeus->aqcogscycyycgkuq($mksyucucyswaukig); } } else { if ($mksyucucyswaukig instanceof WP_Post) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $iwewcwusemqaiggk = $seumokooiykcomco->kckogqkiycqeumoa($mksyucucyswaukig, $sgcwcgagkwsskssc, [Constants::yewiqemgmmucemey => true]); $qqakqoekigkcmyek = !empty($iwewcwusemqaiggk); if ($qqakqoekigkcmyek && $aqykuigiuwmmcieu === Constants::ouywiegeiyuaaawo) { $qqakqoekigkcmyek = $aoskwucuugeuaeus->aqcogscycyycgkuq($iwewcwusemqaiggk); } } } } break; case Constants::yyoaeaaaquyigiim: if ($mksyucucyswaukig instanceof WP_Post) { } break; } return $qqakqoekigkcmyek; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e853c075ac7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\URLStructure; use Pmpr\Common\Cover\Breadcrumb\Generator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\URLStructure\Traits\EngineTrait; use WP_Query; use WP_Term; class Hook extends Container { use EngineTrait; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'init'], 999)->qcsmikeggeemccuu('template_redirect', [$this, 'ceiusicsawwaaamq'])->qcsmikeggeemccuu('pre_get_posts', [$this, 'kgaukkwgemecyoya'], 99); $this->waqewsckuayqguos('breadcrumb_created', [$this, 'csaymuooaeyuasee'], 10, 2); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('url_to_postid', [$this, 'qkegcwecissikmmc'])->cecaguuoecmccuse('admin_url', [$this, 'maemmgqsuqmgekqu'], 10, 2)->cecaguuoecmccuse('term_link', [$this, 'akyucemyueaukgca'], 10, 3)->cecaguuoecmccuse('post_link', [$this, 'gmmweowwogsyigsk'], 10, 2)->cecaguuoecmccuse('post_type_link', [$this, 'gmmweowwogsyigsk'], 10, 2)->cecaguuoecmccuse('query', [$this, 'skkaemayguuuiyeu'], 10, 2)->cecaguuoecmccuse('wp_unique_post_slug', [$this, 'iwaiawaoseywiwyy'], 10, 6); $this->aqaqisyssqeomwom(URLStructure::uisisakqmumqggsg . 'is_subdomain', [$this, 'cmsiwiqkoossgmqs'], 10, 0)->aqaqisyssqeomwom(URLStructure::uisisakqmumqggsg . 'get_subdomain_object', [$this, 'eeekyqskuiwamoyc'], 10, 0)->aqaqisyssqeomwom(URLStructure::uisisakqmumqggsg . 'get_post_unchanged_link', [$this, 'ciygioewesaagwai'], 10, 2); } public function csaymuooaeyuasee($eaekkwggowaaogiu) { if ($eaekkwggowaaogiu instanceof Generator) { $iayaaqmgecycmqoc = $this->eeekyqskuiwamoyc(); if (!empty($iayaaqmgecycmqoc) && $iayaaqmgecycmqoc instanceof WP_Term && !$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy([], $iayaaqmgecycmqoc)) { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $iwywmkygwewiamwm = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iayaaqmgecycmqoc); if ($eaekkwggowaaogiu->ocwyswgmkkymguyu(Constants::sauwwsocmukoaayu, $iwywmkygwewiamwm) === null) { $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($iayaaqmgecycmqoc); $eaekkwggowaaogiu->wuqmciamumosasqa($meqocwsecsywiiqs, $iwywmkygwewiamwm)->jyumyyugiwwiqomk(12); } } } } public function kgaukkwgemecyoya($gqgemcmoicmgaqie) { $iayaaqmgecycmqoc = $this->eeekyqskuiwamoyc(); if (!empty($iayaaqmgecycmqoc) && $iayaaqmgecycmqoc instanceof WP_Term) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($iayaaqmgecycmqoc, Constants::ckmqoekmugkggeym); $sciomagaqmgggsiu = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->aaamyckgicycisqq($kesssewsiegssiya); $useksmwkuswkwcqg = $eqwoegegiamegqsm->get(Constants::uouymeyqasaeckso, [], $gqgemcmoicmgaqie); if ($useksmwkuswkwcqg && (is_string($sciomagaqmgggsiu) && $useksmwkuswkwcqg === $sciomagaqmgggsiu || is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu, true)) && ($gqgemcmoicmgaqie->is_archive() || $gqgemcmoicmgaqie->is_search() || $this->caokeucsksukesyo()->owicscwgeuqcqaig()->uywcakyieooyscis())) { $esygomwiykacwkye = (array) $eqwoegegiamegqsm->get(Constants::kymceekcoyyeuocm, [], $gqgemcmoicmgaqie); $esygomwiykacwkye[] = [Constants::gmmygyiecgmggaam => $kesssewsiegssiya->name, Constants::gueokgaoyascgeqe => Constants::ooqggksagkoaeeke, Constants::ucoiewcoucauqwko => $iayaaqmgecycmqoc->term_id]; $eqwoegegiamegqsm->ccwowuakmqoemoem($gqgemcmoicmgaqie, [Constants::kymceekcoyyeuocm => $esygomwiykacwkye]); } } return $gqgemcmoicmgaqie; } public function cmsiwiqkoossgmqs() { return $this->uykissogmuaaocsg()->giycagwmuawumcou(); } public function eeekyqskuiwamoyc() { return $this->uykissogmuaaocsg()->eeekyqskuiwamoyc(); } public function init() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $qkqgcaykemoiecma->update('rewrite_rules', ''); $qkqgcaykemoiecma->gawcqwcqgwgucgya('rewrite_rules', ''); } $ukiksmygmcycwwas = $this->uykissogmuaaocsg()->esikumuskomeaiqq(true); if ($ukiksmygmcycwwas) { $cqcqsgykasiqwowi = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee(); $ismaaiimuciiagmk = $this->weysguygiseoukqw(Setting::yccsyuisimaakqss, []); foreach ($ismaaiimuciiagmk as $useksmwkuswkwcqg => $eqgoocgaqwqcimie) { if ($eqgoocgaqwqcimie === Constants::ON) { $cqcqsgykasiqwowi->ycewygugskisecuo($ukiksmygmcycwwas, $useksmwkuswkwcqg); } } } } public function qkegcwecissikmmc($eeamcawaiqocomwy) { switch ($this->weysguygiseoukqw(Setting::okygsiiusyaymuke, Constants::gmmygyiecgmggaam)) { case Constants::gmmygyiecgmggaam: $ymkqyawksmqcgsei = explode('.', $eeamcawaiqocomwy); $cgmsicimocaeggqg = ''; if (count($ymkqyawksmqcgsei) > 2) { $wiqcmmekkwsqmwus = explode('://', $ymkqyawksmqcgsei[0]); unset($ymkqyawksmqcgsei[0]); if (count($wiqcmmekkwsqmwus) === 2) { $cgmsicimocaeggqg = $wiqcmmekkwsqmwus[0] . '://'; } } $eeamcawaiqocomwy = $cgmsicimocaeggqg . implode('.', $ymkqyawksmqcgsei); break; case Constants::yyoaeaaaquyigiim: break; } return $eeamcawaiqocomwy; } public function iwaiawaoseywiwyy($aaokuekaimigoyue, $gcqseksiskwueksc, $qisccquumwewokoy, $useksmwkuswkwcqg, $yugqsecigucogiei, $oseueaowekmmocoq) { global $wpdb; if ($aaokuekaimigoyue !== $oseueaowekmmocoq) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $aoeusogyssuaoasg = $eqwoegegiamegqsm->prepare("SELECT ID FROM {$wpdb->posts} WHERE post_name = %s AND post_type = %s AND ID != %d", $oseueaowekmmocoq, $useksmwkuswkwcqg, $gcqseksiskwueksc); if ($post = $eqwoegegiamegqsm->qaumqeeagueuqkcg($aoeusogyssuaoasg)) { $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if ($ukiksmygmcycwwas = $goqqimcssiyagkwy->esikumuskomeaiqq(true)) { $kgowwogqiyoysmeq = $seumokooiykcomco->kckogqkiycqeumoa($gcqseksiskwueksc, $ukiksmygmcycwwas); if ($kgowwogqiyoysmeq) { $cowkygcmkoqyccua = false; if ($mukqwaumaqimoqoo = $seumokooiykcomco->kckogqkiycqeumoa($post, $ukiksmygmcycwwas)) { if ($aoskwucuugeuaeus->iooowgsqoyqseyuu($mukqwaumaqimoqoo) != $aoskwucuugeuaeus->iooowgsqoyqseyuu($kgowwogqiyoysmeq)) { $cowkygcmkoqyccua = true; } } if ($cowkygcmkoqyccua) { $aaokuekaimigoyue = $oseueaowekmmocoq; } } } } } return $aaokuekaimigoyue; } public function ciygioewesaagwai($migiiksoiymissge, $post) { if ($this->uykissogmuaaocsg()->eikmwwusgumqyika($post)) { $this->ggmgmqswqkgecosg('post_link', [$this, 'gmmweowwogsyigsk'])->ggmgmqswqkgecosg('post_type_link', [$this, 'gmmweowwogsyigsk']); $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($post); $this->cecaguuoecmccuse('post_link', [$this, 'gmmweowwogsyigsk'], 10, 2)->cecaguuoecmccuse('post_type_link', [$this, 'gmmweowwogsyigsk'], 10, 2); } return $migiiksoiymissge; } public function skkaemayguuuiyeu($gqgemcmoicmgaqie) { global $wp_query, $wpdb; $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); if ($aaokuekaimigoyue = $owaoeyikmqaeegma->get('pagename', $wp_query)) { if ($owaoeyikmqaeegma->uumoasaecaigsyys($wp_query, Constants::uouymeyqasaeckso, Constants::oguseymmyyoyaako)) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kccakwkaqugygwmq()) { $soyimggocqaeswge = $goqqimcssiyagkwy->euyyuaecekwekuag(); $kesssewsiegssiya = $goqqimcssiyagkwy->esikumuskomeaiqq(); if ($soyimggocqaeswge && $kesssewsiegssiya) { $aaokuekaimigoyue = rawurlencode(urldecode($aaokuekaimigoyue)); $aaokuekaimigoyue = str_replace('%2F', '/', $aaokuekaimigoyue); $aaokuekaimigoyue = str_replace('%20', ' ', $aaokuekaimigoyue); $ymkqyawksmqcgsei = explode('/', trim($aaokuekaimigoyue, '/')); $ymkqyawksmqcgsei = array_map('sanitize_title_for_query', $ymkqyawksmqcgsei); $kmakqcsaaqgyakom = sprintf("SELECT ID, post_name, post_parent, post_type FROM {$wpdb->posts} WHERE post_name IN ('%s') AND post_type IN ('%s')", implode("','", esc_sql($ymkqyawksmqcgsei)), implode("','", [Constants::oguseymmyyoyaako, Constants::cqycgsyykemiygou])); $sgyaeosgamaymkeo = trim(preg_replace('/\\s+/', ' ', $gqgemcmoicmgaqie)); if ($sgyaeosgamaymkeo == $kmakqcsaaqgyakom) { $eagqsqeocaokmsim = sprintf("LEFT JOIN %s fftr ON (%s.ID = fftr.object_id OR %s.post_parent = fftr.object_id) ", $wpdb->term_relationships, $wpdb->posts, $wpdb->posts); $eagqsqeocaokmsim .= sprintf("LEFT JOIN %s fftt ON (fftr.term_taxonomy_id = fftt.term_taxonomy_id) ", $wpdb->term_taxonomy); $eagqsqeocaokmsim .= sprintf("LEFT JOIN %s fft ON (fftt.term_id = fft.term_id) ", $wpdb->terms); $gqgemcmoicmgaqie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc("FROM {$wpdb->posts} WHERE", "FROM {$wpdb->posts} {$eagqsqeocaokmsim} WHERE", $kmakqcsaaqgyakom) . sprintf(" AND (fft.slug = '%s')", $soyimggocqaeswge); } } } } } return $gqgemcmoicmgaqie; } public function ceiusicsawwaaamq() { $gwqgmkqcgwwmweom = false; $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $kqokeucouewkcomm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); if (!$this->cmsiwiqkoossgmqs()) { $ukiksmygmcycwwas = $goqqimcssiyagkwy->esikumuskomeaiqq(true); $owmscuqeqmwoucuk = $goqqimcssiyagkwy->ikswooimyuycoeiw(true); if ($mumyimcwkaemyyue->kccakwkaqugygwmq()) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($ukiksmygmcycwwas) { $post = $seumokooiykcomco->get(); if ($aaokuekaimigoyue = $goqqimcssiyagkwy->eikmwwusgumqyika($post, Constants::ouywiegeiyuaaawo)) { $csaswyemmmmusmug = $seumokooiykcomco->ycqquoiyyuesegsy($post); if ($kqokeucouewkcomm !== $csaswyemmmmusmug && !str_contains($kqokeucouewkcomm, "://{$aaokuekaimigoyue}.")) { $gwqgmkqcgwwmweom = $csaswyemmmmusmug; } } } else { if ($owmscuqeqmwoucuk && $mumyimcwkaemyyue->cukiusasccucgwqc($owmscuqeqmwoucuk)) { } } } else { if ($ukiksmygmcycwwas && ($mumyimcwkaemyyue->qmssqeyayicowkgy($ukiksmygmcycwwas) || Constants::ocsomysosuqaimuc === $ukiksmygmcycwwas && $mumyimcwkaemyyue->ocwoeosukggumggw() || Constants::qgciomgukmcwscqw === $ukiksmygmcycwwas && $mumyimcwkaemyyue->sgayqmgoigoseaoo())) { $gwqgmkqcgwwmweom = $goqqimcssiyagkwy->cssikuqamakyikki($kqokeucouewkcomm); } else { if ($goqqimcssiyagkwy->euyyuaecekwekuag()) { $gwqgmkqcgwwmweom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(); } } } } if ($gwqgmkqcgwwmweom) { exit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($gwqgmkqcgwwmweom, 301)); } } public function maemmgqsuqmgekqu($eeamcawaiqocomwy, $mkomwsiykqigmqca) { if ('admin-ajax.php' === $mkomwsiykqigmqca && $this->cmsiwiqkoossgmqs()) { $eeamcawaiqocomwy = str_replace("://", "://{$this->uykissogmuaaocsg()->euyyuaecekwekuag()}.", $eeamcawaiqocomwy); } return $eeamcawaiqocomwy; } public function gmmweowwogsyigsk($iwywmkygwewiamwm, $post) : string { return $this->uykissogmuaaocsg()->cssikuqamakyikki($iwywmkygwewiamwm, $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($post)); } public function akyucemyueaukgca($iwywmkygwewiamwm, $ucicuwcaawugkseg) : string { return $this->uykissogmuaaocsg()->cssikuqamakyikki($iwywmkygwewiamwm, $this->caokeucsksukesyo()->kckogqkiycqeumoa()->get($ucicuwcaawugkseg)); } }

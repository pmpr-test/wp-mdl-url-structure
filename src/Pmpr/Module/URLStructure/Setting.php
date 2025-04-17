<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             680106b9e2106             |
    |_______________________________________|
*/
 namespace Pmpr\Module\URLStructure; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Setting extends BaseClass { const cecmeqwgqawkeieq = 'use'; const eeeoygaqqmoukaeg = 'rules'; const skiciycymuceasgc = 'subdomain_'; const okygsiiusyaymuke = self::skiciycymuceasgc . Constants::mgsccwumkcawaqcy; const iksimwyqakouyyoe = self::skiciycymuceasgc . Constants::gmmygyiecgmggaam; const yguukwesekwkiwws = self::skiciycymuceasgc . Constants::yyoaeaaaquyigiim; const yccsyuisimaakqss = self::iksimwyqakouyyoe . '_objects'; const aiuogwoqwoeysioq = self::skiciycymuceasgc . 'register_taxonomy_on'; public function qiccuiwooiquycsg() { $this->gswweykyogmsyawy(__('URL Structure', PR__MDL__URL_STRUCTURE))->igiywquyccyiaucw(Constants::ysgwugcqguggmigq, __('URL Structure Setting', PR__MDL__URL_STRUCTURE)); parent::qiccuiwooiquycsg(); } public function enqueue() { $uuwokqwyqcauaiye = []; $seyqqsmuaiegkeeq = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->ciugwooasaqcywas([Constants::wuccaoymmygisoku => true]); if ($seyqqsmuaiegkeeq) { $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $uuwokqwyqcauaiye[$kesssewsiegssiya] = $mqeowykqcggsieya->aaamyckgicycisqq($kesssewsiegssiya); } } $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, 'setting', 'setting.js'))->wwmusmkkcwsiciou($this, 'taxonomies_objects', $uuwokqwyqcauaiye); } public function ykwqaukkycogooii() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $sciomagaqmgggsiu = $this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); $this->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg('subdomain')->gswweykyogmsyawy(__('Subdomain', PR__MDL__URL_STRUCTURE))->saemoowcasogykak(IconInterface::uqyqkgaquiuiouwo)->gucwmccyimoagwcm(__('Subdomain Configuration', PR__MDL__URL_STRUCTURE))->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam('rule')->gswweykyogmsyawy(__('Rule', PR__MDL__URL_STRUCTURE))->saemoowcasogykak(IconInterface::oqyoeyiwoacsmkgm)->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::okygsiiusyaymuke)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('Target', PR__MDL__URL_STRUCTURE))->eumecwmqmukqgyea()->kesomeowemmyygey(Constants::gmmygyiecgmggaam, __('Taxonomy', PR__MDL__URL_STRUCTURE))->kesomeowemmyygey(Constants::yyoaeaaaquyigiim, __('Post Types', PR__MDL__URL_STRUCTURE))->qyucewwiggkyeaso(Constants::gmmygyiecgmggaam, [self::iksimwyqakouyyoe, self::yccsyuisimaakqss])->qyucewwiggkyeaso(Constants::yyoaeaaaquyigiim, self::yguukwesekwkiwws))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::iksimwyqakouyyoe)->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Taxonomy', PR__MDL__URL_STRUCTURE))->gucwmccyimoagwcm(__('Determine which taxonomy used as subdomain.', PR__MDL__URL_STRUCTURE))->acauweqyyugwisqc($this->caokeucsksukesyo()->yyoeeseewqmmyaee()->ciugwooasaqcywas([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs])))->mkksewyosgeumwsa($uuyucgkyusckoaeq->amgigaqagmiuoemu(self::yccsyuisimaakqss)->gswweykyogmsyawy(__('Register Post Types', PR__MDL__URL_STRUCTURE))->gucwmccyimoagwcm(__('Choose any other post types for the selected taxonomy to be registered.', PR__MDL__URL_STRUCTURE))->cuomeiwckekemywm(__('Disabled options (if any), are programmed (e.g. via a plugin) and cannot be changed.', PR__MDL__URL_STRUCTURE))->acauweqyyugwisqc($sciomagaqmgggsiu))->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::yguukwesekwkiwws)->gswweykyogmsyawy(__('Post Types', PR__MDL__URL_STRUCTURE))->cyceoowgwqqwugce(Constants::uouymeyqasaeckso)->omsoosuoikgueyke()->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::uouymeyqasaeckso)->gswweykyogmsyawy(__('Post Type', PR__MDL__URL_STRUCTURE))->eumecwmqmukqgyea()->acauweqyyugwisqc($sciomagaqmgggsiu))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::cecmeqwgqawkeieq)->gswweykyogmsyawy(__('Use', PR__MDL__URL_STRUCTURE))->eumecwmqmukqgyea()->mkmssscwmeekwgqo()->kesomeowemmyygey(Constants::wuaiimymycguougc, __('Single Slug', PR__MDL__URL_STRUCTURE))->kesomeowemmyygey(Constants::uoaamagqugwgkski, __('Archive Slug', PR__MDL__URL_STRUCTURE)))))); parent::ykwqaukkycogooii(); } }

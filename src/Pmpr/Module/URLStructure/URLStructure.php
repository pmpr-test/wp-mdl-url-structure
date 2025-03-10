<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cecae71f16c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\URLStructure; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\URLStructure\Plugin\Yoast; class URLStructure extends ComponentInitiator { const uisisakqmumqggsg = 'url_structure_'; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('URL Structure', PR__MDL__URL_STRUCTURE); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function mameiwsayuyquoeq() { Hook::symcgieuakksimmu(); Rewrite::symcgieuakksimmu(); Yoast::symcgieuakksimmu(); } }

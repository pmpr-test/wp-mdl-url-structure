<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cecae71f16c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\URLStructure\Plugin; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\URLStructure\Container; use Pmpr\Module\URLStructure\URLStructure; class Yoast extends Container { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('wpseo_sitemap_entry', [$this, 'eumsukuisguamouc'], 10, 3)->cecaguuoecmccuse('wpseo_xml_sitemap_post_url', [$this, 'moqoeouycqukymeo'], 10, 2); } public function wegiiamywoyckysa($eeamcawaiqocomwy, $ymysywcqikkiqocw, $post) { if (Constants::mswoacegomcucaik === $ymysywcqikkiqocw && isset($eeamcawaiqocomwy['loc'])) { $eeamcawaiqocomwy['loc'] = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($post); } return $eeamcawaiqocomwy; } public function moqoeouycqukymeo($migiiksoiymissge, $post) { return $this->ocksiywmkyaqseou(URLStructure::uisisakqmumqggsg . 'get_post_unchanged_link', $migiiksoiymissge, $post); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b716eeec8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Mailer\Gmail\Gmail; use Pmpr\Module\Mailer\Generic\Generic; use Pmpr\Module\Mailer\Gmail\OAuth; use Pmpr\Module\Mailer\Setting\Setting; use Pmpr\Module\Mailer\Gmail\Setting as GmailSetting; class Mailer extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x4d\x61\x69\x6c\145\x72", PR__MDL__MAILER); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\x69\156\151\x74"])->qcsmikeggeemccuu("\x61\144\x6d\x69\156\x5f\x69\x6e\151\x74", [$this, "\x79\145\x79\151\147\x75\x79\x65\147\x6d\x6d\171\x75\163\x65\x61"])->qcsmikeggeemccuu("\160\x72\145\x5f\167\x70\137\155\141\151\x6c", [$this, "\x65\143\x73\153\x6b\x73\x6b\x71\x69\x69\x71\143\157\145\151\151"]); } public function mameiwsayuyquoeq() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } } public function init() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $aiamqeawckcsuaou = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku); if (in_array($aiamqeawckcsuaou, [GmailSetting::yckkaiueuoiicisc, GmailSetting::oiugqmossekuqeia], true) && GmailSetting::symcgieuakksimmu()->euuuueemkqgqkqae()) { switch ($aiamqeawckcsuaou) { case GmailSetting::yckkaiueuoiicisc: $aswseewakkcwywqa = OAuth::symcgieuakksimmu(); if ($ymacoouqwcqwwagu = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::vswoiouoaykswgym, '', true)) { $eeaukqkuswaqwayu = $aswseewakkcwywqa->ceeskwyicggwsows($ymacoouqwcqwwagu); if (!empty($eeaukqkuswaqwayu)) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, __("\101\143\x63\145\163\x73\x20\x67\x72\141\x6e\x74\145\x64\40\x73\x75\x63\143\145\163\163\x66\x75\154\154\171\41", PR__MDL__MAILER), "\x6d\x61\x69\154\x65\x72\x5f\147\x72\x61\x6e\x74", Constants::ckcawaoawwioqecq); } else { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, __("\101\143\x63\145\x73\163\40\x63\x6f\165\x6c\144\x20\x6e\x6f\164\40\x62\145\40\x67\162\x61\156\x74\145\144\41", PR__MDL__MAILER), "\155\141\151\154\x65\162\x5f\x67\162\x61\156\x74"); } } break; default: case GmailSetting::oiugqmossekuqeia: $aswseewakkcwywqa = OAuth::symcgieuakksimmu(); $sogksuscggsicmac = $aswseewakkcwywqa->usmqosmqgoscmckk(); if (isset($sogksuscggsicmac[GmailSetting::ewmyoqeiikakqqmk])) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom(esc_url_raw($sogksuscggsicmac[GmailSetting::ewmyoqeiikakqqmk])); } break; } } } public function yeyiguyegmmyusea() { if (0) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__("\123\145\164\164\x69\156\x67", PR__MDL__MAILER), $this->kmuweyayaqoeqiyw()->oiucukewkckkwiqc()); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__("\x53\x4d\x54\120\x20\x4d\x61\x69\x6c\x65\x72\x20\143\x61\156\156\157\x74\x20\163\x65\x6e\144\x20\145\x6d\x61\151\x6c\40\x75\156\164\151\154\40\x79\x6f\165\40\145\156\164\145\162\x20\x79\157\x75\162\x20\x63\x72\x65\144\145\156\x74\x69\x61\x6c\163\x20\x69\x6e\40\x74\150\145\x20\45\163\x2e", PR__MDL__MAILER), $iwywmkygwewiamwm), "\146\x69\x6c\154\x2d\x6d\141\151\154\x65\162\55\x63\162\145\x64\145\x6e\x74\151\x61\x6c\163", Constants::imkacwmiuiykyuim); } } public function ecskkskqiiqcoeii() { $goqqimcssiyagkwy = $this->kmuweyayaqoeqiyw()->guseqygmqcgeyigi(); if (Setting::kcommsmecygyoscc === $goqqimcssiyagkwy) { Generic::symcgieuakksimmu(); } if (Setting::ecsmsisgwqsayeqs === $goqqimcssiyagkwy) { Gmail::symcgieuakksimmu()->yaosckuqsmaeqgka(); } } }

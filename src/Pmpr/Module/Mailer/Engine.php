<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6687081132000             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Exception; use PHPMailer\PHPMailer\PHPMailer; use Pmpr\Module\Mailer\Setting\Setting; use WP_Error; abstract class Engine extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\160\x68\160\x6d\x61\151\x6c\x65\x72\137\x69\x6e\151\x74", [$this, "\x65\x75\x67\x77\x73\x6b\167\x63\161\x75\165\171\x79\141\171\151"])->qcsmikeggeemccuu("\167\x70\x5f\155\x61\151\x6c\x5f\146\x61\x69\154\x65\144", [$this, "\153\x71\163\x6f\x67\161\141\141\x61\151\161\147\151\143\x75\155"]); } public function eugwskwcquuyyayi(&$ockoeumsksqeoiyo) { if (!$ockoeumsksqeoiyo instanceof PHPMailer) { goto igymseewwyiocoug; } try { $ockoeumsksqeoiyo->isSMTP(); $ockoeumsksqeoiyo = $this->ossgymsyuaouywqg($ockoeumsksqeoiyo); $ockoeumsksqeoiyo->Port = $this->weysguygiseoukqw(Setting::emawkokeeikckeym, Setting::quwmeqcomsmuymgs); $eckgoogkykaiwqyi = $this->weysguygiseoukqw(Setting::ycwieuigecimyggq, Setting::cacqqcaqygqyouay); if (!(self::NONE !== $eckgoogkykaiwqyi)) { goto cgewcsueoyaeikgm; } $ockoeumsksqeoiyo->SMTPSecure = $eckgoogkykaiwqyi; cgewcsueoyaeikgm: $ockoeumsksqeoiyo->From = $this->weysguygiseoukqw(Setting::acwacoiwicmigmom, $ockoeumsksqeoiyo->From); $ockoeumsksqeoiyo->FromName = $this->weysguygiseoukqw(Setting::aoaqugseeqkemumi, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->addReplyTo($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->setFrom($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->Timeout = 10; $ockoeumsksqeoiyo->SMTPAutoTLS = false; $ockoeumsksqeoiyo->Debugoutput = self::gsqoooskigukokks; if (!($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq() && Ajax::ykiigwasoeagkiuq === $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(self::uqgcmmosieyimiku))) { goto sukskmcwsoysiuqu; } $ockoeumsksqeoiyo->SMTPDebug = 4; sukskmcwsoysiuqu: } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici($this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } igymseewwyiocoug: return $ockoeumsksqeoiyo; } public function ossgymsyuaouywqg(PHPMailer $ockoeumsksqeoiyo) : PHPMailer { return $ockoeumsksqeoiyo; } public function kqsogqaaaiqgicum($iswcokucwmiosiaq) { if (!($iswcokucwmiosiaq instanceof WP_Error && $iswcokucwmiosiaq->errors && isset($iswcokucwmiosiaq->errors["\167\160\137\x6d\x61\151\x6c\137\146\x61\x69\x6c\145\x64"]) && is_array($iswcokucwmiosiaq->errors["\x77\x70\137\155\x61\151\154\137\146\x61\x69\x6c\145\144"]))) { goto mqccmesakuemceqi; } $this->ciyuwccsawgygkie(implode("\x20\174\40", $this->wsmkmgikcacikiwe($iswcokucwmiosiaq)), $iswcokucwmiosiaq->get_all_error_data()); mqccmesakuemceqi: } }

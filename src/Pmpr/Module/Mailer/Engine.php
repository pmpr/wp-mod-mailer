<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b716eeec8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Exception; use PHPMailer\PHPMailer\PHPMailer; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Mailer\Setting\Setting; use WP_Error; abstract class Engine extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\160\150\160\x6d\x61\151\x6c\x65\x72\x5f\151\x6e\x69\x74", [$this, "\145\165\x67\x77\x73\x6b\167\x63\x71\165\165\171\x79\141\x79\x69"])->qcsmikeggeemccuu("\x77\160\x5f\155\x61\x69\154\x5f\146\x61\x69\x6c\145\144", [$this, "\x79\141\x73\141\x75\155\141\155\147\157\x77\x6f\151\167\141\x77"])->qcsmikeggeemccuu("\167\x70\x5f\155\141\151\x6c\137\163\x75\143\x63\145\x65\x64\x65\x64", [$this, "\x61\x6d\143\157\x6f\153\145\167\x61\161\x75\151\x67\x6f\x69\171"]); } public function eugwskwcquuyyayi(&$ockoeumsksqeoiyo) { if ($ockoeumsksqeoiyo instanceof PHPMailer) { try { $ockoeumsksqeoiyo->isSMTP(); $ockoeumsksqeoiyo = $this->ossgymsyuaouywqg($ockoeumsksqeoiyo); $ockoeumsksqeoiyo->Port = $this->weysguygiseoukqw(Setting::emawkokeeikckeym, Setting::quwmeqcomsmuymgs); $eckgoogkykaiwqyi = $this->weysguygiseoukqw(Setting::ycwieuigecimyggq, Setting::cacqqcaqygqyouay); if (Constants::NONE !== $eckgoogkykaiwqyi) { $ockoeumsksqeoiyo->SMTPSecure = $eckgoogkykaiwqyi; } $ockoeumsksqeoiyo->From = $this->weysguygiseoukqw(Setting::acwacoiwicmigmom, $ockoeumsksqeoiyo->From); $ockoeumsksqeoiyo->FromName = $this->weysguygiseoukqw(Setting::aoaqugseeqkemumi, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->addReplyTo($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->setFrom($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->Timeout = 10; $ockoeumsksqeoiyo->SMTPAutoTLS = false; $ockoeumsksqeoiyo->Debugoutput = Constants::gsqoooskigukokks; if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq() && Ajax::ykiigwasoeagkiuq === $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku)) { $ockoeumsksqeoiyo->SMTPDebug = 4; } } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } } return $ockoeumsksqeoiyo; } public function ossgymsyuaouywqg(PHPMailer $ockoeumsksqeoiyo) : PHPMailer { return $ockoeumsksqeoiyo; } public function yasaumamgowoiwaw($iswcokucwmiosiaq) { if ($iswcokucwmiosiaq instanceof WP_Error && $iswcokucwmiosiaq->errors && isset($iswcokucwmiosiaq->errors["\167\x70\x5f\155\x61\x69\154\137\146\141\151\154\x65\144"]) && is_array($iswcokucwmiosiaq->errors["\167\160\x5f\x6d\x61\151\x6c\x5f\146\141\151\x6c\x65\x64"])) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->eumukgqciqgksuiq(implode("\x20\174\x20", $this->caokeucsksukesyo()->euekiyuksecoccus()->ywgmqwueaugywcwi($iswcokucwmiosiaq)), $iswcokucwmiosiaq->get_all_error_data()); } } public function amcookewaquigoiy($icwicymcioeyeyek) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\x61\x69\x6c\145\x72\72\40\105\x6d\141\151\x6c\40\163\145\156\x74\x20\163\165\143\143\x65\x73\163\x66\x75\x6c\154\x79", $icwicymcioeyeyek); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             663031b2b6a13             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use Google\Client; use Google\Service\Gmail; use WP_Error; class OAuth extends Common { protected ?Client $client = null; protected ?string $oauthUserEmail = ''; protected ?string $oauthClientSecret = ''; protected ?string $oauthClientId = ''; protected ?string $oauthRefreshToken = ''; public function __construct($csywmcysoeokssww = '') { parent::__construct(); $this->oauthClientId = $this->weysguygiseoukqw(Setting::askekoeogouwkgwe); $this->oauthUserEmail = $this->weysguygiseoukqw(Setting::yqamagycoiomemuo); $this->oauthClientSecret = $this->weysguygiseoukqw(Setting::ycuosiyegyweyggm); $this->oauthRefreshToken = $csywmcysoeokssww; } public function wmciwsucuuyumkes() : Client { if (!empty($this->client)) { goto meawswgwagoqgkye; } $qcakkkwickkwyuck = new Client(); $this->client = $qcakkkwickkwyuck; $qcakkkwickkwyuck->setScopes(Gmail::maacmcucmwkmkgey); $qcakkkwickkwyuck->setClientId($this->oauthClientId); $qcakkkwickkwyuck->setClientSecret($this->oauthClientSecret); $iewmcsieaqyamggu = $this->kmuweyayaqoeqiyw()->oiucukewkckkwiqc(); $iewmcsieaqyamggu = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\141\x63\164\x69\x6f\156" => "\x61\x75\164\150\x5f\147\162\141\156\164"], $iewmcsieaqyamggu); $qcakkkwickkwyuck->setRedirectUri($iewmcsieaqyamggu); $qcakkkwickkwyuck->setAccessType("\157\146\146\x6c\x69\x6e\x65"); meawswgwagoqgkye: return $this->client; } public function usmqosmqgoscmckk() { $eeaukqkuswaqwayu = $this->icyskgykkigmcuec(); if (!is_wp_error($eeaukqkuswaqwayu)) { goto wcesymwqykqoyuqk; } $coewqcmgkkmawigm = $this->wmciwsucuuyumkes()->createAuthUrl(); return [self::ewmyoqeiikakqqmk => $coewqcmgkkmawigm]; wcesymwqykqoyuqk: return $eeaukqkuswaqwayu; } public function ceeskwyicggwsows($iwiqmygaeowkcuck) { $eeaukqkuswaqwayu = $this->wmciwsucuuyumkes()->fetchAccessTokenWithAuthCode($iwiqmygaeowkcuck); if (!(!empty($eeaukqkuswaqwayu) && is_array($eeaukqkuswaqwayu))) { goto mswsoaimesegiiic; } if (!(isset($eeaukqkuswaqwayu["\145\162\162\x6f\162"]) || isset($eeaukqkuswaqwayu["\145\x72\x72\x6f\162\137\x64\x65\163\143\162\x69\x70\x74\151\157\156"]))) { goto usqgaogkqgemuima; } echo "\x3c\144\151\166\40\151\144\x3d\x22\x6d\x65\x73\163\x61\x67\145\x22\x20\143\x6c\141\163\x73\x3d\x22\x65\162\x72\157\x72\42\x3e\x3c\160\x3e\x3c\163\164\162\157\x6e\x67\76"; esc_html_e("\105\162\162\x6f\x72\72\x20" . $eeaukqkuswaqwayu["\145\x72\x72\x6f\x72"] . "\54\40\x45\x72\x72\x6f\162\40\x44\145\x73\x63\x72\151\160\164\151\157\156\x3a\x20" . $eeaukqkuswaqwayu["\x65\x72\x72\157\x72\x5f\x64\x65\163\x63\x72\x69\160\164\151\157\x6e"], PR__MDL__MAILER); echo "\x3c\x2f\163\164\162\x6f\x6e\x67\76\74\57\x70\76\x3c\57\144\151\166\76"; return false; usqgaogkqgemuima: $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iwyoukakoookgaee, $eeaukqkuswaqwayu); return $eeaukqkuswaqwayu; mswsoaimesegiiic: return false; } public function wiqyioosoqcqwuwi() { $sogksuscggsicmac = $this->icyskgykkigmcuec(); if (!is_wp_error($sogksuscggsicmac)) { goto egasokooagakisiy; } return false; egasokooagakisiy: if (!($sswycsgkqaiomeem = $this->cmiamcgoqceqyimu())) { goto kecwuwwcwokuksyq; } return base64_encode("\165\x73\145\x72\x3d{$this->oauthUserEmail}\1\x61\x75\164\150\75\102\145\x61\x72\145\x72\x20{$sswycsgkqaiomeem}\1\1"); kecwuwwcwokuksyq: return false; } private function cmiamcgoqceqyimu() { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->iyysycaqqccsmysy("\x68\164\x74\160\x73\x3a\x2f\x2f\x61\x63\x63\x6f\165\x6e\164\x73\x2e\x67\x6f\157\147\x6c\x65\56\x63\157\x6d\57\157\57\x6f\x61\x75\x74\150\62\57\x74\157\x6b\145\x6e", [self::cikssaguawsukusm => ["\x67\162\141\156\x74\x5f\x74\x79\160\x65" => Setting::siumwmyaoyeyggeo, "\x63\x6c\x69\145\156\164\137\x69\144" => $this->oauthClientId, "\143\x6c\x69\145\x6e\x74\x5f\163\145\143\162\x65\164" => $this->oauthClientSecret, "\162\x65\146\162\145\163\x68\x5f\x74\157\153\145\156" => $this->oauthRefreshToken]]); $kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, "\x61\143\143\145\163\x73\x5f\x74\x6f\x6b\145\156", false); } public function icyskgykkigmcuec() { $eeaukqkuswaqwayu = $this->kmuweyayaqoeqiyw()->giiuwsmyumqwwiyq(Setting::iwyoukakoookgaee); if (!empty($eeaukqkuswaqwayu)) { goto qgegkeomwscwwiuw; } return new WP_Error(); qgegkeomwscwwiuw: $qcakkkwickkwyuck = $this->wmciwsucuuyumkes(); $qcakkkwickkwyuck->setAccessToken($eeaukqkuswaqwayu); if (!$qcakkkwickkwyuck->isAccessTokenExpired()) { goto qmiwsequckckoaei; } $mgegoogckgsumooq = $qcakkkwickkwyuck->getRefreshToken(); $qcakkkwickkwyuck->refreshToken($mgegoogckgsumooq); $eeaukqkuswaqwayu = $qcakkkwickkwyuck->getAccessToken(); $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iwyoukakoookgaee, $eeaukqkuswaqwayu); qmiwsequckckoaei: return $eeaukqkuswaqwayu; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae8a5c9632             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use PHPMailer\PHPMailer\PHPMailer; use Pmpr\Module\Mailer\Engine as BaseClass; use Pmpr\Module\Mailer\Gmail\PHPMailer as CustomPHPMailer; class Engine extends BaseClass { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x70\x72\145\x5f\x77\160\137\x6d\141\x69\x6c", [$this, "\171\x61\157\163\x63\153\x75\x71\x73\x6d\141\x65\161\x67\153\141"]); parent::wigskegsqequoeks(); } public function ossgymsyuaouywqg(PHPMailer $ockoeumsksqeoiyo) : PHPMailer { $ockoeumsksqeoiyo->Host = "\163\x6d\x74\x70\56\x67\155\141\x69\x6c\x2e\143\157\x6d"; $ockoeumsksqeoiyo->SMTPAuth = true; $ockoeumsksqeoiyo->AuthType = "\x58\x4f\101\x55\124\110\62"; return parent::ossgymsyuaouywqg($ockoeumsksqeoiyo); } public function yaosckuqsmaeqgka() { $immqesyuiaiyauio = $GLOBALS["\160\x68\x70\x6d\141\x69\154\145\x72"] ?? null; if (!$immqesyuiaiyauio instanceof PHPMailer) { goto csscmcacoikwsecs; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\x61\151\x6c\145\x72\72\x20\x50\x48\x50\115\141\x69\x6c\x65\162\x20\x41\154\x72\x65\x61\x64\x79\40\x49\x6e\151\164\151\141\x6c\151\x7a\x65\x64\56", ["\x63\x6f\162\x72\145\x63\x74" => $immqesyuiaiyauio instanceof CustomPHPMailer ? "\x79\145\x73" : "\156\157"]); goto cuykwgmswkskqkyi; csscmcacoikwsecs: require_once ABSPATH . WPINC . "\57\x50\x48\x50\x4d\141\x69\154\x65\x72\x2f\120\110\x50\x4d\141\x69\x6c\x65\162\x2e\160\x68\x70"; require_once ABSPATH . WPINC . "\57\120\x48\x50\115\141\x69\x6c\145\162\x2f\123\x4d\124\x50\x2e\160\x68\x70"; require_once ABSPATH . WPINC . "\x2f\x50\x48\120\x4d\141\151\x6c\145\162\x2f\105\x78\143\145\x70\164\x69\x6f\156\56\160\150\160"; $immqesyuiaiyauio = new CustomPHPMailer(true); $immqesyuiaiyauio::$validator = function ($owaiikyuwwwmswgc) { return (bool) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->qkgmsqgmwoamekyk($owaiikyuwwwmswgc); }; $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\141\x69\154\x65\x72\x3a\40\103\x75\163\164\157\155\40\x50\110\x50\115\141\x69\x6c\145\x72\x20\x49\156\x69\x74\x69\141\x6c\151\x7a\145\144\56"); $GLOBALS["\160\150\x70\x6d\x61\151\x6c\145\162"] = $immqesyuiaiyauio; cuykwgmswkskqkyi: } }

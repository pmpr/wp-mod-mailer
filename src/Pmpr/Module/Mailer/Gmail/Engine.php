<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6630b75d6b5ce             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use PHPMailer\PHPMailer\PHPMailer; use Pmpr\Module\Mailer\Engine as BaseClass; use Pmpr\Module\Mailer\Gmail\PHPMailer as CustomPHPMailer; class Engine extends BaseClass { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\160\162\x65\x5f\167\x70\x5f\155\141\x69\154", [$this, "\x79\141\157\163\x63\153\165\161\163\155\x61\x65\161\x67\153\141"]); parent::wigskegsqequoeks(); } public function ossgymsyuaouywqg(PHPMailer $ockoeumsksqeoiyo) : PHPMailer { $ockoeumsksqeoiyo->Host = "\163\x6d\x74\160\x2e\147\155\141\151\154\56\x63\x6f\x6d"; $ockoeumsksqeoiyo->SMTPAuth = true; $ockoeumsksqeoiyo->AuthType = "\130\x4f\x41\125\x54\x48\62"; return parent::ossgymsyuaouywqg($ockoeumsksqeoiyo); } public function yaosckuqsmaeqgka() { $immqesyuiaiyauio = $GLOBALS["\x70\150\x70\155\141\x69\154\x65\162"] ?? null; if (!$immqesyuiaiyauio instanceof PHPMailer) { goto ickcmqoiosquugwe; } $this->oaumimwssciwumys("\x4d\x61\151\x6c\145\162\72\40\x50\x48\120\x4d\x61\x69\154\x65\x72\40\101\154\162\145\x61\144\171\x20\x49\156\151\x74\x69\141\x6c\151\172\145\x64\56", ["\x63\x6f\x72\x72\x65\143\x74" => $immqesyuiaiyauio instanceof CustomPHPMailer ? "\171\145\x73" : "\156\157"]); goto qmeoaqmsuseueqiy; ickcmqoiosquugwe: require_once ABSPATH . WPINC . "\57\120\110\120\115\141\x69\x6c\x65\162\x2f\120\110\x50\115\x61\151\x6c\x65\x72\56\160\x68\160"; require_once ABSPATH . WPINC . "\x2f\x50\x48\120\115\x61\x69\154\x65\x72\57\x53\115\x54\120\56\x70\150\x70"; require_once ABSPATH . WPINC . "\57\x50\110\x50\x4d\x61\151\x6c\145\162\57\x45\170\143\145\x70\x74\x69\157\x6e\56\160\150\160"; $immqesyuiaiyauio = new CustomPHPMailer(true); $immqesyuiaiyauio::$validator = function ($owaiikyuwwwmswgc) { return (bool) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->qkgmsqgmwoamekyk($owaiikyuwwwmswgc); }; $this->oaumimwssciwumys("\x4d\x61\151\x6c\145\x72\72\x20\103\x75\x73\164\157\155\x20\120\x48\120\115\x61\151\154\145\x72\x20\111\156\x69\164\151\141\x6c\151\x7a\145\144\56"); $GLOBALS["\160\150\x70\x6d\x61\x69\x6c\x65\x72"] = $immqesyuiaiyauio; qmeoaqmsuseueqiy: } }

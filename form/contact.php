<?php
use App\Mailer;

require(__DIR__ . '/../vendor/autoload.php');

$mailer = new Mailer([
	'host' => 'smtp.gmail.com',
	'username' => 'shivamhandloomindustry@gmail.com ',
	'password' => 'Shivam@123',
	'port' => '465',
	'encryption' => 'ssl'
]);

function parseTemplate($tpl, $data) {
    $htmlContents = file_get_contents(__DIR__ . '/../templates/' . $tpl);
    foreach($data as $key => $value) {
        $htmlContents = str_replace('{{ ' . $key . ' }}', $value, $htmlContents);
    }

    return $htmlContents;
}


$mailer->from('enquiry.crologic@gmail.com')
	->replyTo($_REQUEST['email'])
	->subject('Enquiry Mail')
	->html(parseTemplate('contact-mail.html', $_REQUEST))->send('shivamhandloomindustry@gmail.com');

$mailer->from('enquiry.crologic@gmail.com')
	->replyTo('shivamhandloomindustry@gmail.com')
	->subject('Enquiry Mail')
	->html(parseTemplate('contact-user.html', $_REQUEST))->send($_REQUEST['email']);

header('Location: ' . '../contact.php?message=Your message has been submitted');

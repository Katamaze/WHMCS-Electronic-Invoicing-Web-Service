<?php

/**
 * Documentation
 *
 * @english   https://katamaze.com/docs/billing-extension/38/webservice ]
 * @italian   https://katamaze.it/docs/billing-extension/38/webservice ]
 * @github    https://github.com/Katamaze/WHMCS-Electronic-Invoicing-Web-Service 
 */

// Authentication
$URL	= ''; // Trailing slash "/" is required
$Token 	= '';

// Post Data
$postData['action'] = 'Get';
//$postData['start'] = 'Month to date';
//$postData['end'] = '2019-06-15';
//$postData['invoicenum'] = '2019-150';
//$postData['invoiceid'] = '10';
//$postData['doctype'] = 'Invoices';

# # # # # # # # # # # # # # # # # # # #
# # # DO NOT EDIT BELOW THIS LINE # # #
# # # # # # # # # # # # # # # # # # # #
$postData['ws'] = 'einvoice';
$postData['token'] = $Token;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $URL . 'modules/addons/BillingExtension/core/BillingExtension_Admin/resources/einvoice/einvoice.php');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
$postDataresponse= curl_exec($ch);

if (curl_error($ch))
{
	die('Unable to connect: ' . curl_errno($ch) . ' - ' . curl_error($ch));
}
curl_close($ch);

header('Content-Type: application/json');
echo $postDataresponse;

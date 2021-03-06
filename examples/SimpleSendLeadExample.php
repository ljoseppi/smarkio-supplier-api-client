<?php
/*
 * An example on how to create a Lead (with the mandatory parameters only)
 * and how to use the API to send it to Smark.io.
 */

require __DIR__ . '/../src/Smarkio/Supplier/Lead.php';

use Smarkio\Supplier\Lead;

$api_token = 'INSERT YOUR TOKEN HERE';
$external_id = '1';
$campaign_external_id = '98';
$ip_address = '74.125.224.72';
$email = 'dummy@example.net';
$domain = 'mywebsite.example.net';

// create Lead with mandatory parameters
$lead = new Lead($api_token, $external_id, $campaign_external_id, $ip_address, $email, $domain);

// send the Lead
$response = $lead->send();

echo "API Response: '{$response}'\n";
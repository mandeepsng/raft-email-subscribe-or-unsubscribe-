<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Magento\Framework\App\Bootstrap;

require __DIR__ . '/../app/bootstrap.php';

$params = $_SERVER;
$bootstrap = Bootstrap::create(BP, $params);
$objectManager = $bootstrap->getObjectManager();
$state = $objectManager->get('Magento\Framework\App\State');
$state->setAreaCode('frontend');


/* Magento Customer Newsletter subscription */

/* $customerRepository = $objectManager->create('Magento\Customer\Api\CustomerRepositoryInterface');
$customerAccountManagement = $objectManager->create('Magento\Customer\Api\AccountManagementInterface');
$subscriberFactory = $objectManager->create('Magento\Newsletter\Model\SubscriberFactory');

$websiteId = (int)1;

$i=0;
if (($handle = fopen("raft_subscriber_import_all.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
    {
    	$emailId =  trim($data[0]); //email
    	$isEmailNotExists = $customerAccountManagement->isEmailAvailable($emailId, $websiteId);
    	if($isEmailNotExists){    		
    		$subscriberFactory->create()->subscribe($emailId); //Guest Subscription
    	} else {
	    	$customerData = $customerRepository->get($emailId);
			$customerId = (int)$customerData->getId();
			if($customerId)
				$subscriberFactory->create()->subscribeCustomerById($customerId); //Subscibe with customer ID
    	}
    	$i++;

    	if($i==100)
    		sleep(5);
    }
}
echo "Total $i record updated"; */

/* Klaviyou Subscription */

/* $helper = $objectManager->create('Klaviyo\Reclaim\Helper\Data');

$helper->subscribeEmailToKlaviyoList('18copperkins@gmail.com','Chris','Ludlam'); // To Subscribe on Klaviyo
$helper->unsubscribeEmailFromKlaviyoList('18copperkins@gmail.com'); // To unSubscribe on Klaviyo

*/

/* Multiple email unsubscribe */

/* $unsubs = ['amandastepho@icloud.com','atcp2@cam.ac.uk','barbaralronan@gmail.com','ben.wagon@yahoo.co.uk','dgwainwright@gmail.com','eardleyjuliet@gmail.com','jilly.scriven@icloud.com','jonathanbernstein15@googlemail.com','alaa.mkt@gmail.com','azeisler@proton.me','b.dawar@gmail.com','claire.rosiaux@gmail.com','fosterhl@yahoo.co.uk','furrypark@hotmail.com','jofriston@gmail.com','maciej156@gmail.com','markmte@icloud.com','natanael.diaz.gl@gmail.com','nicolas_gtl@yahoo.com','oliviaaneill@gmail.com','Philipearnshaw70@gmail.com','theresemb.butler@gmail.com'];

foreach ($unsubs as $email) {
	$helper->unsubscribeEmailFromKlaviyoList($email);
} */

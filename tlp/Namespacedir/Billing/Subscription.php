<?php 

namespace Namespacedir\Billing;

require_once('Receipt.php');
require_once('AnotherReceipt.php');

use Receipt\Receipt;
use AnotherReceipt\Receipt as AB;

class Subscription {
	public function SendReceipt() {
		$receipt = new AB;
		echo $receipt->GetOutput();
	}
}

$obj = new Subscription;
$obj->SendReceipt();


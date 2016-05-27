<?php 

//namespace Namespacedir\Contacts;

require_once('../Billing/Receipt.php');
require_once('../Billing/AnotherReceipt.php');
 
//use Receipt\Receipt as first;
//use AnotherReceipt\Receipt;

// Alias 
// use Receipt\Receipt as a;
// use AnotherReceipt\Receipt as b;

// class Donor {
// 	public function SendReceipt() {
// 		 $receipt = new receipt();
// 		 $receipt->GetOutput();
// 	}
// }



$ob = new Receipt;
$ob->GetOutput();

// will work when has alias
// $ob = new a;
// $ob->GetOutput();



/*
LESSON: 

1. you still have to include the files when you are even using NAMESPACE. 

2. When including the files, you may call classes even without using any NAMESPACE if you don't have same class in any of the link files. If you have same class name in link files, you have to use NAMESPACE. 

3. When using multiple NAMESPACE that have same class names in a file (like current file) , use Alias to differentiate among them. 

4. If you specify NAMESPACE in any of the files, You will need to use NAMESPACE / USE to utilize NAMESPACE feature. Otherwise, php will show error. 


*/
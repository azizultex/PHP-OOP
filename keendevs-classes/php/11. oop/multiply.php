<?php 

 class Math{
      public $n;

          public function __construct($n3){
          $this->n = $n3;
          // print_r($this->n);
          $filter = array_filter($this->n,function($var)
          {
          return($var & 1);
          });
          print_r($filter);

        //   foreach($this->n as $v){
        //     if ($v%2==0) {
        //         echo $v;
        //     }

        //   }
          
      }
 }
 $n2 = [1,2,3,4,5,6,7];
 $r = new Math($n2);
//  print_r($r->n);

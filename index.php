<?php
$words = array(
  'pes' => array('hafan ' , 'psisko'),
  'kocka' => array('micka ' , 'číča'),
  'auto' => array('vůz ' , 'kára'),
  'budova' => array('barák ' , 'dům'),
  'jídlo' => array('pápů ' , 'papí'),
  'zadek' => array('zadnice ' , 'sedínka')
);
foreach ($words as $key => $value) {
  echo $key;
  ?></br><?php
  foreach ($value as $item) {
    echo $item;

  }
  ?></br><?php
}
?>

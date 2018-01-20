<?php
  $dimWeight = $_POST["dimWeight"];
  $feeTable = array(
    array(0.5, 66.08),
		array(1, 78.40),
		array(2, 112),
		array(3, 140),
		array(4, 168),
		array(5, 196),
		array(6, 218.40),
		array(7, 240.80),
		array(8, 263.20),
		array(9, 285.60),
		array(10, 308),
		array(11, 319.20),
		array(12, 330.40),
		array(13, 341.60),
		array(14, 352.80),
		array(15, 364),
		array(16, 375.20),
		array(17, 386.40),
		array(18, 397.60),
		array(19, 408.80),
		array(20, 420),
		array(21, 431.20),
		array(22, 442.40),
		array(23, 453.60),
		array(24, 464.80),
		array(25, 476),
		array(26, 487.20),
		array(27, 498.40),
		array(28, 509.60),
		array(29, 520.80),
		array(30, 532),
		array(31, 560)
  );

  if($dimWeight == 0){
    echo 0;
    return;
  }

  if ($dimWeight < $feeTable [0][0]) {
		echo number_format($feeTable [0][1]);
    return;
	}

	for ($i = 0; $i < count($feeTable); $i++) {
		if ($feeTable [$i][0] == $dimWeight) {
			echo number_format($feeTable [$i][1], 2);
      return;
		}
	}

	echo number_format($feeTable [count($feeTable) - 1][1], 2);
  return;
?>

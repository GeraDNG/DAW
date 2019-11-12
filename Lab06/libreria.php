<?php

  function minorToMajor($numbers) {
    if(count($numbers) <= 1){
        return $numbers;
    }
    else{
        $pivot = $numbers[0];
        $left = array();
        $right = array();
        for($i = 1; $i < count($numbers); $i++)
        {
            if($numbers[$i] < $pivot){
                $left[] = $numbers[$i];
            }
            else{
                $right[] = $numbers[$i];
            }
        }
        return array_merge(minorToMajor($left), array($pivot), minorToMajor($right));
    }
  }

  function majorToMinor($numbers) {
    if(count($numbers) <= 1){
        return $numbers;
    }
    else{
        $pivot = $numbers[0];
        $left = array();
        $right = array();
        for($j = 1; $j < count($numbers); $j++)
        {
            if($numbers[$j] > $pivot){
                $left[] = $numbers[$j];
            }
            else{
                $right[] = $numbers[$j];
            }
        }
        return array_merge(majorToMinor($left), array($pivot), majorToMinor($right));
    }
  }

  function detectPairNumbers($numbers) {
    $pairNumbers = array();
    $l = 0;
    for ($k=0; $k<count($numbers); $k++) {
      if (($numbers[$k]%2)==0) {
        $pairNumbers[$l] = $numbers[$k];
        $l++;
      }
    }
    return $pairNumbers;
  }

  function detectOddNumbers($numbers) {
    $oddNumbers = array();
    $n = 0;
    for ($m=0; $m<count($numbers); $m++) {
      if (($numbers[$m]%2)!=0) {
        $oddNumbers[$n] = $numbers[$m];
        $n++;
      }
    }
    return $oddNumbers;
  }

  function getAverage($numbers) {
    $summatory = 0;
    for ($o=0; $o<count($numbers); $o++) {
      $summatory += $numbers[$o];
    }
    return ($summatory/count($numbers));
  }

  function getMedian($numbers) {
    $minorToMajorNumbers = minorToMajor($numbers);
    if (count($minorToMajorNumbers)%2 == 0) {
      return $minorToMajorNumbers[count($minorToMajorNumbers)/2];
    }
    else {
      return ( ($minorToMajorNumbers[(count($minorToMajorNumbers)/2)-1] + $minorToMajorNumbers[count($minorToMajorNumbers)/2]) / 2);
    }
  }

  function getFashion($numbers) {
    $counter = 0;
    $frequency = 0;
    $fashion = 0;
    for($p=0; $p<(count($numbers)-1); $p++){
      if($numbers[$p] == $numbers[$p+1]){
        $counter++;
      }
      else{
        if ($counter>$frequency) {
          $fashion = $numbers[$p];
          $frequency = $counter;
          $counter = 1;
        }
        else {
          $counter = 1;
        }
      }
    }

    return $fashion;
  }

  // ----------------------------------------------------------------------

  // Ordenar un conjunto de números de forma ascendente o descendente,
  $numbers = explode(',', $_POST["numbers"]);
  $tipoOrdenamiento = $_POST["sort_order"];
  $numberType = $_POST["number_type"];
  $stats = $_POST["stats"];

  echo "Los números ingresados son: ";
  for ($a=0; $a<count($numbers); $a++) {
    echo $numbers[$a];
    echo ",";
  }

  echo "<br/> El método de ordenamiento seleccionado es: " .$tipoOrdenamiento;
  if ($tipoOrdenamiento == "Major") {
    $numerosOrdenados = majorToMinor($numbers);
  }
  elseif ($tipoOrdenamiento == "Minor") {
    $numerosOrdenados = minorToMajor($numbers);
  }
  else {
    echo "<br/> ERROR <br/>";
  }
  echo "<br/> Los números ordenados son: ";
  for ($b=0; $b<count($numbers); $b++) {
    echo $numerosOrdenados[$b];
    echo ",";
  }

  echo "<br/> Se solicitó detectar ";
  if($numberType == "Pair") {
    echo "numeros pares: ";
    $pairNumbers = detectPairNumbers($numbers);
    for ($c=0; $c<count($pairNumbers); $c++) {
      echo $pairNumbers[$c];
      echo ",";
    }
  }
  elseif ($numberType == "Odd") {
    $oddNumbers = detectOddNumbers($numbers);
    echo "numeros impares: ";
    for ($d=0; $d<count($oddNumbers); $d++) {
      echo $oddNumbers[$d];
      echo ",";
    }
  }
  else {
    echo "<br/> ERROR <br/>";
  }

  if($stats['Average']=="average") {
    echo "<br/> El promedio de los numeros ingresados es de: ";
    $average = getAverage($numbers);
    echo $average;
  }
  if($stats['median']=="median") {
    echo "<br/> La mediana de los numeros ingresados es de: ";
    $median = getMedian($numbers);
    echo $median;
  }
  if ($stats['Fashion']=="fashion") {
    echo "<br/> La moda de los numeros ingresados es de: ";
    $fashion = getFashion($numbers);
    echo $fashion;
  }

?>

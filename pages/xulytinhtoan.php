<?php
    $soA = intval($_GET["txtsoA"]);
    $soB = intval($_GET["txtsoB"]);
    $pheptinh = $_GET["txtpheptinh"];
    $KQ = 0;
    if($pheptinh == "+") $KQ = $soA +$soB;
    else if($pheptinh == "-") $KQ = $soA-$soB;
    else if($pheptinh == "*") $KQ = $soA*$soB;
    else {
        if($soB != 0) $KQ = ($soA*1.0/$soB);
        else $KQ = "inf";
    }
    $query = http_build_query((array(
        'txtsoA' => $soA,
        'txtsoB' => $soB,
        'txtpheptinh' => $pheptinh,
        'KQ' => $KQ
    )));
    header("Location: ../index.php?frmtinhtoan=&".$query);
?>
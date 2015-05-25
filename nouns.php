<?php
include("string.php");
$pieces = explode("\n",$string);
$base = "[";
for($a = 0; $a<=count($pieces)-1; $a++)
{
	$pos = explode("`", $pieces[$a]);
	$det = explode(" ",$pos[3]);
	if($pos[2]=="N")
	{
		if($det[0]=="1")
		{
			$root = $pos[1];
			$nom = $root."a";
			$gen = $root."ae";
    		$dat = $root."ae";
    		$acc = $root."am";
    		$abl = $root."a";
    		$voc = $root."a";
    		$nompl = $root."ae";
			$genpl = $root."arum";
    		$datpl = $root."is";
    		$accpl = $root."as";
    		$ablpl = $root."is";
    		$vocpl = $root."ae";
		}
		else if($det[0]=="2")
		{
			if($det[2]=="M" || $det[2]=="F" || $det[2]=="C")
			{
				if($det[1]=="3")
				{
					$root = $pos[1];
					$nom = $pos[0];
					$gen = $root."i";
    				$dat = $root."o";
    				$acc = $root."um";
    				$abl = $root."o";
    				$voc = $nom;
    				$nompl = $root."i";
					$genpl = $root."orum";
    				$datpl = $root."is";
    				$accpl = $root."os";
    				$ablpl = $root."is";
    				$vocpl = $nompl;
				}
				else if($det[1]=="7")
				{
					$root = $pos[1];
					$nom = $pos[0];
					$gen = $root."is";
					$gen2 = $root."os";
    				$dat = $root."i";
    				$dat2 = $root."o";
    				$acc = $nom."on";
    				$abl = $root."i";
    				$voc = $nom;
    				$nompl = $root."is";
    				$nompl2 = $root."oi";
					$genpl = $root."ium";
					$genpl2 = $root."on";
    				$datpl = $root."ibus";
    				$accpl = $root."os";
    				$accpl = $root."is";
    				$ablpl = $root."ibus";
    				$vocpl = $nompl;
				}
				else if($det[1]=="1")
				{
					$root = $pos[1];
					$nom = $root."us";
					$gen = $root."i";
    				$dat = $root."o";
    				$acc = $root."um";
    				$abl = $root."o";
    				$voc = $root."e";
    				$nompl = $root."i";
					$genpl = $root."orum";
    				$datpl = $root."is";
    				$accpl = $root."os";
    				$ablpl = $root."is";
    				$vocpl = $nompl;
				}
				else if($det[1]=="4")
				{
					$root = $pos[1];
					$nom = $root."us";
					$gen = $root."i";
					$gen2 = $root;
    				$dat = $root."o";
    				$acc = $root."um";
    				$abl = $root."o";
    				$voc = $root."e";
    				$nompl = $root."i";
    				$nompl2 = $root;
					$genpl = $root."orum";
    				$datpl = $root."is";
    				$datpl2 = $root."s";
    				$accpl = $root."os";
    				$ablpl = $root."is";
    				$ablpl2 = $root."s";
    				$vocpl = $nompl;
				}
				else if($det[1]=="5")
				{
					$root = $pos[1];
					$nom = $pos[0]."us";
					$gen = $root."i";
    				$dat = $root."o";
    				$acc = $root."um";
    				$abl = $root."o";
    				$voc = $root."i";
    				$nompl = $root."i";
					$genpl = $root."orum";
    				$datpl = $root."is";
    				$accpl = $root."os";
    				$ablpl = $root."is";
    				$vocpl = $nompl;
				}
				else if($det[1]=="9")
				{
					$root = $pos[1];
					$nom = $pos[0];
					$gen = $root."i";
    				$dat = $root."o";
    				$acc = $root."um";
    				$abl = $root."o";
    				$voc = $root."u";
    				$nompl = $root."i";
					$genpl = $root."orum";
    				$datpl = $root."is";
    				$accpl = $root."os";
    				$ablpl = $root."is";
    				$vocpl = $nompl;
				}
				else if($det[1]=="6")
				{
					$root = $pos[1];
					$nom = $pos[0];
					$gen = $root."i";
    				$dat = $root."o";
    				$acc = $root."um";
    				$abl = $root."o";
    				$voc = $root."e";
    				$nompl = $root."i";
					$genpl = $root."orum";
    				$datpl = $root."is";
    				$accpl = $root."os";
    				$ablpl = $root."is";
    				$vocpl = $nompl;
				}
			}
			else if($det[2]=="N")
			{
				if(strpos($pos[4], "(pl.)")!==false)
				{
					$root = $pos[1];
					$nom = $root."a";
					$gen = $root."orum";
    				$dat = $root."is";
    				$acc = $root."a";
    				$abl = $root."is";
    				$voc = $root."a";
    				$nompl = $root."";
					$genpl = $root."";
    				$datpl = $root."";
    				$accpl = $root."";
    				$ablpl = $root."";
    				$vocpl = "";
				}
				else if($det[1]=="2")
				{
					$root = $pos[1];
					$nom = $root."um";
					$gen = $root."i";
    				$dat = $root."o";
    				$acc = $root."um";
    				$abl = $root."o";
    				$voc = $root."um";
    				$nompl = $root."a";
					$genpl = $root."orum";
    				$datpl = $root."is";
    				$accpl = $root."a";
    				$ablpl = $root."is";
    				$vocpl = $nompl;
				}
				else if($det[1]=="1")
				{
					$root = $pos[1];
					$nom = $root."us";
					$gen = $root."i";
    				$dat = $root."o";
    				$acc = $root."us";
    				$abl = $root."o";
    				$voc = $root."e";
    				$nompl = $root."a";
					$genpl = $root."orum";
    				$datpl = $root."is";
    				$accpl = $root."a";
    				$ablpl = $root."is";
    				$vocpl = $nompl;
				}
				else if($det[1]=="6")
				{
					$root = $pos[1];
					$nom = $pos[0];
					$gen = $root."i";
    				$dat = $root."o";
    				$acc = $root."os";
    				$abl = $root."o";
    				$voc = $root."e";
    				$nompl = $root."a";
					$genpl = $root."orum";
    				$datpl = $root."is";
    				$accpl = $root."a";
    				$ablpl = $root."is";
    				$vocpl = $nompl;
				}
				else if($det[1]=="4")
				{
					$root = $pos[1];
					$nom = $root."um";
					$gen = $root."i";
					$gen2 = $root;
    				$dat = $root."o";
    				$acc = $root."um";
    				$abl = $root."o";
    				$voc = $root."um";
    				$nompl = $root."a";
					$genpl = $root."orum";
    				$datpl = $root."is";
    				$datpl2 = $root."s";
    				$accpl = $root."a";
    				$ablpl = $root."is";
    				$ablpl2 = $root."s";
    				$vocpl = $nompl;
				}
				else if($det[1]=="8")
				{
					$root = $pos[1];
					$nom = $root."on";
					$gen = $root."i";
    				$dat = $root."o";
    				$acc = $root."on";
    				$abl = $root."o";
    				$voc = $root."e";
    				$nompl = $root."a";
					$genpl = $root."orum";
    				$datpl = $root."is";
    				$accpl = $root."a";
    				$ablpl = $root."is";
    				$vocpl = $nompl;
				}
			}
		}
		else if($det[0]=="3")
		{
			if($det[1]=="3")
			{
				if($det[2]=="M" || $det[2]=="F" || $det[2]=="C")
				{
					$root = $pos[1];
					$nom = $pos[0];
					$gen = $root."is";
					$dat = $root."i";
					$acc = $root."em";
					$abl = $root."i";
					$voc = $nom;
					$nompl = $root."es";
					$genpl = $root."ium";
					$datpl = $root."ibus";
					$accpl = $root."es";
					$accpl2 = $root."is";
					$ablpl = $root."ibus";
					$vocpl = $nompl;
				}
				else
				{
					$root = $pos[1];
					$nom = $pos[0];
					$gen = $root."is";
					$dat = $root."i";
					$acc = $nom;
					$abl = $root."i";
					$voc = $nom;
					$nompl = $root."es";
					$genpl = $root."ium";
					$datpl = $root."ibus";
					$accpl = $root."es";
					$accpl2 = $root."is";
					$ablpl = $root."ibus";
					$vocpl = $nompl;
				}
			}
			else
			{
				if($det[2]=="M" || $det[2]=="F" || $det[2]=="C")
				{
					$root = $pos[1];
					$nom = $pos[0];
					$gen = $root."is";
					$dat = $root."i";
					$acc = $root."em";
					$abl = $root."e";
					$voc = $nom;
					$nompl = $root."es";
					$genpl = $root."um";
					$datpl = $root."ibus";
					$accpl = $root."es";
					$ablpl = $root."ibus";
					$vocpl = $nompl;
				}
				else
				{
					$root = $pos[1];
					$nom = $pos[0];
					$gen = $root."is";
					$dat = $root."i";
					$acc = $nom;
					$abl = $root."e";
					$voc = $nom;
					$nompl = $root."es";
					$genpl = $root."um";
					$datpl = $root."ibus";
					$accpl = $root."es";
					$ablpl = $root."ibus";
					$vocpl = $nompl;
				}
			}
		}
		else if($det[0]=="4")
		{
			if($det[2]=="N")
			{
				$nom = $pos[0]."u";
				$root = $pos[1];
				$gen = $root."us";
				$dat = $root."u";
				$acc = $nom;
				$abl = $root."u";
				$voc = $nom;
				$nompl = $root."ua";
				$genpl = $root."uum";
				$datpl = $root."ibus";
				$accpl = $root."ua";
				$ablpl = $root."ibus";
				$vocpl = $nompl;
			}
			else
			{
				$nom = $pos[0]."us";
				$root = $pos[1];
				$gen = $root."us";
				$dat = $root."ui";
				$acc = $root."um";
				$abl = $root."u";
				$voc = $nom;
				$nompl = $root."us";
				$genpl = $root."uum";
				$datpl = $root."ibus";
				$accpl = $root."us";
				$ablpl = $root."ibus";
				$vocpl = $nompl;
			}
		}
		else if($det[0]=="5")
		{
			$root = $pos[1];
			$nom = $root."es";
			$gen = $root."ei";
			$dat = $root."ei";
			$acc = $root."em";
			$abl = $root."e";
			$voc = $root."es";
			$nompl = $root."es";
			$genpl = $root."erum";
			$datpl = $root."ebus";
			$accpl = $root."es";
			$ablpl = $root."ebus";
			$vocpl = $nompl;
		}
		if (!isset($nom2)) $nom2 = "";
		if (!isset($gen2)) $gen2 = "";
		if (!isset($dat2)) $dat2 = "";
		if (!isset($acc2)) $acc2 = "";
		if (!isset($abl2)) $abl2 = "";
		if (!isset($voc2)) $voc2 = "";
		if (!isset($nompl2)) $nompl2 = "";
		if (!isset($genpl2)) $genpl2 = "";
		if (!isset($datpl2)) $datpl2 = "";
		if (!isset($accpl2)) $accpl2 = "";
		if (!isset($ablpl2)) $ablpl2 = "";
		if (!isset($vocpl2)) $vocpl2 = "";	
		$arr = array("nom"=>$nom,"nom2"=>$nom2,"gen"=>$gen,"gen2"=>$gen2,"dat"=>$dat,"dat2"=>$dat2,"acc"=>$acc,"acc2"=>$acc2,"abl"=>$abl,"abl2"=>$abl2,"voc"=>$voc,"voc2"=>$voc2,"nompl"=>$nompl,"nompl2"=>$nompl2,"genpl"=>$genpl,"genpl2"=>$genpl2,"datpl"=>$datpl,"datpl2"=>$datpl2,"accpl"=>$accpl,"accpl2"=>$accpl2,"ablpl"=>$ablpl,"ablpl2"=>$ablpl2,"vocpl"=>$vocpl,"vocpl2"=>$vocpl2);
		$json = json_encode($arr);
		$base.=$json.",";
		$nom2 = "";
		$gen2 = "";
		$dat2 = "";
		$acc2 = "";
		$abl2 = "";
		$voc2 = "";
		$nompl2 = "";
		$genpl2 = "";
		$datpl2 = "";
		$accpl2 = "";
		$ablpl2 = "";
		$vocpl2 = "";
	}
}
$fp = fopen('nouns.json', 'w');
fwrite($fp, $base."]");
fclose($fp);
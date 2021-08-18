<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: verdana;
  font-size:9px;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #gray;
}
</style>

<?php

//$path1	='D:\GIT\FactoryWork\fw23\Carsem Rules';Nokeywordsexist
//$path4	='D:\GIT\FactoryWork\fw23\Carsem Rules\RuleProject';Nokeywordsexist
//$path9	='D:\GIT\FactoryWork\fw23\Carsem Rules - Auto Track\RuleProject';//norows
//$path11	='D:\GIT\FactoryWork\fw23\Carsem Rules - Auto Track\RuleProject';////norows
//$path19	='D:\GIT\FactoryWork\fw23\Carsem Rules - OPQA';//nokeywordexist
//$path31	='D:\GIT\FactoryWork\fw23\Carsem Rules - SPC\Charts';//nokeywordexist
//$path46	='D:\GIT\FactoryWork\Fw23 Utilities\Assembly\Utilities Rules\RuleForms\Obsolete_NotInUsed';//norows
//$path48	='D:\GIT\FactoryWork\Fw23 Utilities\Assembly\Utilities Rules\RuleModules\Obsolete_NotInUsed';//norows
//$path49	='D:\GIT\FactoryWork\Fw23 Utilities\Assembly\Utilities Rules\Utilities Dll\Utilities Dll Project';//norows
//$path56	='D:\GIT\FactoryWork\MWP_FOLQA\CSMRulesSvr\MESTester'; //norows
//$path57	='D:\GIT\FactoryWork\VB6\MESWebPro_V1';//notaplicable
//$path58	='D:\GIT\FactoryWork\VB6\MESWebPro_V1\Carsem Rules - OPQA\Forms';//Ada comment
//$path59	='D:\GIT\FactoryWork\VB6\MESWebPro_V1\Carsem Rules - OPQA\Modules';
//$path60	='D:\GIT\FactoryWork\VB6\MESWebPro_V1\CarsemRules-MD\Form';//norows
//$path61	='D:\GIT\FactoryWork\VB6\MESWebPro_V1\CarsemRules-MD\Modules';//norows
//$path63	='D:\GIT\FactoryWork\VB6\MESWebPro_V1\CarsemRules-WaferLevel\RuleModules';//norows
//$path64	='D:\GIT\FactoryWork\VB6\MESWebPro_V1\Class Modules';//norows
//$path65	='D:\GIT\FactoryWork\VB6\MESWebPro_V1\Forms';//norows
//$path71	='D:\GIT\FactoryWork\MWP_FOLQA\CSMRulesSvr\MESCore\MESCore\CoreLibs\MDLLib';norows
//Py
//$path3	='D:\GIT\FactoryWork\fw23\Carsem Rules\RuleForms\Obsolete_NotInUsed';
//$path7	='D:\GIT\FactoryWork\fw23\Carsem Rules - Auto Track\RuleForms';
//$path8	='D:\GIT\FactoryWork\fw23\Carsem Rules - Auto Track\RuleModules';
//$path10	='D:\GIT\FactoryWork\fw23\Carsem Rules\RuleModules\Obsolete_NotInUsed';
//$path15	='D:\GIT\FactoryWork\fw23\Carsem Rules - MD\RuleForms\Obsolete_NotInUsed';//
//$path17	='D:\GIT\FactoryWork\fw23\Carsem Rules - Misc\RuleForms\Obsolete_NotInUsed';
//$path20	='D:\GIT\FactoryWork\fw23\Carsem Rules - OPQA\RuleForms\Obsolete_NotInUsed';
//----OBSOLETE
//$path22	='D:\GIT\FactoryWork\fw23\Carsem Rules - OPQA\RuleModules\Obsolete_NotInUsed';
//$path24	='D:\GIT\FactoryWork\fw23\Carsem Rules - Pp\RuleForms\Obsolete_NotInUsed';
//$path26	='D:\GIT\FactoryWork\fw23\Carsem Rules - Printing\RuleForms\Obsolete_NotInUsed';
//$path30	='D:\GIT\FactoryWork\fw23\Carsem Rules - SPC\RuleModules\Obsolete_NotInUsed';
//$path35	='D:\GIT\FactoryWork\fw23\Carsem Rules - Test\RuleForms\Obsolete_NotInUsed';
//$path37	='D:\GIT\FactoryWork\fw23\Carsem Rules - Test\RuleForms\Setup\Obsolete_NotInUsed';
//$path39	='D:\GIT\FactoryWork\fw23\Carsem Rules - Test\RuleModules\Obsolete_NotInUsed';

//Available's Lines
$path2	='D:\GIT\FactoryWork\fw23\Carsem Rules\RuleForms';
$path5	='D:\GIT\FactoryWork\fw23\Carsem Rules\RuleProject\Carsem Rules - Brooks';
$path6	='D:\GIT\FactoryWork\fw23\Carsem Rules\RuleProject\Reports\Carsem Rules - Brooks';
$path12	='D:\GIT\FactoryWork\fw23\Carsem Rules - Brooks';
$path13	='D:\GIT\FactoryWork\fw23\Carsem Rules - MD\RuleForms';
$path14	='D:\GIT\FactoryWork\fw23\Carsem Rules - MD\RuleModules';
$path16	='D:\GIT\FactoryWork\fw23\Carsem Rules - Misc\RuleForms';//
$path18	='D:\GIT\FactoryWork\fw23\Carsem Rules - Misc\RuleModules';
$path21	='D:\GIT\FactoryWork\fw23\Carsem Rules - OPQA\RuleModules';
$path23	='D:\GIT\FactoryWork\fw23\Carsem Rules - Pp\RuleForms';
$path25	='D:\GIT\FactoryWork\fw23\Carsem Rules - Printing\RuleForms';
$path27	='D:\GIT\FactoryWork\fw23\Carsem Rules - SPC\RuleProject';//nokeywordexist
$path28	='D:\GIT\FactoryWork\fw23\Carsem Rules - SPC\RuleForms';//
$path29	='D:\GIT\FactoryWork\fw23\Carsem Rules - SPC\RuleModules';//
$path32	='D:\GIT\FactoryWork\fw23\Carsem Rules - SPC DLL\RuleForms';
$path33	='D:\GIT\FactoryWork\fw23\Carsem Rules - SPC DLL\RuleModules';
$path34	='D:\GIT\FactoryWork\fw23\Carsem Rules - Test\RuleForms';
$path36	='D:\GIT\FactoryWork\fw23\Carsem Rules - Test\RuleForms\Setup';
$path38	='D:\GIT\FactoryWork\fw23\Carsem Rules - Test\RuleModules';
$path40	='D:\GIT\FactoryWork\fw23\Carsem Rules - WaferLevel\RuleForms';
$path41	='D:\GIT\FactoryWork\fw23\Carsem Rules - WaferLevel\RuleModules';
$path42	='D:\GIT\FactoryWork\fw23\Carsem Rules - YL\RuleForms';
$path43	='D:\GIT\FactoryWork\Fw23 Utilities\Assembly\Utilities Rules';
$path44	='D:\GIT\FactoryWork\Fw23 Utilities\Assembly\Utilities Rules\RuleClasses';
$path45	='D:\GIT\FactoryWork\Fw23 Utilities\Assembly\Utilities Rules\RuleForms';
$path47	='D:\GIT\FactoryWork\Fw23 Utilities\Assembly\Utilities Rules\RuleModules';
$path50	='D:\GIT\FactoryWork\MWP_FOLQA\CSMRulesSvr\MESPro\MESPro\BusinessLogic\CustomRules';
$path51	='D:\GIT\FactoryWork\MWP_FOLQA\CSMRulesSvr\MESPro\MESPro\BusinessLogic\FormRules';
$path52	='D:\GIT\FactoryWork\MWP_FOLQA\CSMRulesSvr\MESPro\MESPro\BusinessLogic\FWUtilities';
$path53	='D:\GIT\FactoryWork\MWP_FOLQA\CSMRulesSvr\MESPro\MESPro\BusinessLogic\SPCRules';
$path54	='D:\GIT\FactoryWork\MWP_FOLQA\CSMRulesSvr\MESPro\MESPro\WinForm';
$path55	='D:\GIT\FactoryWork\MWP_FOLQA\CSMRulesSvr\MESPro\MESPro\WinForm\SPC';
$path62	='D:\GIT\FactoryWork\VB6\MESWebPro_V1\CarsemRules-Printing\Form';
$path66	='D:\GIT\FactoryWork\VB6\MESWebPro_V1\Modules';
$path67	='D:\GIT\FactoryWork\MWP_FOLQA\CSMRulesSvr\MESCore\MESCore\CoreLibs\BaseLib';
$path68	='D:\GIT\FactoryWork\MWP_FOLQA\CSMRulesSvr\MESCore\MESCore\CoreLibs\CATLib';
$path69	='D:\GIT\FactoryWork\MWP_FOLQA\CSMRulesSvr\MESCore\MESCore\CoreLibs\Common';
$path70	='D:\GIT\FactoryWork\MWP_FOLQA\CSMRulesSvr\MESCore\MESCore\CoreLibs\MDLLib\EQPIDE';
$path72	='D:\GIT\FactoryWork\MWP_FOLQA\CSMRulesSvr\MESCore\MESCore\CoreLibs\OPRLib';
$path73	='D:\GIT\FactoryWork\MWP_FOLQA\CSMRulesSvr\MESCore\MESCore\CoreLibs\PRPLib';
$path74	='D:\GIT\FactoryWork\MWP_FOLQA\CSMRulesSvr\MESCore\MESCore\CoreLibs\WFLib';
$path75	='D:\GIT\FactoryWork\MWP_FOLQA\CSMRulesSvr\MESCore\MESCore\CoreLibs\WIPLib\WIPIDE';
$path76	='D:\GIT\FactoryWork\MWP_FOLQA\CSMRulesSvr\MESPro\MESPro\BusinessLogic\FormRules\FormIDERules';


//$start = 2;$end = 2;
// $start = 6;$end = 6;
// $start = 7;$end = 7;
// $start = 8;$end = 8;

//$start = 10;$end = 10;

//$start = 12;$end = 12;
//$start = 13;$end = 13; 
//$start = 14;$end = 14;
//$start = 17;$end = 17;

// $start = 17;$end = 17;
//$start = 18;$end = 18;
//$start = 15;$end = 15;
//$start = 16;$end = 16;
//$start = 19;$end = 19;//
//$start = 31;$end = 31;

//$start = 24;$end = 24;
//$start = 21;$end = 21;
//$start = 35;$end = 35;
//$start = 26;$end = 26;
//$start = 27;$end = 27;
// $start = 43;$end = 43;
// $start = 67;$end = 67;
  // $start = 35;$end = 35;
   // $start = 39;$end = 39;
      // $start = 44;$end = 44;
//	     $start = 45;$end = 45;//hold
//$start = 37;$end = 37;
//$start =39;$end = 39;//hold
// $start = 52;$end = 52;
//$start = 32;$end = 32;
//$start = 55;$end = 55;
//$start = 62;$end = 62;


//$start = 66;$end = 66;
// $start = 67;$end = 67;
 //$start = 68;$end = 68;
 // $start = 69;$end = 69;
//$start = 70;$end = 70;
 //$start = 71;$end = 71;
 // $start = 72;$end = 72;
 // $start = 73;$end = 73;
//$start = 74;$end = 74;
//$start = 76;$end = 76;




$findThisString  = 'RawSqlGetColumn(';
$findThisString1 = 'FwRawSQLs.ExecuteSQL(';
$findThisString2 = '.RunOraSQL';



echo $start." - ".$end;
echo "<table><tr><th>File</th><th col='1'>Table/Column/Where<br></th><th col='1'>Desc<br></th></tr>";
for ($v=$start;$v<=$end;$v++)
{

$path = ${'path'.$v};

$dir = dir($path);
while (false !== ($file = $dir->read()))
{   
	//$file = $dir->read();

    if ($file != '.' && $file != '..')
    {

 $myFileLink = fopen($path . '/' . $file, 'r') or die(print_r(error_get_last(),true));

 $line = 1; 

 while(!feof($myFileLink)) { 

     $myFileContents = fgets($myFileLink);

		if (!(preg_match_all('/(^[\']?(.*?)[\'])/', $myFileContents, $matches))){ 
		
     if( preg_match_all('/('.preg_quote($findThisString,'/').')/i', $myFileContents, $matches)||
	 preg_match_all('/('.preg_quote($findThisString1,'/').')/i', $myFileContents, $matches)||
	 preg_match_all('/('.preg_quote($findThisString2,'/').')/i', $myFileContents, $matches)){
		echo "<tr>";
        foreach($matches[1] as $match){
		
        //echo "Found $match on $line.<br>";
		echo "<td><font color='red'>".$file."|".$line."</font></td>";
		$lines = file($path . '/' . $file); 

		$limit = 25;
		$found = $limit-1;
		$isorder = 0;
		

		$newL = $line - $limit; 
		$i = 1;
		$j = 1;
		echo "<td>";
		$col = 0;
		while ($i<$limit)
		{

			//$col = 1;$tab = 1;
			$newL++;
			if ($i == $found){
				print "<td><font color='blue'>".$lines[$newL]."</font></td>"; 
			}
			else
			{
				$col++;
				$patt0   = "/\btable\b/i";
				$patt1   = "/\bDim sTables\b/i";
				$patC0   = "/\bsCols\b/i";
				$patC1   = "/\bsColNames\b/i";
				$patC2   = "/\bDim sCols\b/i";
				$patC3   = "/\b, sCols\b/i";
				$patW0   = "/\bsWhereclause\b/i";
				$patW1   = "/\bsmWhereClause\b/i";
				$patOrd  = "/\bOrder By\b/i";
				
				$empty    = "/\ \b/i";
				if (preg_match($patt0, $lines[$newL])&& !preg_match($patt1, $lines[$newL])&& !preg_match($patt1, $lines[$newL])) { 
					$col = 0;
					//$tab = 0;$col = 0;
				    print "<br><font color='darkblue'>".$lines[$newL]."</font>"; 
				} 


				if((preg_match($patC0, $lines[$newL])||preg_match($patC1, $lines[$newL])) && !preg_match($patC2, $lines[$newL])&& !preg_match($patC3, $lines[$newL])){
					//$tab = 0;
					$col = 1;
					
					print "<br><font color='green'>".$lines[$newL]."</font>"; 
					
				}	
				if ($col > 1 ) { 
				//echo "2";
					print "<br><font color='gray'>".$lines[$newL]."</font>"; 
					
				} 	
				
			
				// if (preg_match($patW0, $lines[$newL])||preg_match($patW1, $lines[$newL])) { 
				// print "<font color='purple'>".$lines[$newL]."</font>"; 
				// } 

				if (preg_match($patOrd, $lines[$newL])) { 
				print "<br><font color='orange'>".$lines[$newL]."</font>"; 
				$isorder  = 1;
				} 
				
		
			}
				
			$i++;
				 

			  
		}
		echo "</td>";
		}
		echo "</tr>";
     }//end check
		 }//end check 'set

     ++$line;
 } //while	
	}
   //error_reporting(E_ERROR | E_PARSE);
    
//} 
}	//end while


$dir->close();
} // for loop

?>

</table>

</html>
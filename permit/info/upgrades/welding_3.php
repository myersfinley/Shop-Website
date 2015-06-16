<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" /> 

<!-- ****************************************************************************
**********															*************
**********		INSERT PAGE TITLE BELOW within quotations!!!! 		*************
**********		Title should be the same as the <h1> tag below 		*************
**********															*************
*********************************************************************************	-->
				<?php $subtitle = "Welding 3 Upgrade";?>

            
		<?php require($_SERVER['DOCUMENT_ROOT']."/functions.php") ?>
 		<?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
		<?php require($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

<!-- ************************* 	End of Navigation Items	 ****************************-->

<div id="wrapper">		<!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

	<div id="leftNav">

		<?php require($_SERVER['DOCUMENT_ROOT']."/permit/permit_left_nav.php") ?> <!-- Left Navigation in the include file -->

		<h2 class="subnav2"><span>Related Links</span></h2>
			<ul>
                <li><a href="/permit/info/upgrades/welding_1.php">Welding 1 Upgrade</a></li>            					
				<li><a href="/permit/info/upgrades/welding_2.php">Welding 2 Upgrade</a></li>
            </ul>
                    
      </div> <!-- END OF LEFT NAV DIV -->
		
	<div id="MainContent"> <!-- sets the main content (middle column area) -->

	  <h1>Welding 3 Upgrade</h1>
      
      	<h2>Overview</h2>
        	<p>The welding 3 upgrade is an additional amount of training individuals can take to learn how to safely setup and use the MIG spool gun to weld aluminium in the <a href="/capabilities/labs/welding_lab.php">Student Shop welding lab</a>. Individuals will not be allowed to MIG weld aluminum until they have obtained a welding 3 upgrade.</p>
        
        <h2>Privileges</h2>
        	<ul>
            		<li>Use the Shop's MIG welders on aluminum</li> 
            	</ul>
        
        <h2>Prerequisites</h2>
        	<ul>
            		<li>Red or green permit</li>        	       
			<li><a href="/permit/info/upgrades/welding_1.php">Welding 1 Upgrade</a></li>	
		</ul>
            
        <h2>Requirements</h2>
        	<p>(must be completed in order)</p>
        	<ul>
            		<li><a href="https://emu.engr.wisc.edu/emu" rel="external">Apply for the welding 3 upgrade</a>&#42;</li>
                	<li>Enroll in and attend the <a href="/permit/info/seminars/welding_3.php">welding 3 seminar</a></li>
            	</ul>
            <p>&#42;Individuals will only be able to see upgrades in EMU for which they have completed the prerequisites.</p>
            
         <h2>Time Frame</h2>
         	<ul>
				<li>Upgrades must be completed within 45 days of applying. Failure to meet the 45 day deadline will result in all progress towards the upgrade being removed</li>
            </ul>                         
            <br />
            
	</div> <!-- END OF MAINCONTENT -->	

</div> <!-- END OF WRAPPER -->

<?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

    </body>
</html>

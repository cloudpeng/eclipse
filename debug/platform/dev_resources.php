<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# Copyright (c) 2007 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Debug Team
	# Date:			August 25, 2006
	#
	# Description: This is the development reosurces page for the Platform Debug website
	#
	#
	#****************************************************************************

	$pageTitle 		= "Platform Debug Development Resources";
	$pageKeywords	= "debug, platform, debugging, debugger, jdt, breakpoints, developement, resources, dev";
	$pageAuthor		= "Debug Team";
	
	include("../_sideCommon.php");
	include("_pluginCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h2><b>Bugs</b></h2>
			<ul>
		        <li><a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&priority=P1&email1=&emailtype1=substring&emailassigned_to1=1&email2=&emailtype2=substring&emailreporter2=1&bugidtype=include&bug_id=&changedin=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&product=Platform&version=&component=Debug&short_desc=&short_desc_type=allwordssubstr&long_desc=&long_desc_type=allwordssubstr&keywords=&keywords_type=anywords&field0-0-0=noop&type0-0-0=noop&value0-0-0=&cmdtype=doit&order=Reuse+same+sort+as+last+time" target="_top">Priority 1</a></li>
		        <li><a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&email1=&emailtype1=substring&emailassigned_to1=1&email2=&emailtype2=substring&emailreporter2=1&bugidtype=include&bug_id=&changedin=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&product=Platform&component=Debug&short_desc=&short_desc_type=allwordssubstr&long_desc=&long_desc_type=allwordssubstr&keywords=&keywords_type=anywords&field0-0-0=noop&type0-0-0=noop&value0-0-0=&cmdtype=doit&newqueryname=&order=Reuse%2Bsame%2Bsort%2Bas%2Blast%2Btime" target="_top" >New, Assigned and Reopened</a> </li>
		    </ul>
		</div>
		<div class="homeitem3col">
			<h2><b>Documents</b></h2>
			<ul>
		        <li><a href="/eclipse/debug/get_involved.php">Contributing to the Debug Platform</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.debug.core/buildnotes_platform-debug.html" target="_blank">Up-to-the-minute build notes</a></li>
		    </ul>
		</div>
		<div class="homeitem3col">
			<h2><b>Plugins</b></h2>
			<p>The Platform Debug component consists solely of the following components:</p>
			<ul>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.debug.core" target="_top">org.eclipse.debug.core</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.debug.ui" target="_top">org.eclipse.debug.ui</a></li>
		    </ul>
		</div>
		<div class="homeitem3col">
			<h2><b>Mailing Lists</b></h2>
			<ul>
	        	<li><a href="http://dev.eclipse.org/mailman/listinfo/platform-debug-dev">platform-debug-dev@eclipse.org</a> 
	          	(<a href="mailto:platform-debug-dev@eclipse.org">post</a>, <a href="http://dev.eclipse.org/mhonarc/lists/platform-debug-dev/maillist.html">archives</a>)</li>
      		</ul>
		</div>
		<div class="homeitem3col">
			<h2><b>Update Site</b></h2>
			<ul>
	        	<li><a href="http://www.eclipse.org/eclipse/debug/update/">http://www.eclipse.org/eclipse/debug/update/</a> 
      		</ul>
		</div>
	</div>
	<div id="rightcolumn">
		$commonside
		$commonplugin
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

<?php
#**************************************************************************
#  openSIS is a free student information system for public and non-public 
#  schools from Open Solutions for Education, Inc. It is  web-based, 
#  open source, and comes packed with features that include student 
#  demographic info, scheduling, grade book, attendance, 
#  report cards, eligibility, transcripts, parent portal, 
#  student portal and more.   
#
#  Visit the openSIS web site at http://www.opensis.com to learn more.
#  If you have question regarding this system or the license, please send 
#  an email to info@os4ed.com.
#
#  Copyright (C) 2007-2008, Open Solutions for Education, Inc.
#
#*************************************************************************
#  This program is free software: you can redistribute it and/or modify
#  it under the terms of the GNU General Public License as published by
#  the Free Software Foundation, version 2 of the License. See license.txt.
#
#  This program is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU General Public License for more details.
#
#  You should have received a copy of the GNU General Public License
#  along with this program.  If not, see <http://www.gnu.org/licenses/>.
#**************************************************************************

	$_REQUEST['modfunc'] = 'choose_course';
	
	if(!$_REQUEST['course_period_id'])
		include 'modules/Scheduling/CoursesforWindow.php';
	else
	{
		$course_title = DBGet(DBQuery("SELECT TITLE FROM COURSE_PERIODS WHERE COURSE_PERIOD_ID='".$_REQUEST['course_period_id']."'"));
		$course_title = $course_title[1]['TITLE'] . '<INPUT type=hidden name=w_course_period_id value='.$_REQUEST['course_period_id'].'>';
		
	/*	echo "<script language=javascript>opener.document.getElementById(\"course_div\").innerHTML = \"$course_title<BR><small><INPUT type=radio name=w_course_period_id_which value=course_period CHECKED>Course Period<INPUT type=radio name=w_course_period_id_which value=course>Course </small>\"; window.close();</script>"; */
	/*	echo "<script language=javascript>opener.document.getElementById(\"course_div\").innerHTML = \"$course_title<BR>\"; window.close();</script>"; */
		echo "<script language=javascript>opener.document.getElementById(\"course_div\").innerHTML = \"$course_title</small>\"; window.close();</script>";
	}

?>
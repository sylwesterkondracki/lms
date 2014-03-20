<?php

/*
 * LMS iNET
 *
 *  (C) Copyright 2012 LMS iNET Developers
 *
 *  Please, see the doc/AUTHORS for more information about authors!
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License Version 2 as
 *  published by the Free Software Foundation.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307,
 *  USA.
 *
 *  $Id: v 1.00 Sylwester Kondracki Exp $
 */

include('networknode.inc.php');

$layout['pagetitle'] = 'Nowy węzeł';

if (isset($_POST['name']))
{
    $networknode = $_POST['networknode'];
    $networknode['name'] = $_POST['name'];
    $networknode['teryt'] = $_POST['teryt'] ? true : false;
    if (!$networknode['teryt'] && empty($networknode['collocationid'])) $networknode['location_city'] = $networknode['location_street'] = NULL;

    $SESSION->redirect('?m=networknodeinfo&idn='.$LMS->Addnetworknode($networknode));
}


$SMARTY->assign('actions','add');
$SMARTY->display('networknodeedit.html');
?>

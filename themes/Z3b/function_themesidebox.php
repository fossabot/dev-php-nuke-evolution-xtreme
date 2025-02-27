<?php
# THEME INFO                                                                            #
# Universal Theme v1.0 (Fixed & Full Width)                                             #
#                                                                                       #
# Final Build Date 03/16/2021 Tuesday 12:54am                                           #
#                                                                                       #
# A Very Nice Fire and Brimstone Theme Design.                                          #
# Copyright © 2021 By: TheGhost AKA EABuffington                                        #
# e-Mail : ernest.buffington@gmail.com                                                  #
#---------------------------------------------------------------------------------------#
# CREATION INFO                                                                         #
# Created On: 03/16/2021 Tuesday 12:54am (v1.0)                                         #
#                                                                                       #
# Credit goes to Lonestar On: 1st August, 2019 (v3.0)                                   #
# HTML5 Theme Code By: Lonestar (Lonestar-Modules.com)                                  #
#                                                                                       #
# Credit goes to TheMortal                                                              #
# For his CSS MENU                                                                      #
#                                                                                       #
# Read CHANGELOG File for Updates & Upgrades Info                                       #
#                                                                                       #
# Designed By: TheGhost & Sebastian                                                     #
# Web Site: https://www.86it.us                                                         #
# Purpose: PHP-Nuke Titanium | Nuke Evolution Xtreme                                    #
#---------------------------------------------------------------------------------------#
# CMS INFO                                                                              #
# PHP-Nuke Copyright (c) 2006 by Francisco Burzi phpnuke.org                            #
# Nuke Evolution Xtreme (c) 2010 : Enhanced PHP-Nuke Web Portal System                  #
# PHP-Nuke Titanium (c) 2021     : Enhanced PHP-Nuke Web Portal System                  #
#---------------------------------------------------------------------------------------#
#                                                                                       #
# Special Honorable Mentions                                                            #
#---------------------------------------------------------------------------------------#
# killigan                                                                              # 
# -[04/17/2010] Updated Nuke Sentinel to version 2.6.01                                 # 
# -[04/17/2010] Updated Nuke Evolution to XHTML 1.0 Transitional                        #
#---------------------------------------------------------------------------------------#
# SgtLegend                                                                             #   
# -[04/17/2010] Updated Nuke Evolution to XHTML 1.0 Transitional                        #
# -[04/18/2010] Updated the installer/upgrade files and display                         #
# -[04/19/2010] Improved load time for global variables                                 #
# -[04/21/2010] Upgraded Swift mail to version 4.0.6                                    #
# -[04/21/2010] Upgraded HTML Purifier to version 4                                     # 
#---------------------------------------------------------------------------------------#
# Technocrat                                                                            # 
# -[04/22/2010] Added speed tweaks to the cache and PHP version compare                 #  
#---------------------------------------------------------------------------------------#
# Eyecu                                                                                 # 
# -[04/17/2010] Updated Nuke Evolution to XHTML 1.0 Transitional                        #
#---------------------------------------------------------------------------------------#
# Wolfstar                                                                              # 
# -[04/17/2010] Updated Nuke Evolution to XHTML 1.0 Transitional                        #
#---------------------------------------------------------------------------------------#

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

/*--------------------------*/
/* Theme SideBox
/*--------------------------*/
function themesidebox($title, $content, $bid = 0) 
{
global $theme_name;

echo "\n\n<!-- function themesidebox START -->\n";

print '<table class=blockz cellSpacing="0" cellPadding="0" border="0" width="249">'."\n";
print '<tr><td width="39" style="background: repeat-x; background-image: url('.HTTPS.'themes/'.$theme_name.'/tables/OpenTable/invisible_pixel.gif);">'."\n";
print '<img src="'.HTTPS.'themes/'.$theme_name.'/tables/OpenTable/tlc.png" border="0" width="39" height="50"></td>'."\n";

print '<td valign="top" align="center" style="background: repeat-x; background-image: url('.HTTPS.'themes/'.$theme_name.'/tables/OpenTable/topmiddle.png);"><br><strong>'.$title.'</strong></td>'."\n";

print '<td align="right" width="39">'."\n";
print '<img src="'.HTTPS.'themes/'.$theme_name.'/tables/OpenTable/trc.png" border="0" width="39" height="50"></td>'."\n";
print '</tr>'."\n";
print '<tr><td colSpan="3">'."\n";
print '<table cellSpacing="0" cellPadding="0" width="100%" border="0">'."\n";
print '<tr>'."\n";
print '<td width="23" height="3" background="'.HTTPS.'themes/'.$theme_name.'/tables/OpenTable/leftside.png">'."\n";
print '<img src="'.HTTPS.'themes/'.$theme_name.'/tables/OpenTable/leftside.png" border="0" width="23" height="3"></td>'."\n";
print '<td width="100%">'."\n";
print '<table cellSpacing="0" cellPadding="8" width="100%" border="0" style="border-collapse: collapse" bordercolor="#111111">'."\n";
print '<tr>'."\n";
print '<td width="100%" bgcolor="#0b151f">'."\n";

echo "<!-- CONTENT START -->\n\n\n\n\n";
echo '<div align="left" id="text">';
echo ''.$content.'</div>';
echo '</td>';
echo "\n\n\n\n\n<!-- CONTENT END -->\n";

print '</td>';
print '</tr>';
print '</table>';
print '</td>';
print '<td width="23" height="3" background="'.HTTPS.'themes/'.$theme_name.'/tables/CloseTable/rightside.png">'."\n";
print '<img src="'.HTTPS.'themes/'.$theme_name.'/tables/CloseTable/rightside.png" border="0" width="23" height="3"></td>'."\n";
print '</tr>'."\n";
print '</table>'."\n";
print '</td>'."\n";
print '</tr>'."\n";
print '<tr>'."\n";

print '<td width="39" style="background: repeat-x; background-image: url('.HTTPS.'themes/'.$theme_name.'/tables/OpenTable/invisible_pixel.gif);">'."\n";
print '<img src="'.HTTPS.'themes/'.$theme_name.'/tables/CloseTable/lbc.png" border="0" width="39" height="50"></td>'."\n";

print '<td align="center" background="'.HTTPS.'themes/'.$theme_name.'/tables/CloseTable/bm.png"></td>'."\n";

print '<td width="39" style="background: repeat-x; background-image: url('.HTTPS.'themes/'.$theme_name.'/tables/OpenTable/invisible_pixel.gif);">'."\n";
print '<img src="'.HTTPS.'themes/'.$theme_name.'/tables/CloseTable/brc.png" border="0" width="39" height="50"></td>'."\n";

print '</tr>'."\n";
print '</table>'."\n";

print '<div align="center" style="padding-top:6px;">';
print '</div>';

echo "\n<!-- function themesidebox END -->\n\n\n";
}
?>


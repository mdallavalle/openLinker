﻿<?php
// ***************************************************************************
// ***************************************************************************
// ***************************************************************************
// OpenLinker is a web based library system designed to manage 
// journals, ILL, document delivery and OpenURL links
// 
// Copyright (C) 2012, Pablo Iriarte
// 
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
// 
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
// 
// You should have received a copy of the GNU General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
// 
// ***************************************************************************
// ***************************************************************************
// ***************************************************************************
// Footer common to all pages
//
echo "</div>\n";
echo "</div>\n";
echo "  <div class=\"footerArea\">\n";
echo "    <div class=\"footer\" id=\"footer\">\n";
echo $poweredmessage[$lang] . "\n";
echo $copyrightmessage[$lang] . "\n";
echo $configteam[$lang] . "\n";
echo "    </div>\n";
echo "    <div class=\"info_dbg\" id=\"info_info_dbg\">\n";
//apd_set_pprof_trace();
echo "    </div>\n";
echo "  </div>\n";
echo "</div>\n";
echo "</body>\n";
echo "</html>";
?>

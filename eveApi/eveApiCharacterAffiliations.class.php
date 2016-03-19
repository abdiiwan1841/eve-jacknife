<?php 
// ****************************************************************************
// 
// ZZJ Audit Tool v1.0
// Copyright (C) 2010  ZigZagJoe (zigzagjoe@gmail.com)
// 
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
// 
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
// 
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
// 
// ****************************************************************************

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class eveApiCharacterAffiliations extends eveApi {

    public $IDs=array();
    public function fetch($characters)
    {

        return $this->fetch_xml("/eve/CharacterAffiliation.xml.aspx", array(
            "ids" => implode(",",array_filter($characters)),
        ),3600);

    }
    public function LoadAPI() {
        if(!$this->api)
            return false;
        $this->IDs = $this->api->xpath("/eveapi/result/rowset/row");
        return true;
    }
}
  
 ?>
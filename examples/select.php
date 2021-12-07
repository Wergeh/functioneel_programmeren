<?php
function makeSelectLand()
{
    $sql =- "select * from land";
    $rows = GetData($sql);

    var_dump($sql);

    $myselect = "";

    $myselect.= "<select id=lev_lan_id name=lev_lan_id>";

    foreach ($rows as $row)
    {
        $myselect.= "<option value='".$row['lan_id'] . "'>" . $row['lan_land'] . "</option>";
    }

    $myselect.= "</select>";
    
    print $myselect;
}
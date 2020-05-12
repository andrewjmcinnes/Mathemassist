<?php
class Prefs_model extends CI_Model{
    //insert preferences data
	public function set($id, $size, $spacing, $font, $fontColour, $bgColour){
        
        $data = array(
            'userId' => $id,
            'sizePref' => $size,
            'spacingPref' => $spacing,
            'fontPref' => $font,
            'fcolourPref' => $fontColour,
            'bgcolourPref' => $bgColour
            );

       	$this->db->replace('preferences', $data);

       	return;
    }
}
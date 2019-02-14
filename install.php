<?php

$checar_coluna  = $this->db->query("SELECT *FROM " . DB_PREFIX . "banner_image");
  
if(!isset($checar_coluna ->row['description'])){
  $this->db->query("ALTER TABLE `".DB_PREFIX."banner_image` ADD `description` TEXT NOT NULL AFTER `title`");
}
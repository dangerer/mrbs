<?php

// This file is part of the MRBS block for Moodle
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

defined('MOODLE_INTERNAL') || die();

function xmldb_block_mrbs_install()
{
    global $DB;

    // Get system context.
    $context = context_system::instance();    
    $pluginname = 'mrbs';                 

    // Create the viewer role.
    if (!$DB->record_exists('role', ['shortname' => 'mrbsviewer'])) {
        $mrbsviewerid = create_role(
            get_string('mrbsviewer', 'block_mrbs'),
            'mrbsviewer',get_string('mrbsviewer_desc', 'block_mrbs')
        );        
        $set_role = set_role_contextlevels($mrbsviewerid, [CONTEXT_SYSTEM]);
        $capability = 'block/' . $pluginname . ':viewmrbs';
        $viewerid = $DB->get_field('role', 'id', array('shortname' => 'mrbsviewer'));
        $ret = update_capability($capability, CAP_ALLOW, $viewerid, $context->id, true);       
    }

    // Create the editor role.
    if (!$DB->record_exists('role', ['shortname' => 'mrbseditor'])) {
        $mrbseditorid = create_role(
            get_string('mrbseditor', 'block_mrbs'),
            'mrbseditor',get_string('mrbseditor_desc', 'block_mrbs')
        );
        $set_role = set_role_contextlevels($mrbseditorid, [CONTEXT_SYSTEM]);
        $view_capability = 'block/' . $pluginname . ':viewmrbs';
        $edit_capability = 'block/' . $pluginname . ':editmrbs';
        $editorid = $DB->get_field('role', 'id', array('shortname' => 'mrbseditor'));        
        $ret = update_capability($view_capability, CAP_ALLOW, $editorid, $context->id, true);
        $ret = update_capability($edit_capability, CAP_ALLOW, $editorid, $context->id, true);
    }

    // Create the admin role.
    if (!$DB->record_exists('role', ['shortname' => 'mrbsadmin'])) {
        $mrbsadminid = create_role(
            get_string('mrbsadmin', 'block_mrbs'),
            'mrbsadmin',get_string('mrbsadmin_desc', 'block_mrbs')
        );
        $set_role = set_role_contextlevels($mrbsadminid, [CONTEXT_SYSTEM]);
        $view_capability = 'block/' . $pluginname . ':viewmrbs';
        $edit_capability = 'block/' . $pluginname . ':editmrbs';
        $admin_capability = 'block/' . $pluginname . ':administermrbs';
        $viewall_capability = 'block/' . $pluginname . ':viewalltt';
        $forcebook_capability = 'block/' . $pluginname . ':forcebook';
        $doublebook_capability = 'block/' . $pluginname . ':doublebook'; 
        $adminid = $DB->get_field('role', 'id', array('shortname' => 'mrbsadmin'));      
        
        $ret = update_capability($view_capability, CAP_ALLOW, $adminid, $context->id, true);
        $ret = update_capability($edit_capability, CAP_ALLOW, $adminid, $context->id, true);
        $ret = update_capability($admin_capability, CAP_ALLOW, $adminid, $context->id, true);
        $ret = update_capability($viewall_capability, CAP_ALLOW, $adminid, $context->id, true);
        $ret = update_capability($forcebook_capability, CAP_ALLOW, $adminid, $context->id, true);
        $ret = update_capability($doublebook_capability, CAP_ALLOW, $adminid, $context->id, true);
    }

    // Clear any capability caches
    $context->mark_dirty();
}

function update_capability($capability, $permission, $roleid, $contextid, $overwrite = false) {
    global $USER, $DB;

    if ($contextid instanceof context) {
        $context = $contextid;
    } else {
        $context = context::instance_by_id($contextid);
    }

    $existing = $DB->get_record('role_capabilities', array('contextid'=>$context->id, 'roleid'=>$roleid, 'capability'=>$capability));

    if ($existing and !$overwrite) {   // We want to keep whatever is there already
        return true;
    }

    $cap = new stdClass();
    $cap->contextid    = $context->id;
    $cap->roleid       = $roleid;
    $cap->capability   = $capability;
    $cap->permission   = $permission;
    $cap->timemodified = time();
    $cap->modifierid   = empty($USER->id) ? 0 : $USER->id;

    if ($existing) {
        $cap->id = $existing->id;
        $DB->update_record('role_capabilities', $cap);
    } else {
        if ($DB->record_exists('context', array('id'=>$context->id))) {
            $DB->insert_record('role_capabilities', $cap);
        }
    }

    // Reset any cache of this role, including MUC.
    accesslib_clear_role_cache($roleid);
    
    return true;
}
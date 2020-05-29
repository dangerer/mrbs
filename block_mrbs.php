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

class block_mrbs extends block_list
{
    public function init()
    {
        $this->title = get_string('blockname', 'block_mrbs');
    }

    public function has_config()
    {
        return true;
    }

    public function applicable_formats()
    {
        return ['all' => true];
    }

    public function get_content()
    {
        global $CFG, $OUTPUT, $SESSION;

        if ($this->content !== null) {
            return $this->content;
        }

        $cfg_mrbs = get_config('block/mrbs');

        $context = context_system::instance();

        if (has_capability('block/mrbs:viewmrbs', $context) or has_capability('block/mrbs:editmrbs', $context) or has_capability('block/mrbs:administermrbs', $context)) {
            if (isset($CFG->block_mrbs_serverpath)) {
                $serverpath = $CFG->block_mrbs_serverpath;
            } else {
                $serverpath = $CFG->wwwroot . '/blocks/mrbs/web';
            }
            $go = get_string('accessmrbs', 'block_mrbs');
            $icon = '<img src="' . $OUTPUT->image_url('web', 'block_mrbs') . '" height="16" width="16" alt="" />';
            $target = '';
            if ($cfg_mrbs->newwindow) {
                $target = ' target="_blank" ';
            }
            $this->content = new stdClass();
            $this->content->items = array();
            $this->content->items[] = '<a href="' . $serverpath . '/index.php" ' . $target . '>' . $icon . ' &nbsp;' . $go . '</a>';
            $this->content->items[] = '<a href="' . $CFG->wwwroot .'/admin/purgecaches.php?confirm=1&amp;sesskey=' . sesskey().'&amp;returnurl='.$this->page->url .'">' . $icon . ' &nbsp;' . get_string('purge_cache', 'block_mrbs') . '</a>';
            $this->content->footer = '';
            return $this->content; 
        }
        return null;
    }

    public function cron()
    {
        global $CFG;
        include($CFG->dirroot . '/blocks/mrbs/import.php');

        return true;
    }
}

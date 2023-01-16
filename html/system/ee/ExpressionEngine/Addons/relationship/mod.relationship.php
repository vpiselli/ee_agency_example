<?php
/**
 * This source file is part of the open source project
 * ExpressionEngine (https://expressionengine.com)
 *
 * @link      https://expressionengine.com/
 * @copyright Copyright (c) 2003-2023, Packet Tide, LLC (https://www.packettide.com)
 * @license   https://expressionengine.com/license Licensed under Apache License, Version 2.0
 */

/**
 * Relationship Module
 */
class Relationship
{
    /**
     * AJAX endpoint for filtering a Relationship field on the publish form
     */
    public function entryList()
    {
        ee()->load->library('EntryList');
        ee()->output->send_ajax_response(ee()->entrylist->ajaxFilter());
    }
}

// EOF

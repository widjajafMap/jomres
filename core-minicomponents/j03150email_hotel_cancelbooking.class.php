<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.12
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j03150email_hotel_cancelbooking
{
    public function __construct($componentArgs)
    {

        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $default_template = JOMRES_TEMPLATEPATH_BACKEND.JRDS.'email_hotel_cancelbooking.html';

        $this->ret_vals = array('type' => 'email_hotel_cancelbooking', 'name' => jr_gettext('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', '_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', false), 'desc' => jr_gettext('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', '_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', false), 'default_template' => $default_template);
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->ret_vals;
    }
}

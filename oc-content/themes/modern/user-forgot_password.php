<?php
    /*
     *      OSCLass – software for creating and publishing online classified
     *                           advertising platforms
     *
     *                        Copyright (C) 2010 OSCLASS
     *
     *       This program is free software: you can redistribute it and/or
     *     modify it under the terms of the GNU Affero General Public License
     *     as published by the Free Software Foundation, either version 3 of
     *            the License, or (at your option) any later version.
     *
     *     This program is distributed in the hope that it will be useful, but
     *         WITHOUT ANY WARRANTY; without even the implied warranty of
     *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *             GNU Affero General Public License for more details.
     *
     *      You should have received a copy of the GNU Affero General Public
     * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
    <head>
        <?php osc_current_web_theme_path('head.php') ; ?>
        <meta name="robots" content="noindex, nofollow" />
        <meta name="googlebot" content="noindex, nofollow" />
        
        <!-- only user area -->
        <script type="text/javascript" src="<?php echo osc_current_web_theme_js_url('jquery.validate.min.js') ; ?>"></script>
        <script type="text/javascript" src="<?php echo osc_current_web_theme_js_languages('user.js') ; ?>"></script>
        <!-- end only user area -->
    </head>
    <body>
        <div class="container">
            <?php osc_current_web_theme_path('header.php') ; ?>
            <div class="content user_forms">
                <div class="inner">
                    <h1><?php _e('Recover your password', 'modern') ; ?></h1>
                    <form id="user-recover-change" action="<?php echo osc_base_url(true) ; ?>" method="post" >
                        <input type="hidden" name="page" value="login" />
                        <input type="hidden" name="action" value="forgot_post" />
                        <input type="hidden" name="userId" value="<?php echo Params::getParam('userId'); ?>" />
                        <input type="hidden" name="code" value="<?php echo Params::getParam('code'); ?>" />
                        
                        <ul id="error_list"></ul>
                        
                        <fieldset>
                            <p>
                                <label for="new_password"><?php _e('New password', 'modern') ; ?> *</label>
                                <input type="password" name="new_password" id="new_password" value="" />
                            </p>
                            <p>
                                <label for="new_password2"><?php _e('Re-type new password', 'modern') ; ?> *</label>
                                <input type="password" name="new_password2" id="new_password2" value="" />
                            </p>
                            <button type="submit"><?php _e('Update', 'modern') ; ?></button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <?php osc_current_web_theme_path('footer.php') ; ?>
        </div>
        <?php osc_show_flash_message() ; ?>
        <?php osc_run_hook('footer'); ?>
    </body>
</html>

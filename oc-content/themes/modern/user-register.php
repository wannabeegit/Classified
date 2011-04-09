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
                    <h1><?php _e('Register an account for free', 'modern') ; ?></h1>
                    <form id="user-register" action="<?php echo osc_base_url(true) ; ?>" method="post">
                        <input type="hidden" name="page" value="register" />
                        <input type="hidden" name="action" value="register_post" />
                        
                        <ul id="error_list"></ul>
                        
                        <fieldset>
                            <label for="name"><?php _e('Name', 'modern') ; ?></label> <?php UserForm::name_text(); ?><br />
                            <label for="password"><?php _e('Password', 'modern') ; ?></label> <?php UserForm::password_text(); ?><br />
                            <label for="password"><?php _e('Re-type password', 'modern') ; ?></label> <?php UserForm::check_password_text(); ?><br />
                            <label for="email"><?php _e('Email', 'modern') ; ?></label> <?php UserForm::email_text() ; ?><br />
                            <?php osc_show_recaptcha('register'); ?><br/>
                            <button type="submit"><?php _e('Create', 'modern') ; ?></button>
                            <?php osc_run_hook('user_register_form') ; ?>
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

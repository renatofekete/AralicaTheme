<?php

/**
 * Register options page
 */

function aralica_options_form()
{ ?>
  <div id="theme-options-wrap">
    <h2>Aralica Options</h2>
    <p>Options page for Aralica theme</p>
    <form method="post" action="options.php">
      <?php
        settings_fields('aralicaInfo');
        do_settings_sections('aralica_options_page');
        submit_button();
        ?>
      <!-- <p class="submit"> <input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" /> </p> -->
    </form>
  </div>
<?php }

function aralica_options()
{
  add_options_page('Aralica Options', 'Aralica Options', 'manage_options', 'aralica_options_page', 'aralica_options_form');
}

function aralica_options_fields()
{
  register_setting('aralicaInfo', 'aralica_info_address');
  register_setting('aralicaInfo', 'aralica_info_telephone');
  register_setting('aralicaInfo', 'aralica_info_email');
  register_setting('aralicaInfo', 'aralica_info_website');

  add_settings_section('aralica_info_section', 'Aralica Info Section', 'aralica_info_section_cb', 'aralica_options_page');

  add_settings_field('aralicaInfoAddress', 'Aralica info Address', 'aralica_info_address_input', 'aralica_options_page', 'aralica_info_section');
  add_settings_field('aralicaInfoTelephone', 'Aralica info Telephone', 'aralica_info_telephone_input', 'aralica_options_page', 'aralica_info_section');
  add_settings_field('aralicaInfoEmail', 'Aralica info Email', 'aralica_info_email_input', 'aralica_options_page', 'aralica_info_section');
  add_settings_field('aralicaInfoWebsite', 'Aralica info Website', 'aralica_info_website_input', 'aralica_options_page', 'aralica_info_section');
}

/**
 * INPUT FIELDS
 */
function aralica_info_address_input()
{
  $option = esc_attr(get_option('aralica_info_address'));
  echo "<input name='aralica_info_address' type='text' value='$option'>";
}

function aralica_info_telephone_input()
{
  $option = esc_attr(get_option('aralica_info_telephone'));
  echo "<input name='aralica_info_telephone' type='text' value='$option'>";
}

function aralica_info_email_input()
{
  $option = esc_attr(get_option('aralica_info_email'));
  echo "<input name='aralica_info_email' type='text' value='$option'>";
}

function aralica_info_website_input()
{
  $option = esc_attr(get_option('aralica_info_website'));
  echo "<input name='aralica_info_website' type='text' value='$option'>";
}

function aralica_info_section_cb()
{ }
add_action('admin_menu', 'aralica_options');
add_action('admin_init', 'aralica_options_fields');

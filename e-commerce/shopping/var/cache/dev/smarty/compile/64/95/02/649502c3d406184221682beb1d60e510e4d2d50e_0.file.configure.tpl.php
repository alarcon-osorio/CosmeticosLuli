<?php
/* Smarty version 3.1.33, created on 2020-08-16 20:22:08
  from '/home/u644237725/domains/lulitojeans.com/public_html/shopping/modules/mercadopago/views/templates/admin/configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f39dbc00736e0_94487344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '649502c3d406184221682beb1d60e510e4d2d50e' => 
    array (
      0 => '/home/u644237725/domains/lulitojeans.com/public_html/shopping/modules/mercadopago/views/templates/admin/configure.tpl',
      1 => 1595722355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./template_1.tpl' => 1,
    'file:./template_2.tpl' => 1,
  ),
),false)) {
function content_5f39dbc00736e0_94487344 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Alert -->
<?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
<div class='alert <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alert']->value,'html','UTF-8' ));?>
 alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value,'html','UTF-8' ));?>

</div>
<?php }?>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
	<li class="active"><a href="#template_1" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set Up Mercado Pago','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a></li>
    <li><a href="#template_2" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'About Mercado Pago','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a></li>
    <li class="mp-plugin-version"><a><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Current version:','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <span>v<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mp_version']->value,'html','UTF-8' ));?>
</span></a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
	<div class="tab-pane active" id="template_1"><?php $_smarty_tpl->_subTemplateRender('file:./template_1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
	<div class="tab-pane" id="template_2"><?php $_smarty_tpl->_subTemplateRender('file:./template_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
</div>

<!-- JavaScript -->
<?php echo '<script'; ?>
 type="text/javascript">
    window.onload = function() {    
        var element = document.querySelectorAll("#module_form");
        for (var i=0; i < element.length; i++) {
            element[i].id = "module_form_" + i;
        }


        // ----- country form ----- //
        var form_country_prepend = document.createElement("div");
        var form_country = document.querySelector("#module_form_0 .panel .form-wrapper");

        form_country_prepend.innerHTML = "<div class='row'>\
            <div class='col-md-12 mp-pb-25'>\
                <h4 class='mp-title-checkout-body'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In which country does your Mercado Pago account operate?','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>\
            </div>\
        </div>";
        form_country.insertBefore(form_country_prepend, form_country.firstChild);


        // ----- credentials form ----- //
        var form_credentials_prepend = document.createElement("div");
        var form_credentials = document.querySelector("#module_form_1 .panel .form-wrapper");
        var form_credentials_inputs = document.querySelectorAll("#module_form_1 .panel .form-wrapper .form-group");

        form_credentials_prepend.innerHTML = "<div class='row'>\
            <div class='col-md-12'>\
                <h4 class='mp-title-checkout-body'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your credentials and choose how to operate','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>\
            </div>\
        </div>\
        <div class='row mp-pt-5 mp-pb-30'>\
            <div class='col-md-12'>\
                <p class='mp-text-credenciais'><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Test Mode','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</b></p>\
                <p class='mp-text-credenciais'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By default, we leave the test environment (Sandbox) active for you to test before you start selling.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>\
                <p class='mp-text-credenciais mp-pt-15'><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Production Mode','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</b></p>\
                <p class='mp-text-credenciais'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When you see that everything is going well, disable Sandbox to go to Production and make way for your online sales.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>\
            </div>\
        </div>";
        form_credentials.insertBefore(form_credentials_prepend, form_credentials.firstChild);

        var form_credentials_pruebas_append = "<div class='row mp-pt-20 mp-mb-15'>\
            <div class='col-md-12'>\
                <p class='mp-title-credenciais'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Test Credentials','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>\
                <p class='mp-text-credenciais mp-pt-5 mp-pb-10'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'With these keys you can do the tests you want','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>\
            </div>\
        </div>";

        var form_credentials_produccion_append = "<div class='row mp-pt-20 mp-mb-15'>\
            <div class='col-md-12'>\
                <p class='mp-title-credenciais'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Production Credentials','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>\
                <p class='mp-text-credenciais mp-pt-5 mp-pb-10'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'With these keys you can receive real payments from your customers.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>\
            </div>\
        </div>";

        for (var i=0; i < form_credentials_inputs.length; i++) {
            if(i == 1){
                form_credentials_inputs[i].insertAdjacentHTML('afterend', form_credentials_pruebas_append);
            }
            else if(i == 3){
                form_credentials_inputs[i].insertAdjacentHTML('afterend', form_credentials_produccion_append);
            }
        }


        // ----- homolog form ----- //
        var form_homolog = document.querySelector("#module_form_2 .panel .form-wrapper");

        form_homolog.innerHTML = "<div class='row'>\
            <div class='col-md-12 mp-pb-10'>\
                <h4 class='mp-title-checkout-body'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Approve your account, it will only take a few minutes','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>\
            </div>\
            <div class='col-md-6'>\
                <p class='text-branded lists-how-configure mp-pb-10'>\
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Complete this process to ensure the data','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 \
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'of your customers and the adaptation to the regulations or legal ','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 \
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'provisions of each country.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 \
                </p>\
                <a href='https://www.mercadopago.com/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['country_link']->value,'html','UTF-8' ));?>
/account/credentials/appliance?application_id=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['application']->value,'html','UTF-8' ));?>
' class='btn btn-default mp-btn-credenciais mp-mb-10' target='_blank'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Approve my account','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a> \
            </div>\
        </div>";


        // ----- store information form ------ //
        var form_store_prepend = document.createElement("div");
        var form_store = document.querySelector("#module_form_3 .panel .form-wrapper");
        var form_store_group = document.querySelectorAll("#module_form_3 .panel .form-wrapper .form-group");

        form_store_prepend.innerHTML = "<div class='row mp-pb-25'>\
            <div class='col-md-12'>\
                <h4 class='mp-title-checkout-body'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store Information','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>\
                <p class='mp-text-credenciais mp-pb-10'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your business details in the module:','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>\
            </div>\
        </div>";
        form_store.insertBefore(form_store_prepend, form_store.firstChild);

        var form_store_append = "<hr class='mp-mt-15'>\
        <div class='row mp-mb-15'>\
            <div class='col-md-12'>\
                <h4 class='mp-title-checkout-body'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you a Mercado Pago partner?','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>\
            </div>\
        </div>";

        for (i=0; i < form_store_group.length; i++) {
            if(i == 1){
                form_store_group[i].insertAdjacentHTML('afterend', form_store_append);
            }
            else if(i == 2){
                form_store_group[i].querySelector("p").style.width = "400px";
            }
        }


        // ----- basic configuration form ------ //
        //standard form header
        document.querySelector("#module_form_4 .panel").style.borderTopLeftRadius = 0;
        var form_standard_header_prepend = document.createElement("div");
        var form_standard_header = document.querySelector("#module_form_4 .panel .panel-heading");
        form_standard_header.style.height = "auto";

        form_standard_header_prepend.innerHTML = "<ul class='mp-checkout-list'>\
            <li><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Offers all payment methods.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</span></li>\
            <li><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment experience on the Mercado Pago site.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</span></li>\
            <li><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your customers can pay as guests or by entering their Mercado Pago account.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</span></li>\
        </ul>";
        form_standard_header.insertBefore(form_standard_header_prepend, form_standard_header.firstChild);

        //standard form body
        var checkbox = document.querySelectorAll(".checkbox");
        for (var ii=0; ii < checkbox.length; ii++) {
            checkbox[ii].id = "checkbox_"+ii;
            checkbox[ii].style.border = "1px solid #ccc";
            checkbox[ii].style.padding = "10px";
        }

        var form_standard_prepend = document.createElement("div");
        var form_standard = document.querySelector("#module_form_4 .panel .form-wrapper");
        var form_standard_group = document.querySelectorAll("#module_form_4 .panel .form-wrapper .form-group");

        form_standard_prepend.innerHTML = "<div class='row mp-pb-25'>\
            <div class='col-md-12'>\
                <h4 class='mp-title-checkout-body'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Have your customers finish their purchase with these basic settings:','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>\
            </div>\
        </div>";
        form_standard.insertBefore(form_standard_prepend, form_standard.firstChild);

        // online payments configuration form
        var onlineChecked = "";
        var countOnlineChecked = 0;
        var onlineInputs = document.querySelectorAll(".payment-online-checkbox");
        for(var ion=0; ion < onlineInputs.length; ion++){
            if(onlineInputs[ion].checked == true){
                countOnlineChecked += 1;
            }
        }
        if(countOnlineChecked == onlineInputs.length){
            onlineChecked = "checked";
        }

        var checkbox_online = document.querySelector("#checkbox_0");
        var checkbox_online_prepend = "<div class='mp-all_checkbox'>\
            <input type='checkbox' name='checkmeon' id='checkmeon' "+onlineChecked+" onclick='completeOnlineCheckbox()'> \
            <label for='checkmeon'><b class='mp-pointer mp-no-select mp-pl-5'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment methods','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</b></label>\
        </div>";
        checkbox_online.insertAdjacentHTML('beforebegin', checkbox_online_prepend);

        // offline payments configuration form
        var offlineChecked = "";
        var countOfflineChecked = 0;
        var offlineInputs = document.querySelectorAll(".payment-offline-checkbox");
        for(var ioff=0; ioff < offlineInputs.length; ioff++){
            if(offlineInputs[ioff].checked == true){
                countOfflineChecked += 1;
            }
        }
        if(countOfflineChecked == offlineInputs.length){
            offlineChecked = "checked";
        }

        var countOnlineInputs = document.querySelectorAll(".payment-online-checkbox").length;
        var checkbox_offline = document.querySelector("#checkbox_"+countOnlineInputs);
        var checkbox_offline_prepend = "<div class='mp-all_checkbox'>\
            <input type='checkbox' name='checkmeoff' id='checkmeoff' "+offlineChecked+" onclick='completeOfflineCheckbox()'> \
            <label for='checkmeoff'><b class='mp-pointer mp-no-select mp-pl-5'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select face payments','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</b></label>\
        </div>";
        checkbox_offline.insertAdjacentHTML('beforebegin', checkbox_offline_prepend);

        //advanced configuration
        var form_standard_append = "<div class='panel-heading mp-panel-advanced-config'>\
            <i class='icon-cogs'></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Advanced Configuration','mod'=>'mercadopago'),$_smarty_tpl ) );?>
\
            <span class='mp-btn-collapsible' id='header_plus_standard' style='display:block'>+</span>\
            <span class='mp-btn-collapsible' id='header_less_standard' style='display:none'>-</span>\
        </div>\
        <div class='row text-standard-advanced'>\
            <div class='col-md-12'>\
                <h4 class='mp-title-checkout-body mp-input-collapsible'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activate other tools in our module ready to use.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>\
            </div>\
        </div>";

        for (i=0; i < form_standard_group.length; i++) {
            if(i == 3){
                form_standard_group[i].insertAdjacentHTML('afterend', form_standard_append);
            }
            else if(i > 3) {
                form_standard_group[i].classList.add("mp-input-collapsible");
                form_standard_group[i].querySelector("p").style.width = "400px";
            }
        }

        var style_collapsible = false;
        var header_plus_standard = document.querySelector("#header_plus_standard");
        var header_less_standard = document.querySelector("#header_less_standard");
        var form_standard_collapsible = document.querySelector("#module_form_4 .panel .mp-panel-advanced-config");
        var form_standard_collapsible_body = document.querySelectorAll(".mp-input-collapsible");
        var form_standard_collapsible_footer = document.querySelector("#module_form_4 .panel .panel-footer");

        form_standard_collapsible_footer.style.marginTop = "-2px";

        form_standard_collapsible.onclick = function(){
            if(style_collapsible == false){
                style_collapsible = true;
                header_less_standard.style.display = "block";
                header_plus_standard.style.display = "none";
                form_standard_collapsible_footer.style.marginTop = "15px";
                document.querySelector(".text-standard-advanced").style.paddingTop = "20px";
                document.querySelector(".text-standard-advanced").style.paddingBottom = "25px";

                for(i=0; i<form_standard_collapsible_body.length; i++){
                    form_standard_collapsible_body[i].style.display = "block";
                }
            }
            else{
                style_collapsible = false;
                header_less_standard.style.display = "none";
                header_plus_standard.style.display = "block";
                form_standard_collapsible_footer.style.marginTop = "-2px";
                document.querySelector(".text-standard-advanced").style.paddingTop = "0px";
                document.querySelector(".text-standard-advanced").style.paddingBottom = "0px";

                for(i=0; i<form_standard_collapsible_body.length; i++){
                    form_standard_collapsible_body[i].style.display = "none";
                }
            }
        }


        // ----- custom configuration form ------ //
        //custom form header
        document.querySelector("#module_form_5 .panel").style.borderTopLeftRadius = 0;
        var form_custom_header_prepend = document.createElement("div");
        var form_custom_header = document.querySelector("#module_form_5 .panel .panel-heading");
        form_custom_header.style.height = "auto";

        form_custom_header_prepend.innerHTML = "<ul class='mp-checkout-list'>\
            <li><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Offers payments with debit and credit cards.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</span></li>\
            <li><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment experience within your store.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</span></li>\
            <li><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your customers pay as guests without leaving your store.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</span></li>\
        </ul>";
        form_custom_header.insertBefore(form_custom_header_prepend, form_custom_header.firstChild);

        var form_custom_prepend = document.createElement("div");
        var form_custom = document.querySelector("#module_form_5 .panel .form-wrapper");
        var form_custom_group = document.querySelectorAll("#module_form_5 .panel .form-wrapper .form-group");

        form_custom_prepend.innerHTML = "<div class='row mp-pb-25'>\
            <div class='col-md-12'>\
                <h4 class='mp-title-checkout-body'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Have your customers finish their purchase with these basic settings:','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>\
            </div>\
        </div>";
        form_custom.insertBefore(form_custom_prepend, form_custom.firstChild);

        //advanced configuration
        var form_custom_append = "<div class='panel-heading mp-panel-advanced-config'>\
            <i class='icon-cogs'></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Advanced Configuration','mod'=>'mercadopago'),$_smarty_tpl ) );?>
\
            <span class='mp-btn-collapsible' id='header_plus_custom' style='display:block'>+</span>\
            <span class='mp-btn-collapsible' id='header_less_custom' style='display:none'>-</span>\
        </div>\
        <div class='row text-custom-advanced'>\
            <div class='col-md-12'>\
                <h4 class='mp-title-checkout-body mp-custom-input-collapsible'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activate other tools in our module ready to use.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>\
            </div>\
        </div>";

        for (i=0; i < form_custom_group.length; i++) {
            if(i == 0){
                form_custom_group[i].insertAdjacentHTML('afterend', form_custom_append);
            }
            if(i > 0) {
                form_custom_group[i].classList.add("mp-custom-input-collapsible");
            }
            if(i >= 1){
                form_custom_group[i].querySelector("p").style.width = "400px";
            }
        }

        var style_collapsible_custom = false;
        var header_plus_custom = document.querySelector("#header_plus_custom");
        var header_less_custom = document.querySelector("#header_less_custom");
        var form_custom_collapsible = document.querySelector("#module_form_5 .panel .mp-panel-advanced-config");
        var form_custom_collapsible_body = document.querySelectorAll(".mp-custom-input-collapsible");
        var form_custom_collapsible_footer = document.querySelector("#module_form_5 .panel .panel-footer");
        var form_custom_group = document.querySelectorAll("#module_form_5 .panel .form-wrapper .form-group");

        form_custom_collapsible_footer.style.marginTop = "-2px";

        form_custom_collapsible.onclick = function(){
            if(style_collapsible_custom == false){
                style_collapsible_custom = true;
                header_less_custom.style.display = "block";
                header_plus_custom.style.display = "none";
                form_custom_collapsible_footer.style.marginTop = "15px";
                document.querySelector(".text-custom-advanced").style.paddingTop = "20px";
                document.querySelector(".text-custom-advanced").style.paddingBottom = "25px";

                for(i=0; i<form_custom_collapsible_body.length; i++){
                    form_custom_collapsible_body[i].style.display = "block";
                }
            }
            else{
                style_collapsible_custom = false;
                header_less_custom.style.display = "none";
                header_plus_custom.style.display = "block";
                form_custom_collapsible_footer.style.marginTop = "-2px";
                document.querySelector(".text-custom-advanced").style.paddingTop = "0px";
                document.querySelector(".text-custom-advanced").style.paddingBottom = "0px";

                for(i=0; i<form_custom_collapsible_body.length; i++){
                    form_custom_collapsible_body[i].style.display = "none";
                }
            }
        }


        // ----- ticket configuration form ------ //
        //ticket form header
        document.querySelector("#module_form_6 .panel").style.borderTopLeftRadius = 0;
        var form_ticket_header_prepend = document.createElement("div");
        var form_ticket_header = document.querySelector("#module_form_6 .panel .panel-heading");
        form_ticket_header.style.height = "auto";

        form_ticket_header_prepend.innerHTML = "<ul class='mp-checkout-list'>\
            <li><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Offer cash payments.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</span></li>\
            <li><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment experience within your store.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</span></li>\
            <li><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your customers pay as guests without leaving your store.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</span></li>\
        </ul>";
        form_ticket_header.insertBefore(form_ticket_header_prepend, form_ticket_header.firstChild);

        var form_ticket_prepend = document.createElement("div");
        var form_ticket = document.querySelector("#module_form_6 .panel .form-wrapper");
        var form_ticket_group = document.querySelectorAll("#module_form_6 .panel .form-wrapper .form-group");

        form_ticket_prepend.innerHTML = "<div class='row mp-pb-25'>\
            <div class='col-md-12'>\
                <h4 class='mp-title-checkout-body'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your customer will make their purchase quickly, easily and safely with these settings:','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>\
            </div>\
        </div>";
        form_ticket.insertBefore(form_ticket_prepend, form_ticket.firstChild);

        // ticket payments
        var ticketChecked = "";
        var countTicketChecked = 0;
        var countOfflineInputs = document.querySelectorAll(".payment-offline-checkbox").length;
        var ticketInputs = document.querySelectorAll(".payment-ticket-checkbox");
        for(var ion=0; ion < ticketInputs.length; ion++){
            if(ticketInputs[ion].checked == true){
                countTicketChecked += 1;
            }
        }
        if(countTicketChecked == ticketInputs.length){
            ticketChecked = "checked";
        }

        var countStandarPayments = countOnlineInputs + countOfflineInputs; 
        var checkbox_ticket = document.querySelector("#checkbox_"+countStandarPayments);
        var checkbox_ticket_prepend = "<div class='mp-all_checkbox'>\
            <input type='checkbox' name='checkmeticket' id='checkmeticket' "+ticketChecked+" onclick='completeTicketCheckbox()'> \
            <label for='checkmeticket'><b class='mp-pointer mp-no-select mp-pl-5'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select face payments','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</b></label>\
        </div>";
        checkbox_ticket.insertAdjacentHTML('beforebegin', checkbox_ticket_prepend);

        //advanced configuration
        var form_ticket_append = "<div class='panel-heading mp-panel-advanced-config'>\
            <i class='icon-cogs'></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Advanced Configuration','mod'=>'mercadopago'),$_smarty_tpl ) );?>
\
            <span class='mp-btn-collapsible' id='header_plus_ticket' style='display:block'>+</span>\
            <span class='mp-btn-collapsible' id='header_less_ticket' style='display:none'>-</span>\
        </div>\
        <div class='row text-ticket-advanced'>\
            <div class='col-md-12'>\
                <h4 class='mp-title-checkout-body mp-ticket-input-collapsible'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activate other tools in our module ready to use.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>\
            </div>\
        </div>";

        for (i=0; i < form_ticket_group.length; i++) {
            if(i == 2){
                form_ticket_group[i].querySelector("p").style.width = "400px";
                form_ticket_group[i].insertAdjacentHTML('afterend', form_ticket_append);
            }
            if(i > 2) {
                form_ticket_group[i].querySelector("p").style.width = "400px";
                form_ticket_group[i].classList.add("mp-ticket-input-collapsible");
            }
        }

        var style_collapsible_ticket = false;
        var header_plus_ticket = document.querySelector("#header_plus_ticket");
        var header_less_ticket = document.querySelector("#header_less_ticket");
        var form_ticket_collapsible = document.querySelector("#module_form_6 .panel .mp-panel-advanced-config");
        var form_ticket_collapsible_body = document.querySelectorAll(".mp-ticket-input-collapsible");
        var form_ticket_collapsible_footer = document.querySelector("#module_form_6 .panel .panel-footer");

        form_ticket_collapsible_footer.style.marginTop = "-2px";

        form_ticket_collapsible.onclick = function(){
            if(style_collapsible_ticket == false){
                style_collapsible_ticket = true;
                header_less_ticket.style.display = "block";
                header_plus_ticket.style.display = "none";
                form_ticket_collapsible_footer.style.marginTop = "15px";
                document.querySelector(".text-ticket-advanced").style.paddingTop = "20px";
                document.querySelector(".text-ticket-advanced").style.paddingBottom = "25px";

                for(i=0; i<form_ticket_collapsible_body.length; i++){
                    form_ticket_collapsible_body[i].style.display = "block";
                }
            }
            else{
                style_collapsible_ticket = false;
                header_less_ticket.style.display = "none";
                header_plus_ticket.style.display = "block";
                form_ticket_collapsible_footer.style.marginTop = "-2px";
                document.querySelector(".text-ticket-advanced").style.paddingTop = "0px";
                document.querySelector(".text-ticket-advanced").style.paddingBottom = "0px";

                for(i=0; i<form_ticket_collapsible_body.length; i++){
                    form_ticket_collapsible_body[i].style.display = "none";
                }
            }
        }

    }

    //Online payments
    function completeOnlineCheckbox(){
        var onlineCheck = document.getElementById("checkmeon").checked; 
        var onlineInputs = document.querySelectorAll(".payment-online-checkbox");
        for (var i=0; i < onlineInputs.length; i++) {
            if(onlineCheck == true){
                onlineInputs[i].checked = true;
            }
            else{
                onlineInputs[i].checked = false;
            }
        }
    }

    //Offline payments
    function completeOfflineCheckbox(){
        var offlineCheck = document.getElementById("checkmeoff").checked; 
        var offlineInputs = document.querySelectorAll(".payment-offline-checkbox");
        for (var i=0; i < offlineInputs.length; i++) {
            if(offlineCheck == true){
                offlineInputs[i].checked = true;
            }
            else{
                offlineInputs[i].checked = false;
            }
        }
    }

    //Ticket payments
    function completeTicketCheckbox(){
        var ticketCheck = document.getElementById("checkmeticket").checked; 
        var ticketInputs = document.querySelectorAll(".payment-ticket-checkbox");
        for (var i=0; i < ticketInputs.length; i++) {
            if(ticketCheck == true){
                ticketInputs[i].checked = true;
            }
            else{
                ticketInputs[i].checked = false;
            }
        }
    }
<?php echo '</script'; ?>
><?php }
}

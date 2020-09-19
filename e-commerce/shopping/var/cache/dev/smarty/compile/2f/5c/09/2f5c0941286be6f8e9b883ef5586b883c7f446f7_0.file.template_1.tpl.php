<?php
/* Smarty version 3.1.33, created on 2020-08-16 20:22:08
  from '/home/u644237725/domains/lulitojeans.com/public_html/shopping/modules/mercadopago/views/templates/admin/template_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f39dbc00cc382_91078153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f5c0941286be6f8e9b883ef5586b883c7f446f7' => 
    array (
      0 => '/home/u644237725/domains/lulitojeans.com/public_html/shopping/modules/mercadopago/views/templates/admin/template_1.tpl',
      1 => 1595722355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f39dbc00cc382_91078153 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel mp-panel-mercadopago">
	<div class="row header-mercadopago">
        <div class="mp-left-details">
            <h2 class="mp-title-checkout-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Design the best payment experience for your customers','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h2>
        </div>
        <div class="mp-right-details">
            <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/mpinfo_logo.png" class="img-fluid header-mp-logo" id="payment-logo" />
        </div>
	</div>

	<hr />
	
	<div class="mercadopago-content">
		<div class="row">
            <div class="col-md-12">
                <h4 class="mp-title-checkout-body"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow these steps and maximize your conversion:','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>
            </div>
		</div>
        
        <div class="row mp-pt-15">
            <div class="col-md-2 text-center mp-w-25 mp-px-10">
                <?php if ($_smarty_tpl->tpl_vars['access_token']->value != '' && $_smarty_tpl->tpl_vars['sandbox_access_token']->value != '') {?>
                    <p class="mp-number-checked"><i class="icon-check"></i></p>
                <?php } else { ?>
                    <p class="mp-number-checkout-body">1</p>
                <?php }?>
                
                <p class="mp-text-checkout-body">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get your','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'credentials','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'in your Mercado Pago account.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                </p>
            </div>
            
            <div class="col-md-2 text-center mp-w-25 mp-px-10">
                <?php if ($_smarty_tpl->tpl_vars['seller_homolog']->value == true) {?>
                    <p class="mp-number-checked"><i class="icon-check"></i></p>
                <?php } else { ?>
                    <p class="mp-number-checkout-body">2</p>
                <?php }?>
                
                <p class="mp-text-checkout-body">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Approve your account to securely charge your customers.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                </p>
            </div>
            
            <div class="col-md-2 text-center mp-w-25 mp-px-10">
                <?php if ($_smarty_tpl->tpl_vars['standard_test']->value == true) {?>
                    <p class="mp-number-checked"><i class="icon-check"></i></p>
                <?php } else { ?>
                    <p class="mp-number-checkout-body">3</p>
                <?php }?>
                
                <p class="mp-text-checkout-body">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose the','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'payment methods','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'available in your store.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                </p>
            </div>
            
            <div class="col-md-2 text-center mp-w-25 mp-px-10">
                <?php if ($_smarty_tpl->tpl_vars['count_test']->value != 0) {?>
                    <p class="mp-number-checked"><i class="icon-check"></i></p>
                <?php } else { ?>
                    <p class="mp-number-checkout-body">4</p>
                <?php }?>
                
                <p class="mp-text-checkout-body">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activate the','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sandbox','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'test environment to test your store.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                </p>
            </div>
            
            <div class="col-md-2 text-center mp-w-25 mp-px-10">
                <?php if ($_smarty_tpl->tpl_vars['sandbox_status']->value == true) {?>
                    <p class="mp-number-checked"><i class="icon-check"></i></p>
                <?php } else { ?>
                    <p class="mp-number-checkout-body">5</p>
                <?php }?>
                <p class="mp-text-checkout-body"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Deactivate it if you’re ready to receive payments.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
            </div>
		</div>
		
		<div class="row mp-pt-30">
            <div class="col-md-6">
                <p class="text-branded lists-how-configure">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credentials are the keys we provide you to integrate quickly and securely.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must have an approved account in Mercado Pago to collect on your website.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You don`t need to know how to design or program to activate us in your store. ','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                </p>
            </div>
		</div>        
	</div>
</div>

<!-- forms rendered via class from mercadopago.php -->
<?php echo html_entity_decode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['country_form']->value,'html','UTF-8' )));?>

<?php echo html_entity_decode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['credentials']->value,'html','UTF-8' )));?>


<?php if ($_smarty_tpl->tpl_vars['access_token']->value != '' && $_smarty_tpl->tpl_vars['public_key']->value != '' && $_smarty_tpl->tpl_vars['sandbox_access_token']->value != '' && $_smarty_tpl->tpl_vars['sandbox_public_key']->value != '') {?>
  
    <?php if ($_smarty_tpl->tpl_vars['sandbox_status']->value != true || $_smarty_tpl->tpl_vars['seller_homolog']->value == true) {?>
        <div style="display: none"><?php echo html_entity_decode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homolog_form']->value,'html','UTF-8' )));?>
</div>
    <?php } else { ?>
        <div style="display: block"><?php echo html_entity_decode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homolog_form']->value,'html','UTF-8' )));?>
</div>
    <?php }?>
    
    <?php echo html_entity_decode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['store_form']->value,'html','UTF-8' )));?>


    <!-- Nav tabs checkouts -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#standard_checkout" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mercado Pago Checkout','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a></li>
        <li><a href="#custom_checkout" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom Checkout','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a></li>
        <li><a href="#ticket_checkout" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ticket checkout','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a></li>
    </ul>
    
    <!-- Tab panes checkouts -->
    <div class="tab-content">
        <div class="tab-pane active" id="standard_checkout"><?php echo html_entity_decode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['standard_form']->value,'html','UTF-8' )));?>
</div>
        <div class="tab-pane" id="custom_checkout"><?php echo html_entity_decode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['custom_form']->value,'html','UTF-8' )));?>
</div>
        <div class="tab-pane" id="ticket_checkout"><?php echo html_entity_decode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ticket_form']->value,'html','UTF-8' )));?>
</div>
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['sandbox_status']->value != true) {?>
    <div class="panel">
        <div class="panel-heading">
            <i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Test yor store','mod'=>'mercadopago'),$_smarty_tpl ) );?>

        </div>        

        <div class="mercadopago-content">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mp-title-checkout-body"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Everything set up? Test your store','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>
                </div>
            </div>

            <div class="row mp-pt-15">
                <div class="col-md-12">
                    <p class="mp-text-credenciais"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Visit your store and simulate payments to check that everything is fine.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
                </div>
            </div>

            <div class="row mp-pt-25">
                <div class="col-md-12">
                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_base']->value,'html','UTF-8' ));?>
" target="_blank" class="btn btn-default mp-btn-credenciais"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I want to test my sales','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a>
                </div>
            </div>
        </div>
    </div>
    <?php } else { ?>
    <div class="panel">
        <div class="panel-heading">
            <i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comienza a vender','mod'=>'mercadopago'),$_smarty_tpl ) );?>

        </div>        

        <div class="mercadopago-content">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mp-title-checkout-body"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have already gone to production!','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>
                </div>
            </div>

            <div class="row mp-pt-15">
                <div class="col-md-12">
                    <p class="mp-text-credenciais"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All ready for the takeoff of your sales. Now bring your','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
                    <p class="mp-text-credenciais"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'customers to offer them the best online shopping experience with Mercado Pago.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
                </div>
            </div>

            <div class="row mp-pt-25">
                <div class="col-md-12">
                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_base']->value,'html','UTF-8' ));?>
" target="_blank" class="btn btn-default mp-btn-credenciais"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Visit my store','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a>
                </div>
            </div>
        </div>
    </div>
    <?php }
}?>

<!-- Evaluation modal -->
<hr class="hr-mp-modal">
<div class="row">
    <div class="col-md-8">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Something`s wrong?','mod'=>'mercadopago'),$_smarty_tpl ) );?>

        
        <?php if ($_smarty_tpl->tpl_vars['country_link']->value == 'mlb') {?>
          <a href="https://www.mercadopago.com.br/developers/pt/support" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get in touch with our support.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a>
        <?php } else { ?>
          <a href="https://www.mercadopago.com.br/developers/es/support" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get in touch with our support.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a>
        <?php }?>
    </div>
    
    <div class="col-md-4 text-right">
        <a class="mp-link-modal-trigger lists-how-configure" data-toggle="modal" data-target="#mp-rating-modal">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your opinion helps us improving','mod'=>'mercadopago'),$_smarty_tpl ) );?>

        </a>

        <!-- Modal -->
        <div class="modal mp-rating-modal fade" id="mp-rating-modal" tabindex="-1" role="dialog" aria-labelledby="mp-rating-modal">
            <div class="modal-dialog mp-rating-modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header mp-rating-modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title" id="myModalLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your opinion helps us improving.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h3>
                    </div>
                        
                    <form action="" method="post">
                        <div class="modal-body mp-rating-modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="label-mp-rating-input">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From 1 to 10, how likely are you to recommend our module to a friend?','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                                    </p>
                                    <div class="mp-rating-box mp-pb-10">
                                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                            <div class="mp-rating-input">
                                                <input type="radio" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value,'html','UTF-8' ));?>
" name="mercadopago-rating" id="rating<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value,'html','UTF-8' ));?>
" class="mp-pointer" /><br>
                                                <label for="rating<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value,'html','UTF-8' ));?>
" class="label-rating mp-pointer"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value,'html','UTF-8' ));?>
</label>
                                            </div>
                                        <?php }
}
?>
                                    </div>

                                    <div class="col-md-4">
                                        <p>1 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Nothing likely','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="mp-text-center">5 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unlikely','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="mp-fl-right">10 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Very likely','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
                                    </div>
                                </div>

                                <div class="col-md-12 mp-pt-30">
                                    <p class="label-mp-rating-input"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments or suggestions? This is the ideal space:','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</b></p>
                                    <textarea name="mercadopago-comments" class="mp-textarea-rating-module" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your comment','mod'=>'mercadopago'),$_smarty_tpl ) );?>
"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer rating-modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</button>
                            <input type="submit" class="btn btn-primary mp-btn-rating-submit" name="submitMercadopagoRating" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','mod'=>'mercadopago'),$_smarty_tpl ) );?>
" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div><?php }
}

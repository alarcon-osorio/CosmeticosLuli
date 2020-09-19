<?php
/* Smarty version 3.1.33, created on 2020-08-16 20:22:08
  from '/home/u644237725/domains/lulitojeans.com/public_html/shopping/modules/mercadopago/views/templates/admin/template_2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f39dbc010fff2_74856778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2d224fc39c86a715dd583720ac125d5955693d' => 
    array (
      0 => '/home/u644237725/domains/lulitojeans.com/public_html/shopping/modules/mercadopago/views/templates/admin/template_2.tpl',
      1 => 1595722355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f39dbc010fff2_74856778 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel mp-panel-landing">	
	<div class="mercadopago-content">
		
        <div class="mercadopago-banner" style="background-image: url(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/banner.jpg)">
            <div class="row mp-mg-0">
                <div class="col-md-7 mp-banner-gradient">
                    <div class="mp-label-banner">
                        <h2 class="mp-title-banner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Take off your online sales.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h2>
                        <p class="mp-text-banner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Offer your customers the best','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'payment experience.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
                        <a onclick="document.querySelectorAll('.nav-tabs li a')[0].click()" class="btn btn-default mp-btn-banner">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure Mercado Pago in your store','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mercadopago-installments">
            <div class="row mp-row-installments">
                <div class="col-md-6">
                    <p class="text-installments">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show your promotions','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'and sell in installments with','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'the best possible financing.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    </p>
                </div>
                
                <div class="col-md-6 mp-mr--10">
                    <img class="img-fluid mp-img-tarjetitas" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/tarjetitas.png" />
                </div>
            </div>
            
            <div class="row text-center">
                <div class="col-md-12">
                    <p class="mp-info-installments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We will charge you a fee for each payment you receive.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
                </div>
            </div>
        </div>
        
        <div class="mercadopago-beneficios">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mp-title-beneficios"
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'What are the benefits of','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'charging with Mercado Pago?','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    </h2>
                    
                    <div class="mp-panel-text-icon">
                        <img class="img-fluid icon-mercadopago" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/icons/card.png" />
                        <span class="mp-text-beneficios"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Charge as you want and sell without limits.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</span>
                    </div>
                    
                    <div class="mp-panel-text-icon">
                        <img class="img-fluid icon-mercadopago" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/icons/thick.png" />
                        <span class="mp-text-beneficios">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Maximize your conversion with','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'the best payment experience.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                        </span>
                    </div>
                    
                    <div class="mp-panel-text-icon">
                        <img class="img-fluid icon-mercadopago" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/icons/i-custom.png" />
                        <span class="mp-text-beneficios">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have ready-to-use tools and','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'specialists willing to help you.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                        </span>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <img class="img-fluid mp-img-beneficios" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/checkout2.png" />
                </div>
            </div>
        </div>
        
        <div class="mercadopago-recibopagos" style="background-image: url(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/bg-recibepagos.png)">            
            <div class="row">           
                <h2 class="mp-title-recibopagos"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How do I receive the payments?','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h2>
                
                <div class="col-md-4 text-center mp-px-10">
                    <p class="mp-number-recibopagos mp-number-recibopagos-after">1</p>
                    <p class="mp-text-checkout-body">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your customers pay as they prefer.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    </p>
                </div>
                
                <div class="col-md-4 text-center mp-px-10">
                    <p class="mp-number-recibopagos mp-number-recibopagos-after mp-number-recibopagos-before-green">2</p>
                    <p class="mp-text-checkout-body">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The money is credited','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'to your Mercado Pago account.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    </p>
                </div>
                
                <div class="col-md-4 text-center mp-px-10">
                    <p class="mp-number-recibopagos mp-number-recibopagos-before">3</p>
                    <p class="mp-text-checkout-body">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Once available,','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'you transfer it at no additional cost to your bank account.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                   </p>
                </div>
            </div>
        </div>
        
        <div class="mercadopago-beneficios">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid mp-img-puedohacer" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/checkout1.png" />
                </div>
                
                <div class="col-md-6">
                    <h2 class="mp-title-beneficios">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'What can I do with','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mercado Pago in my store?','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    </h2>
                    
                    <div class="mp-panel-text-icon">
                        <img class="img-fluid icon-mercadopago" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/icons/un-click.png" />
                        <span class="mp-text-beneficios">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'One click purchase:','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'we remember the data of your logged users.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                        </span>
                    </div>
                    
                    <div class="mp-panel-text-icon">
                        <img class="img-fluid icon-mercadopago mp-pl-2 mp-pr-20" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/icons/perfil.png" />
                        <span class="mp-text-beneficios">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment as a guest: your','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'customers do not have to open a Mercado Pago account.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                        </span>
                    </div>
                    
                    <div class="mp-panel-text-icon">
                        <img class="img-fluid icon-mercadopago" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/icons/devolucion.png" />
                        <span class="mp-text-beneficios">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Return of payments and cancellation','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'of pending payments.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mercadopago-footer" style="background-image: url(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/bg-footer.png)">
            <div class="row">                
                <div class="col-md-12">
                    <h2 class="mp-title-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Going further is in your hands. ','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Offer your customers ','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'a unique payment experience.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    </h2>
                    <a href="" class="btn btn-default mp-btn-footer"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure Mercado Pago in your store','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a>
                </div>
            </div>
        </div>
        
        <div class="mercadopago-partner">
            <div class="row">                
                <div class="col-md-6 mp-left-partner">
                    <img class="img-fluid mp-img-partner" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/partner.png" />
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We are official partners of Prestashop','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</span>
                </div>
                
                <div class="col-md-6 mp-right-partner">
                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['seller_protect_link']->value,'html','UTF-8' ));?>
" target="_blank" class="mp-fl-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller Protection Program.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a>
                </div>
            </div>
        </div>
        
	</div>
</div><?php }
}

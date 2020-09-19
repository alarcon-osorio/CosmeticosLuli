<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__366579b369eacafad5b7848425e39cfaf026cb177272b530f24cc65b553fbf83 */
class __TwigTemplate_491e7e55783ccfc058221b9fd29be2ed1bc79468624bd0e1d46efc85b856d652 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/shopping/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/shopping/img/app_icon.png\" />

<title>Rendimiento • Cosmeticos Luli</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'CO';
    var _PS_VERSION_ = '1.7.6.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '15065a87b71c59fa8f54bd40fc3de61d';
    var token_admin_orders = 'a287e26d0488e509a3c518b058b1247f';
    var token_admin_customers = '9097ae817cca39cf1ce80d2c48b5e87e';
    var token_admin_customer_threads = 'fb9aac227279ac7f0b91892a0b804fa7';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = '50cdad51cdfc81f721c52e3cc35a30f5';
    var choose_language_translate = 'Selecciona el idioma';
    var default_language = '2';
    var admin_modules_link = '/shopping/admin9422nacq5/index.php/improve/modules/catalog/recommended?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s';
    var admin_notification_get_link = '/shopping/admin9422nacq5/index.php/common/notifications?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s';
    var admin_notification_push_link = '/shopping/admin9422nacq5/index.php/common/notifications/ack?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s';
    var tab_modules_list = 'a2hosting,oneandonehosting,ns8csp,jmango360_api';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/shopping/modules/emarketing/views/css/menuTabIcon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shopping/admin9422nacq5/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shopping/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shopping/admin9422nacq5/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shopping/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shopping/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shopping/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/shopping\\/admin9422nacq5\\/\";
var baseDir = \"\\/shopping\\/\";
var changeFormLanguageUrl = \"\\/shopping\\/admin9422nacq5\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\";
var currency = {\"iso_code\":\"COP\",\"sign\":\"\$\",\"name\":\"Peso colombiano\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"COP\",\"currencySymbol\":\"\$\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":0,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/shopping/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/shopping/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/shopping/admin9422nacq5/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/shopping/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/shopping/js/admin.js?v=1.7.6.7\"></script>
<script type=\"text/javascript\" src=\"/shopping/admin9422nacq5/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/shopping/js/tools.js?v=1.7.6.7\"></script>
<script type=\"text/javascript\" src=\"/shopping/admin9422nacq5/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/shopping/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/shopping/admin9422nacq5/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/shopping/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/shopping/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/shopping/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/shopping/admin9422nacq5/themes/default/js/bundle/module/module_card.js?v=1.7.6.7\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/shopping/admin9422nacq5/index.php/common/notifications?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"https:\\/\\/cosmeticosluli.com\\/shopping\\/admin9422nacq5\\/index.php?controller=AdminGamification&token=ba8045a0d0f9d20366d6bbc5a06ad777\";
            var current_id_tab = 105;
        </script>

";
        // line 103
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-es adminperformance\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminDashboard&amp;token=f96d76bb0b09e8a25c897a94ff574f72\"></a>
      <span id=\"shop_version\">1.7.6.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e3ef79a792fe49d4d28599c31de45487\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item\"
         href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php/improve/modules/manage?token=955cc48bdc05f54e5cb686ff4f15387c\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php/sell/catalog/categories/new?token=955cc48bdc05f54e5cb686ff4f15387c\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item\"
         href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php/sell/catalog/products/new?token=955cc48bdc05f54e5cb686ff4f15387c\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item\"
         href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=0e595bb1227c5af7351557e5cbc45229\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item\"
         href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminOrders&amp;token=a287e26d0488e509a3c518b058b1247f\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"43\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminQuickAccesses&token=834c0f909107e9144fdf521c4b9c8eba\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Rendimiento - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir esta página a Acceso rápido
      </a>
        <a class=\"dropdown-item\" href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminQuickAccesses&token=834c0f909107e9144fdf521c4b9c8eba\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/shopping/admin9422nacq5/index.php?controller=AdminSearch&amp;token=8c795beec83a33ea4b7858e6faf5fee6\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, SKU, referencia...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nombre...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://cosmeticosluli.com/shopping/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Ver mi tienda
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=2fcdbfd5b4032427fd8ea075e4f9b0ae\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              ¡Eso significa más tiempo para otras cosas!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/alarcon_osorio%40hotmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Bienvenido de nuevo, Jeison</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/shopping/admin9422nacq5/index.php/configure/advanced/employees/1/edit?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\">
      <i class=\"material-icons\">settings</i>
      Tu perfil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Recursos</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Formación</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Encontrar un Experto</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Marketplace de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centro de ayuda</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminLogin&amp;logout=1&amp;token=77e9809a7c66fd45b69c7fedabeafbb7\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/shopping/admin9422nacq5/index.php/configure/advanced/employees/toggle-navigation?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminDashboard&amp;token=f96d76bb0b09e8a25c897a94ff574f72\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminOrders&amp;token=a287e26d0488e509a3c518b058b1247f\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Pedidos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminOrders&amp;token=a287e26d0488e509a3c518b058b1247f\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/shopping/admin9422nacq5/index.php/sell/orders/invoices/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Facturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminSlip&amp;token=c42eb0b759a509c73177c823b6f02af2\" class=\"link\"> Facturas por abono
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/shopping/admin9422nacq5/index.php/sell/orders/delivery-slips/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Albaranes de entrega
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminCarts&amp;token=2fcdbfd5b4032427fd8ea075e4f9b0ae\" class=\"link\"> Carritos de compra
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/shopping/admin9422nacq5/index.php/sell/catalog/products?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catálogo
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/shopping/admin9422nacq5/index.php/sell/catalog/products?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/shopping/admin9422nacq5/index.php/sell/catalog/categories?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminTracking&amp;token=344b903676dbb5a8831eef1b02844da9\" class=\"link\"> Monitoreo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminAttributesGroups&amp;token=e6a1ed7ba101ff6f08a1564f947ee2ce\" class=\"link\"> Atributos y Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/shopping/admin9422nacq5/index.php/sell/catalog/brands/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Marcas y Proveedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminAttachments&amp;token=58cd51ff7856dea4d0582c83323d916c\" class=\"link\"> Archivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminCartRules&amp;token=0e595bb1227c5af7351557e5cbc45229\" class=\"link\"> Descuentos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/shopping/admin9422nacq5/index.php/sell/stocks/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/shopping/admin9422nacq5/index.php/sell/customers/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clientes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/shopping/admin9422nacq5/index.php/sell/customers/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminAddresses&amp;token=7fc0725091bf85ae2e11cf6976b903fc\" class=\"link\"> Direcciones
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminCustomerThreads&amp;token=fb9aac227279ac7f0b91892a0b804fa7\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Servicio al Cliente
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminCustomerThreads&amp;token=fb9aac227279ac7f0b91892a0b804fa7\" class=\"link\"> Servicio al Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminOrderMessage&amp;token=06a602419f1cbbb5b056af0ce89b6b88\" class=\"link\"> Mensajes de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminReturn&amp;token=f5df3f952b28817d6b782a5a62c17b7e\" class=\"link\"> Devoluciones de mercancía
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminStats&amp;token=e3ef79a792fe49d4d28599c31de45487\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Estadísticas
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personalizar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/shopping/admin9422nacq5/index.php/improve/modules/manage?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Módulos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/shopping/admin9422nacq5/index.php/improve/modules/manage?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/shopping/admin9422nacq5/index.php/modules/addons/modules/catalog?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/shopping/admin9422nacq5/index.php/improve/design/themes/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Diseño
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/shopping/admin9422nacq5/index.php/improve/design/themes/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Tema y logotipo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"137\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"/shopping/admin9422nacq5/index.php/modules/addons/themes/catalog?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/shopping/admin9422nacq5/index.php/improve/design/mail_theme/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Tema Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/shopping/admin9422nacq5/index.php/improve/design/cms-pages/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/shopping/admin9422nacq5/index.php/improve/design/modules/positions/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Posiciones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminImages&amp;token=c4bc74facafe473d6cd8ac47862ab3bc\" class=\"link\"> Ajustes de imágenes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/shopping/admin9422nacq5/index.php/modules/link-widget/list?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminCarriers&amp;token=3ba09dc5e4202adf2e0d88833114b658\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Transporte
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminCarriers&amp;token=3ba09dc5e4202adf2e0d88833114b658\" class=\"link\"> Transportistas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/shopping/admin9422nacq5/index.php/improve/shipping/preferences?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/shopping/admin9422nacq5/index.php/improve/payment/payment_methods?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pago
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/shopping/admin9422nacq5/index.php/improve/payment/payment_methods?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Métodos de pago
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/shopping/admin9422nacq5/index.php/improve/payment/preferences?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/shopping/admin9422nacq5/index.php/improve/international/localization/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Internacional
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/shopping/admin9422nacq5/index.php/improve/international/localization/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Localización
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminZones&amp;token=93e109b89c55ac9be41400882a5bd668\" class=\"link\"> Ubicaciones Geográficas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/shopping/admin9422nacq5/index.php/improve/international/taxes/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Impuestos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/shopping/admin9422nacq5/index.php/improve/international/translations/settings?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Traducciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminEmarketing\">
                  <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminEmarketing&amp;token=1ca140c41bc0ac1243b2c53abdcf6f66\" class=\"link\">
                    <i class=\"material-icons mi-track_changes\">track_changes</i>
                    <span>
                    Advertising
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/shopping/admin9422nacq5/index.php/configure/shop/preferences/preferences?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Parámetros de la tienda
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/shopping/admin9422nacq5/index.php/configure/shop/preferences/preferences?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Configuración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/shopping/admin9422nacq5/index.php/configure/shop/order-preferences/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Configuración de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/shopping/admin9422nacq5/index.php/configure/shop/product-preferences/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Configuración de Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/shopping/admin9422nacq5/index.php/configure/shop/customer-preferences/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Ajustes sobre clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/shopping/admin9422nacq5/index.php/configure/shop/contacts/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/shopping/admin9422nacq5/index.php/configure/shop/seo-urls/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Tráfico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminSearchConf&amp;token=f237e3aa97bad112b8dff31b3555578d\" class=\"link\"> Buscar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminGamification&amp;token=ba8045a0d0f9d20366d6bbc5a06ad777\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/shopping/admin9422nacq5/index.php/configure/advanced/system-information/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parámetros Avanzados
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/shopping/admin9422nacq5/index.php/configure/advanced/system-information/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Información
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/shopping/admin9422nacq5/index.php/configure/advanced/performance/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Rendimiento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/shopping/admin9422nacq5/index.php/configure/advanced/administration/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Administración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/shopping/admin9422nacq5/index.php/configure/advanced/emails/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Dirección de correo electrónico
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/shopping/admin9422nacq5/index.php/configure/advanced/import/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/shopping/admin9422nacq5/index.php/configure/advanced/employees/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Equipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/shopping/admin9422nacq5/index.php/configure/advanced/sql-requests/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Base de datos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/shopping/admin9422nacq5/index.php/configure/advanced/logs/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Registros/Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/shopping/admin9422nacq5/index.php/configure/advanced/webservice-keys/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"121\" id=\"tab-DEFAULT\">
              <span class=\"title\">Más</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"139\" id=\"subtab-AdminSelfUpgrade\">
                  <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminSelfUpgrade&amp;token=92508fb1e3d3ade210a49d18dfea6960\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    1-Click Upgrade
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"142\" id=\"tab-mailchimppro\">
              <span class=\"title\">Mailchimp Config</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"143\" id=\"subtab-AdminMailchimpProConfig\">
                  <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminMailchimpProConfig&amp;token=f881c083423da4904a8a3e440eec487d\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Mailchimp Config
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"144\" id=\"subtab-AdminMailchimpProWizard\">
                  <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminMailchimpProWizard&amp;token=593adc819b1a23eb9350b7ea0682f3d9\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Mailchimp Setup Wizard
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                                                                                                                                                                                                                                                                                                                                                            
        
            </ul>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Parámetros Avanzados</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/shopping/admin9422nacq5/index.php/configure/advanced/performance/?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\" aria-current=\"page\">Rendimiento</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Rendimiento          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/shopping/admin9422nacq5/index.php/configure/advanced/performance/clear-cache?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\"                  title=\"Borrar la caché\"                >
                  <i class=\"material-icons\">delete</i>                  Borrar la caché
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/shopping/admin9422nacq5/index.php/improve/modules/catalog?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\"                title=\"Módulos recomendados\"
                              >
                Módulos recomendados
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/shopping/admin9422nacq5/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminPerformance%253Fversion%253D1.7.6.7%2526country%253Des/Ayuda?_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Módulos y Servicios recomendados',
        'Close': 'Cerrar',
      },
      recommendedModulesUrl: '/shopping/admin9422nacq5/index.php/modules/addons/modules/recommended?tabClassName=AdminPerformance&_token=zm9topSqto1PMYaZ5FpyfSpHVlIoaT8Rhn3Pfr9Oh1s',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>
      
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1185
        $this->displayBlock('content_header', $context, $blocks);
        // line 1186
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1187
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1188
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1189
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"https://cosmeticosluli.com/shopping/admin9422nacq5/index.php?controller=AdminDashboard&amp;token=f96d76bb0b09e8a25c897a94ff574f72\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=alarcon_osorio%40hotmail.com&amp;firstname=Jeison&amp;lastname=Alarcon&amp;website=http%3A%2F%2Fcosmeticosluli.com%2Fshopping%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/shopping/admin9422nacq5/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tienes una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/es/forgot-your-password\">He olvidado mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=alarcon_osorio%40hotmail.com&amp;firstname=Jeison&amp;lastname=Alarcon&amp;website=http%3A%2F%2Fcosmeticosluli.com%2Fshopping%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una Cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1296
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 103
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1185
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1186
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1187
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1188
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1296
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__366579b369eacafad5b7848425e39cfaf026cb177272b530f24cc65b553fbf83";
    }

    public function getDebugInfo()
    {
        return array (  1386 => 1296,  1381 => 1188,  1376 => 1187,  1371 => 1186,  1366 => 1185,  1357 => 103,  1349 => 1296,  1240 => 1189,  1237 => 1188,  1234 => 1187,  1231 => 1186,  1229 => 1185,  143 => 103,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__366579b369eacafad5b7848425e39cfaf026cb177272b530f24cc65b553fbf83", "");
    }
}

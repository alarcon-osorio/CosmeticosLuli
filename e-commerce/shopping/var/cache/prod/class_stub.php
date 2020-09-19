<?php

class Image extends ImageCore {};
class ProductDownload extends ProductDownloadCore {};
class Cart extends CartCore {};
abstract class ModuleGraph extends ModuleGraphCore {};
abstract class ModuleGraphEngine extends ModuleGraphEngineCore {};
abstract class Module extends ModuleCore {};
abstract class CarrierModule extends CarrierModuleCore {};
abstract class ModuleGridEngine extends ModuleGridEngineCore {};
abstract class ModuleGrid extends ModuleGridCore {};
class CustomerSession extends CustomerSessionCore {};
class Profile extends ProfileCore {};
class Employee extends EmployeeCore {};
class Combination extends CombinationCore {};
class LinkProxy extends LinkProxyCore {};
abstract class PaymentModule extends PaymentModuleCore {};
class AddressChecksum extends AddressChecksumCore {};
class Configuration extends ConfigurationCore {};
class Guest extends GuestCore {};
class Access extends AccessCore {};
class Language extends LanguageCore {};
class CustomerAddress extends CustomerAddressCore {};
class RangePrice extends RangePriceCore {};
class RangeWeight extends RangeWeightCore {};
class Product extends ProductCore {};
class Upgrader extends UpgraderCore {};
class PhpEncryptionEngine extends PhpEncryptionEngineCore {};
class TaxRulesGroup extends TaxRulesGroupCore {};
abstract class TaxManagerModule extends TaxManagerModuleCore {};
class TaxCalculator extends TaxCalculatorCore {};
class Tax extends TaxCore {};
class TaxRulesTaxManager extends TaxRulesTaxManagerCore {};
class TaxRule extends TaxRuleCore {};
class TaxConfiguration extends TaxConfigurationCore {};
class TaxManagerFactory extends TaxManagerFactoryCore {};
class CustomerThread extends CustomerThreadCore {};
class ProductSupplier extends ProductSupplierCore {};
class Cookie extends CookieCore {};
class Link extends LinkCore {};
class QqUploadedFileXhr extends QqUploadedFileXhrCore {};
class PrestaShopException extends PrestaShopExceptionCore {};
class PrestaShopDatabaseException extends PrestaShopDatabaseExceptionCore {};
class PrestaShopModuleException extends PrestaShopModuleExceptionCore {};
class PrestaShopPaymentException extends PrestaShopPaymentExceptionCore {};
class PrestaShopObjectNotFoundException extends PrestaShopObjectNotFoundExceptionCore {};
class CMSRole extends CMSRoleCore {};
class TranslatedConfiguration extends TranslatedConfigurationCore {};
class StockMvt extends StockMvtCore {};
class WarehouseProductLocation extends WarehouseProductLocationCore {};
class StockManager extends StockManagerCore {};
abstract class StockManagerModule extends StockManagerModuleCore {};
class StockMvtWS extends StockMvtWSCore {};
class SupplyOrderHistory extends SupplyOrderHistoryCore {};
class SupplyOrderReceiptHistory extends SupplyOrderReceiptHistoryCore {};
class StockManagerFactory extends StockManagerFactoryCore {};
class StockMvtReason extends StockMvtReasonCore {};
class SupplyOrderState extends SupplyOrderStateCore {};
class Warehouse extends WarehouseCore {};
class StockAvailable extends StockAvailableCore {};
class SupplyOrder extends SupplyOrderCore {};
class Stock extends StockCore {};
class SupplyOrderDetail extends SupplyOrderDetailCore {};
class Risk extends RiskCore {};
class Chart extends ChartCore {};
class Delivery extends DeliveryCore {};
class Store extends StoreCore {};
class Media extends MediaCore {};
class PrestaShopLogger extends PrestaShopLoggerCore {};
class CMSCategory extends CMSCategoryCore {};
class CssMinifier extends CssMinifierCore {};
class StylesheetManager extends StylesheetManagerCore {};
class JsMinifier extends JsMinifierCore {};
class CccReducer extends CccReducerCore {};
class JavascriptManager extends JavascriptManagerCore {};
abstract class AbstractAssetManager extends AbstractAssetManagerCore {};
class Customer extends CustomerCore {};
abstract class Db extends DbCore {};
class DbQuery extends DbQueryCore {};
class DbMySQLi extends DbMySQLiCore {};
class DbPDO extends DbPDOCore {};
class Group extends GroupCore {};
class Customization extends CustomizationCore {};
class CacheXcache extends CacheXcacheCore {};
abstract class Cache extends CacheCore {};
class CacheMemcached extends CacheMemcachedCore {};
class CacheMemcache extends CacheMemcacheCore {};
class CacheApc extends CacheApcCore {};
class ValidateConstraintTranslator extends ValidateConstraintTranslatorCore {};
class Tree extends TreeCore {};
class TreeToolbarSearch extends TreeToolbarSearchCore {};
class TreeToolbarSearchCategories extends TreeToolbarSearchCategoriesCore {};
class TreeToolbar extends TreeToolbarCore {};
abstract class TreeToolbarButton extends TreeToolbarButtonCore {};
class TreeToolbarLink extends TreeToolbarLinkCore {};
class Pack extends PackCore {};
class State extends StateCore {};
class Uploader extends UploaderCore {};
class PrestaShopBackup extends PrestaShopBackupCore {};
class Curve extends CurveCore {};
class Tab extends TabCore {};
class SearchEngine extends SearchEngineCore {};
class FeatureValue extends FeatureValueCore {};
class Windows extends WindowsCore {};
class Attribute extends AttributeCore {};
class ManufacturerAddress extends ManufacturerAddressCore {};
class Dispatcher extends DispatcherCore {};
class Country extends CountryCore {};
class Search extends SearchCore {};
class PhpEncryption extends PhpEncryptionCore {};
class CartChecksum extends CartChecksumCore {};
class CheckoutSession extends CheckoutSessionCore {};
abstract class AbstractCheckoutStep extends AbstractCheckoutStepCore {};
class CheckoutProcess extends CheckoutProcessCore {};
class CheckoutAddressesStep extends CheckoutAddressesStepCore {};
class ConditionsToApproveFinder extends ConditionsToApproveFinderCore {};
class CheckoutPaymentStep extends CheckoutPaymentStepCore {};
class CheckoutPersonalInformationStep extends CheckoutPersonalInformationStepCore {};
class DeliveryOptionsFinder extends DeliveryOptionsFinderCore {};
class PaymentOptionsFinder extends PaymentOptionsFinderCore {};
class AddressValidator extends AddressValidatorCore {};
class CheckoutDeliveryStep extends CheckoutDeliveryStepCore {};
class AttributeGroup extends AttributeGroupCore {};
class CMS extends CMSCore {};
class AddressFormat extends AddressFormatCore {};
class ProductAssembler extends ProductAssemblerCore {};
class QuickAccess extends QuickAccessCore {};
class Tag extends TagCore {};
class Referrer extends ReferrerCore {};
abstract class Controller extends ControllerCore {};
class FrontController extends FrontControllerCore {};
abstract class ProductPresentingFrontController extends ProductPresentingFrontControllerCore {};
class AdminController extends AdminControllerCore {};
abstract class ModuleAdminController extends ModuleAdminControllerCore {};
class ModuleFrontController extends ModuleFrontControllerCore {};
abstract class ProductListingFrontController extends ProductListingFrontControllerCore {};
class RequestSql extends RequestSqlCore {};
class GroupReduction extends GroupReductionCore {};
class CustomerMessage extends CustomerMessageCore {};
class Alias extends AliasCore {};
class Manufacturer extends ManufacturerCore {};
class SmartyResourceParent extends SmartyResourceParentCore {};
class SmartyResourceModule extends SmartyResourceModuleCore {};
class TemplateFinder extends TemplateFinderCore {};
class SmartyDevTemplate extends SmartyDevTemplateCore {};
class SmartyCustomTemplate extends SmartyCustomTemplateCore {};
class SmartyCustom extends SmartyCustomCore {};
class SpecificPriceRule extends SpecificPriceRuleCore {};
class Order extends OrderCore {};
class OrderDetail extends OrderDetailCore {};
class OrderState extends OrderStateCore {};
class OrderHistory extends OrderHistoryCore {};
class OrderCartRule extends OrderCartRuleCore {};
class OrderReturn extends OrderReturnCore {};
class OrderCarrier extends OrderCarrierCore {};
class OrderDiscount extends OrderDiscountCore {};
class OrderPayment extends OrderPaymentCore {};
class OrderInvoice extends OrderInvoiceCore {};
class OrderSlip extends OrderSlipCore {};
class OrderMessage extends OrderMessageCore {};
class OrderReturnState extends OrderReturnStateCore {};
class ShopGroup extends ShopGroupCore {};
class ShopUrl extends ShopUrlCore {};
class Shop extends ShopCore {};
abstract class AbstractLogger extends AbstractLoggerCore {};
class FileLogger extends FileLoggerCore {};
class DateRange extends DateRangeCore {};
class LocalizationPack extends LocalizationPackCore {};
class Validate extends ValidateCore {};
class Connection extends ConnectionCore {};
class HelperKpi extends HelperKpiCore {};
class HelperForm extends HelperFormCore {};
class HelperImageUploader extends HelperImageUploaderCore {};
class HelperTreeShops extends HelperTreeShopsCore {};
class Helper extends HelperCore {};
class HelperKpiRow extends HelperKpiRowCore {};
class HelperCalendar extends HelperCalendarCore {};
class HelperTreeCategories extends HelperTreeCategoriesCore {};
class HelperUploader extends HelperUploaderCore {};
class HelperShop extends HelperShopCore {};
class HelperView extends HelperViewCore {};
class HelperList extends HelperListCore {};
class HelperOptions extends HelperOptionsCore {};
class CartRule extends CartRuleCore {};
class Message extends MessageCore {};
class Feature extends FeatureCore {};
class Translate extends TranslateCore {};
class DataLang extends DataLangCore {};
class CarrierLang extends CarrierLangCore {};
class CategoryLang extends CategoryLangCore {};
class AttributeLang extends AttributeLangCore {};
class ContactLang extends ContactLangCore {};
class CmsCategoryLang extends CmsCategoryLangCore {};
class OrderReturnStateLang extends OrderReturnStateLangCore {};
class RiskLang extends RiskLangCore {};
class GroupLang extends GroupLangCore {};
class ProfileLang extends ProfileLangCore {};
class ConfigurationLang extends ConfigurationLangCore {};
class StockMvtReasonLang extends StockMvtReasonLangCore {};
class TabLang extends TabLangCore {};
class OrderStateLang extends OrderStateLangCore {};
class SupplyOrderStateLang extends SupplyOrderStateLangCore {};
class AttributeGroupLang extends AttributeGroupLangCore {};
class GenderLang extends GenderLangCore {};
class ThemeLang extends ThemeLangCore {};
class OrderMessageLang extends OrderMessageLangCore {};
class QuickAccessLang extends QuickAccessLangCore {};
class MetaLang extends MetaLangCore {};
class FeatureLang extends FeatureLangCore {};
class FeatureValueLang extends FeatureValueLangCore {};
class PrestaShopCollection extends PrestaShopCollectionCore {};
class ProductPresenterFactory extends ProductPresenterFactoryCore {};
class Notification extends NotificationCore {};
class ConfigurationKPI extends ConfigurationKPICore {};
class Attachment extends AttachmentCore {};
class ProductSale extends ProductSaleCore {};
class SupplierAddress extends SupplierAddressCore {};
class Address extends AddressCore {};
class Hook extends HookCore {};
class Supplier extends SupplierCore {};
class Carrier extends CarrierCore {};
class Zone extends ZoneCore {};
class WarehouseAddress extends WarehouseAddressCore {};
class Page extends PageCore {};
class ImageType extends ImageTypeCore {};
class FileUploader extends FileUploaderCore {};
class Gender extends GenderCore {};
class Currency extends CurrencyCore {};
class QqUploadedFileForm extends QqUploadedFileFormCore {};
class CustomizationField extends CustomizationFieldCore {};
class CustomerForm extends CustomerFormCore {};
class CustomerAddressPersister extends CustomerAddressPersisterCore {};
class CustomerPersister extends CustomerPersisterCore {};
class CustomerFormatter extends CustomerFormatterCore {};
abstract class AbstractForm extends AbstractFormCore {};
class CustomerLoginFormatter extends CustomerLoginFormatterCore {};
class CustomerAddressForm extends CustomerAddressFormCore {};
class CustomerAddressFormatter extends CustomerAddressFormatterCore {};
class CustomerLoginForm extends CustomerLoginFormCore {};
class FormField extends FormFieldCore {};
class PhpEncryptionLegacyEngine extends PhpEncryptionLegacyEngineCore {};
class ImageManager extends ImageManagerCore {};
class Context extends ContextCore {};
class EmployeeSession extends EmployeeSessionCore {};
class Category extends CategoryCore {};
abstract class ObjectModel extends ObjectModelCore {};
class SpecificPrice extends SpecificPriceCore {};
class HTMLTemplateOrderReturn extends HTMLTemplateOrderReturnCore {};
abstract class HTMLTemplate extends HTMLTemplateCore {};
class HTMLTemplateOrderSlip extends HTMLTemplateOrderSlipCore {};
class HTMLTemplateDeliverySlip extends HTMLTemplateDeliverySlipCore {};
class PDFGenerator extends PDFGeneratorCore {};
class HTMLTemplateInvoice extends HTMLTemplateInvoiceCore {};
class PDF extends PDFCore {};
class HTMLTemplateSupplyOrderForm extends HTMLTemplateSupplyOrderFormCore {};
class Contact extends ContactCore {};
class ConfigurationTest extends ConfigurationTestCore {};
class CSV extends CSVCore {};
class Tools extends ToolsCore {};
class WebserviceSpecificManagementSearch extends WebserviceSpecificManagementSearchCore {};
class WebserviceSpecificManagementImages extends WebserviceSpecificManagementImagesCore {};
class WebserviceException extends WebserviceExceptionCore {};
class WebserviceKey extends WebserviceKeyCore {};
class WebserviceOutputJSON extends WebserviceOutputJSONCore {};
class WebserviceOutputBuilder extends WebserviceOutputBuilderCore {};
class WebserviceRequest extends WebserviceRequestCore {};
class WebserviceOutputXML extends WebserviceOutputXMLCore {};
class Meta extends MetaCore {};
class ConnectionsSource extends ConnectionsSourceCore {};
class Mail extends MailCore {};

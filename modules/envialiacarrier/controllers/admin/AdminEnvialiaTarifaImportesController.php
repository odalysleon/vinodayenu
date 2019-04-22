<?php

/**
 * Controlador AdmEnvialiaTarifaImportesController
 * Referente a pesta�a ENVIALIA tarifa importes
 * @author      miguel.cejas
 * @date        14/12/2016
 */
require_once(_PS_MODULE_DIR_ . 'envialiacarrier/clases/EnvialiaTipoServ.php');
require_once(_PS_MODULE_DIR_ . 'envialiacarrier/clases/EnvialiaTarifaImportes.php');

class AdminEnvialiaTarifaImportesController extends ModuleAdminController {

  public function __construct() {

    $this->bootstrap = true;
    $this->table = 'envialia_tarifa_importes';
    $this->className = 'EnvialiaTarifaImportes';
    $this->module = 'envialia_tarifa_importes';
    $this->identifier = 'id_envialia_tarifa_importes';
    $this->allow_export = true;

    $this->addRowAction('edit');
    $this->addRowAction('delete');

    $this->_select = 'ets.V_DES, z.name';
    $this->_join = 'JOIN ' . _DB_PREFIX_ . 'envialia_tipo_serv ets ON ets.V_COD_TIPO_SERV = a.V_COD_TIPO_SERV JOIN ' . _DB_PREFIX_ . 'zone z ON z.id_zone = a.I_COD_ZONA';
    $this->_defaultOrderBy = 'a.V_COD_TIPO_SERV';

    parent::__construct();

    $this->fields_list = array(
        'V_DES' => array(
            'title' => $this->l('Servicio'),
            'align' => 'center'),
        'name' => array(
            'title' => $this->l('Zona'),
            'align' => 'center'),
        'F_IMPORTE' => array(
            'title' => $this->l('Importe'),
            'align' => 'text-right',
            'type' => 'price'),
        'F_PRECIO' => array(
            'title' => $this->l('Precio'),
            'align' => 'text-right',
            'type' => 'price'),
    );

    $this->bulk_actions = array(
        'delete' => array(
            'text' => $this->l('Eliminar registros'),
            'icon' => 'icon-trash text-danger',
            'confirm' => $this->l('�Eliminar los registros seleccionados?')
        )
    );

    $currency = new Currency(Configuration::get('PS_CURRENCY_DEFAULT'));
    $this->fields_form = array(
        'legend' => array(
            'title' => $this->trans('Nueva tarifa de importe', array(), 'Admin.OrdersCustomers.Feature'),
            'icon' => 'icon-calculator'
        ),
        'input' => array(
            array(
                'type' => 'select',
                'label' => $this->trans('Tipo de servicio', array(), 'Admin.Global'),
                'name' => 'V_COD_TIPO_SERV',
                'options' => array(
                    'query' => EnvialiaTipoServ::getServicios(),
                    'id' => 'id_option',
                    'name' => 'name'
                ),
                'required' => true,
                'hint' => $this->trans('Tipo de servicio Envialia.', array(), 'Admin.International.Help')
            ),
            array(
                'type' => 'select',
                'label' => $this->trans('Zona', array(), 'Admin.Global'),
                'name' => 'I_COD_ZONA',
                'options' => array(
                    'query' => EnvialiaTarifaImportes::getZonesEnvialia(),
                    'id' => 'id_zone',
                    'name' => 'name'
                ),
                'required' => true,
                'hint' => $this->trans('Zona geografica.', array(), 'Admin.International.Help')
            ),
            array(
                'type' => 'text',
                'label' => $this->trans('Importe', array(), 'Admin.OrdersCustomers.Feature'),
                'name' => 'F_IMPORTE',
                'suffix' => $currency->sign,
                'required' => true,
                'col' => '1',
                'hint' => $this->l('Importe (num�rico).')
            ),
            array(
                'type' => 'text',
                'label' => $this->trans('Precio', array(), 'Admin.OrdersCustomers.Feature'),
                'name' => 'F_PRECIO',
                'suffix' => $currency->sign,
                'required' => true,
                'col' => '1',
                'hint' => $this->l('Debe insertar un valor num�rico.')
            )
        ),
        'submit' => array(
            'title' => $this->trans('Save', array(), 'Admin.Actions'),
        )
    );
  }

  public function initPageHeaderToolbar() {
    parent::initPageHeaderToolbar();
    if ($this->display != 'edit' && $this->display != 'add') {
			$this->page_header_toolbar_btn['act_tarifa_importes'] = array(
          'href' => self::$currentIndex . '&action=updateTarImpor&token=' . $this->token,
          'desc' => $this->trans('Actualizar tarifa', array(), 'Admin.OrdersCustomers.Feature'),
          'icon' => 'process-icon-refresh'
      );
      $this->page_header_toolbar_btn['new_tarifa_importes'] = array(
          'href' => self::$currentIndex . '&addenvialia_tarifa_importes&token=' . $this->token,
          'desc' => $this->trans('Agregar tarifa', array(), 'Admin.OrdersCustomers.Feature'),
          'icon' => 'process-icon-new'
      );			
    }

    parent::initPageHeaderToolbar();
  }
	
	public function setMedia(){
		parent::setMedia();		
		$this->addJS(_PS_MODULE_DIR_ . 'envialiacarrier/js/tarifas.js', 'all');
		return;
  }
	
	public function postProcess() {
		// Actualiza la tarifa por importes
    if ('updateTarImpor' === Tools::getValue('action')) {
      $query = 'CALL PA_GRABA_TARIFA_IMPORTE();';
      Db::getInstance()->execute($query);
			$this->confirmations[] = "Tarifa por importe actualizada";
    }
		
		parent::postProcess();
	}
  
  public function processSave() {

    $boHayError = false;
    $boModoInsert = true;

    if (Tools::getValue('id_envialia_tarifa_importes') <> '') {
      $boModoInsert = false;
    }

    if (!Tools::getValue('V_COD_TIPO_SERV')) {
      $boHayError = true;
      $this->errors[] = $this->l('El tipo de servicio es obligatorio.');
    }

    if (!Tools::getValue('I_COD_ZONA')) {
      $boHayError = true;
      $this->errors[] = $this->l('La zona es obligatoria.');
    }

    if (!Tools::getValue('F_IMPORTE') || (float) Tools::getValue('F_IMPORTE') <= 0) {
      $boHayError = true;
      $this->errors[] = $this->l('El importe introducido no es v�lido');
    }

    if (!Tools::getValue('F_PRECIO') || (float) Tools::getValue('F_PRECIO') <= 0) {
      $boHayError = true;
      $this->errors[] = $this->l('El precio introducido no es v�lido');
    }

    if (!$boHayError) {
      if ($boModoInsert) {
        $query = 'select V_COD_TIPO_SERV from ' . _DB_PREFIX_ . 'envialia_tarifa_importes where V_COD_TIPO_SERV = "' . Tools::getValue('V_COD_TIPO_SERV') . '"'
                . ' and I_COD_ZONA = ' . Tools::getValue('I_COD_ZONA') . ' and F_IMPORTE = ' . (float) Tools::getValue('F_IMPORTE');

        $resultado = Db::getInstance()->executeS($query);
        if ($resultado) {
          $this->errors[] = $this->trans('Ya existe un registro para los datos introducidos.', array(), 'Admin.OrdersCustomers.Notification');
        } else {
          $values = array('V_COD_TIPO_SERV' => Tools::getValue('V_COD_TIPO_SERV'),
              'I_COD_ZONA' => (int) Tools::getValue('I_COD_ZONA'),
              'F_IMPORTE' => (float) Tools::getValue('F_IMPORTE'),
              'F_PRECIO' => (float) Tools::getValue('F_PRECIO'));

          Db::getInstance()->insert('envialia_tarifa_importes', $values);
          $this->confirmations[] = $this->trans("Registro insertado. Recuerde actualizar la tarifa al finalizar.");
        }
      } else if (!$boModoInsert) {
        $query = 'select V_COD_TIPO_SERV from ' . _DB_PREFIX_ . 'envialia_tarifa_importes where V_COD_TIPO_SERV = "' . Tools::getValue('V_COD_TIPO_SERV') . '"'
                . ' and I_COD_ZONA = ' . Tools::getValue('I_COD_ZONA') . ' and F_IMPORTE = ' . (float) Tools::getValue('F_IMPORTE') . ' and '
                . ' id_envialia_tarifa_importes <> "' . Tools::getValue('id_envialia_tarifa_importes') . '"';

        $resultado = Db::getInstance()->executeS($query);

        if (!$resultado) {
          $values = array('V_COD_TIPO_SERV' => Tools::getValue('V_COD_TIPO_SERV'),
              'I_COD_ZONA' => (int) Tools::getValue('I_COD_ZONA'),
              'F_IMPORTE' => (float) Tools::getValue('F_IMPORTE'),
              'F_PRECIO' => (float) Tools::getValue('F_PRECIO'));

          Db::getInstance()->update('envialia_tarifa_importes', $values, '`id_envialia_tarifa_importes` = ' . Tools::getValue('id_envialia_tarifa_importes'));

          $this->confirmations[] = $this->trans("Registro actualizado. Recuerde actualizar la tarifa al finalizar.");
        } else {
          $this->errors[] = $this->trans('No se puede modificar ya que existe otro registro para los datos introducidos.', array(), 'Admin.OrdersCustomers.Notification');
        }
      }
    }
  }

}

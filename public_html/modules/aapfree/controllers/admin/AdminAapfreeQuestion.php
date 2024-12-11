<?php
/**
 * PrestaShop module created by VEKIA, a guy from official PrestaShop community ;-)
 *
 * @author    VEKIA PL VATEU: PL9730945634
 * @copyright 2010-2025 VEKIA
 * @license   This program is not free software and you can't resell and redistribute it
 *
 * CONTACT WITH DEVELOPER http://mypresta.eu
 * support@mypresta.eu
 */

require_once(dirname(__FILE__) . '../../../models/aapfree_question.php');
require_once(dirname(__FILE__) . '../../../aapfree.php');

class AdminAapfreeQuestionController extends ModuleAdminController
{
    public function __construct()
    {
        $this->table = 'aapfreequestion';
        $this->className = 'aapfreeQuestion';
        $this->lang = false;
        $this->addRowAction('delete');

        parent::__construct();
        $this->bulk_actions = array(
            'delete' => array(
                'text' => $this->l('Delete selected'),
                'confirm' => $this->l('Delete selected items?')
            )
        );
        $this->bootstrap = true;
        $this->_orderBy = 'id_aapfreequestion';
        $this->_group = 'GROUP BY a.id_aapfreequestion';
        $this->list_no_link = true;
        $this->fields_list = array(
            'id_aapfreequestion' => array(
                'title' => $this->l('ID'),
                'align' => 'left',
                'orderby' => true,
                'width' => 30
            ),
            'author' => array(
                'title' => $this->l('Author'),
                'align' => 'left',
                'hint' => $this->l('Question\'s author name'),
                'orderby' => true,
            ),
            'email' => array(
                'title' => $this->l('Email'),
                'align' => 'left',
                'hint' => $this->l('Email of customer that submitted question'),
                'orderby' => true,
            ),
            'phone' => array(
                'title' => $this->l('Phone'),
                'align' => 'left',
                'orderby' => true,
            ),
            'id_product' => array(
                'title' => $this->l('Product'),
                'align' => 'left',
                'orderby' => true,
            ),
            'id_combination' => array(
                'title' => $this->l('Combination'),
                'align' => 'left',
                'orderby' => true,
            ),
            'question' => array(
                'title' => $this->l('Question'),
                'align' => 'left',
                'orderby' => true,
            ),
        );
    }

    public function renderForm()
    {

        $obj = $this->loadObject(true);
        if (isset($obj->id)) {
            $this->display = 'edit';
        } else {
            $this->display = 'add';
        }

        $this->fields_form = array(
            'legend' => array(
                'title' => $this->l('Unsubscription from reminders'),
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Email of customer'),
                    'name' => 'email',
                    'required' => true,
                    'lang' => false,
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('IP'),
                    'name' => 'ip',
                    'required' => true,
                    'lang' => false,
                ),
                array(
                    'type' => 'datetime',
                    'label' => $this->l('Date'),
                    'name' => 'unsub_date',
                    'required' => true,
                ),
            ),

            'submit' => array(
                'title' => $this->l('Save')
            )
        );
        return parent::renderForm();
    }
}
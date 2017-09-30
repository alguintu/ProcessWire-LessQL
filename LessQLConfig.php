<?php

namespace ProcessWire;

/**
 * Configuration for LessQL module
 *
 * @copyright Copyright (c) 2017, Alex Andre' Guintu
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License, version 2
 *
 * LessQL the agile PHP ORM alternative (c) Morris Brodersen (mb@morrisbrodersen.de)
 * Licensed under MIT License.
 */
class LessQLConfig extends ModuleConfig {

    public function __construct() {
        $this->add(array(
            array(
                'name' => 'autoload',
                'type' => 'checkbox',
                'label' => $this->_('Autoload'),
                'description' => $this->_('Is this module automatically loaded at runtime?'),
                'value' => 'true',
            ),
            array(
                'name' => 'dataVariable',
                'type' => 'text',
                'label' => $this->_('Data variable'),
                'description' => $this->_('Use to call LessQL database in frontend ($lessQL->tablename).'),
                'value' => 'lessQL',
                'notes' => "After changing make sure to change it in your template files."
            ),
            array(
                'name' => 'useDefaultDatabase',
                'type' => 'checkbox',
                'label' => $this->_('Use default database'),
                'description' => $this->_('Set this true to use the same database set in config.'),
                'value' => 'true'
            ),
            array(
                'name' => 'databaseName',
                'type' => 'text',
                'label' => $this->_('Custom database name'),
                'description' => $this->_('Set this true to use the same database set in config.'),
                'value' => '',
                'collapsed' => Inputfield::collapsedYes
            ),
            array(
                'name' => 'databaseUser',
                'type' => 'text',
                'label' => $this->_('Custom database user'),
                'description' => $this->_('Set this true to use the same database set in config.'),
                'value' => '',
                'collapsed' => Inputfield::collapsedYes
            ),
            array(
                'name' => 'databasePass',
                'type' => 'password',
                'label' => $this->_('Custom database password'),
                'description' => $this->_('Set this true to use the same database set in config.'),
                'value' => '',
                'collapsed' => Inputfield::collapsedYes
            )
        ));
    }

}

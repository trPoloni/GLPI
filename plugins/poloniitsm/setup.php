<?php

define('PLUGIN_POLONIITSM_VERSION', '0.1.0');

function plugin_init_poloniitsm()
{
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['csrf_compliant']['poloniitsm'] = true;

    // Apenas paginas autenticadas: preserva o login.
    $PLUGIN_HOOKS['add_css']['poloniitsm'][] =
        'css/poloni-3d-v05.css';
    $PLUGIN_HOOKS['add_css']['poloniitsm'][] = 'css/consultation-grid-poloni-v2.css';
    $PLUGIN_HOOKS['add_css']['poloniitsm'][] = 'css/forms-poloni-3d.css';

}

function plugin_version_poloniitsm()
{
    return [
        'name'    => 'Poloni ITSM',
        'version' => PLUGIN_POLONIITSM_VERSION,
        'author'  => 'TI - Poloni',
        'license' => 'GPLv3',
        'requirements' => [
            'glpi' => [
                'min' => '12.0.0',
                'max' => '13.0.0'
            ]
        ]
    ];
}

function plugin_poloniitsm_check_prerequisites()
{
    return version_compare(GLPI_VERSION, '12.0.0', '>=')
        && version_compare(GLPI_VERSION, '13.0.0', '<');
}

function plugin_poloniitsm_check_config($verbose = false)
{
    return true;
}

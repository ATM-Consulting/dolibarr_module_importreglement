<?php
/*
 * Script créant et vérifiant que les champs requis s'ajoutent bien
 */

if(!defined('INC_FROM_DOLIBARR')) {
	define('INC_FROM_CRON_SCRIPT', true);

	require('../config.php');

}


/* uncomment


dol_include_once('/importpayment/class/importpayment.class.php');

$PDOdb=new TPDOdb;

$o=new TImportPayment;
$o->init_db_by_vars($PDOdb);

$o=new TImportPaymentChild;
$o->init_db_by_vars($PDOdb);
*/

PRINS Import
============
This extension will import a series of .csv-files into separate, "pum"-prefixed tables in the civicrm database.
These files originate from the export agent written in PUM's "PRINS" databases in Lotus Notes.
The module provides a set of tools to control the (temporary) pum-tables, each triggered by a separate url:
 *	civicrm/prinsread: reads the .csv-files and creates/fills the pum-tables
 *	civicrm/prinsclear: removes all records from the pum-tables
 *	civicrm/prinsdrop: removes pum tables and their content
Note that the pum-tables are NOT automatically dropped when the extension is disabled or uninstalled!

The actual processing for each page in contained in "Prinsimporthandling.inc".
This file relies entirely on the file- and table definitions registered in "Prinsimportdefinities.inc".
Importfiles (.csv) should be available in [-current extension-]/CRM/Prinsimport/Page/prinsimportfiles

+---------------------------------------------------------------------------------------------------+
| NOTE:                                                                                             |
| The provided sample files only contain columnheaders. Make sure NEVER to update with actual data! |
+---------------------------------------------------------------------------------------------------+

Actual conversion from these intermediate tables to civi entities is handles by extension "Migration extension PUM" by Erik Hommel.
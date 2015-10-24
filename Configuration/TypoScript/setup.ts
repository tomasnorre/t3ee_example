##########################################
#
#	Configuration of EXT:t3ee_example
#

	plugin.tx_t3eeexample {
		view {
			templateRootPaths  = {$plugin.tx_t3eeexample.view.templateRootPath}
			partialRootPaths   = {$plugin.tx_t3eeexample.view.partialRootPath}
			layoutRootPaths    = {$plugin.tx_t3eeexample.view.layoutRootPath}
		}
		persistence {
			storagePid = {$plugin.tx_t3eeexample.persistence.storagePid}
		}
	}


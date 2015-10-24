##########################################
#
#	Configuration of EXT:t3ee_example
#

	plugin.tx_t3eeexample {
		view {
		# cat=plugin.tx_t3eeexample/file; type=string; label=Path to template root (FE)
			templateRootPath = EXT:t3ee_example/Resources/Private/Templates/
			 # cat=plugin.tx_t3eeexample/file; type=string; label=Path to template partials (FE)
			partialRootPath = EXT:t3ee_example/Resources/Private/Partials/
			 # cat=plugin.tx_t3eeexample/file; type=string; label=Path to template layouts (FE)
			layoutRootPath = EXT:t3ee_example/Resources/Private/Layouts/
		}
		persistence {
			storagePid = 0
		}
	}
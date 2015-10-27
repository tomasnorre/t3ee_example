##########################################
#
#	Configuration of EXT:t3ee_example
#

plugin.tx_t3eeexample {
    view {
        templateRootPath = EXT:t3ee_example/Resources/Private/Templates/
        partialRootPath = EXT:t3ee_example/Resources/Private/Partials/
        layoutRootPath = EXT:t3ee_example/Resources/Private/Layouts/
    }
    persistence {
        storagePid = 0
    }
}
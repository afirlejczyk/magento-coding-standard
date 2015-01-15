<?php

/**
 * Class Aoe_Sniffs_PHP_GotoSniff
 */
class Aoe_Sniffs_PHP_GotoSniff implements PHP_CodeSniffer_Sniff
{
    public function register()
    {
        return array(
            T_GOTO
        );
    }

    /**
     * @param PHP_CodeSniffer_File $phpcsFile
     * @param $stackPtr
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $phpcsFile->addWarning('Use of goto is discouraged.', $stackPtr, 'Found');
    }
}

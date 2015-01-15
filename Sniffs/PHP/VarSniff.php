<?php

/**
 * Class Aoe_Sniffs_PHP_VarSniff
 */
class Aoe_Sniffs_PHP_VarSniff implements PHP_CodeSniffer_Sniff
{
    public function register()
    {
        return array(
            T_VAR
        );
    }

    /**
     * @param PHP_CodeSniffer_File $phpcsFile
     * @param $stackPtr
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $phpcsFile->addWarning('Use of var class variables is discouraged.', $stackPtr, 'Found');
    }
}

<?php

/**
 * Class Aoe_Sniffs_Security_SuperglobalSniff
 */
class Aoe_Sniffs_Security_SuperglobalSniff implements PHP_CodeSniffer_Sniff
{
    public $superglobals = array(
        '$GLOBALS',
        '$_SERVER',
        '$_GET',
        '$_POST',
        '$_FILES',
        '$_COOKIE',
        '$_SESSION',
        '$_REQUEST',
        '$_ENV'
    );

    public function register()
    {
        return array(T_VARIABLE);
    }

    /**
     * @param PHP_CodeSniffer_File $phpcsFile
     * @param $stackPtr
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $var = $phpcsFile->getTokens()[$stackPtr]['content'];
        if (in_array($var, $this->superglobals))
            $phpcsFile->addError('Direct use of %s Superglobal detected.', $stackPtr, 'SuperglobalUsage', array($var));
    }
}

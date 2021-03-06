<?php

/*
 * This file is part of Contao Hello World Bundle.
 *
 * (c) HumanDigital
 *
 * @license LGPL-3.0-or-later
 */

namespace Humandigital\ContaoHelloWorldBundle\Module;

class HelloWorldModule extends \Haste\Frontend\AbstractFrontendModule
{
    /**
     * @var string
     */
    protected $strTemplate = 'mod_helloWorld';

    /**
     * Generates the module.
     */
    protected function compile()
    {
        //$this->Template->message = 'Hello World';
        // Klasse MessageGenerator als Service einbinden
        $messageGenerator = \Contao\System::getContainer()->get('humandigital.contao_hello_world_bundle.message_generator');
        $message = $messageGenerator->sayHelloTo('World');

        $this->Template->message = $message;
    }
}

/*
class HelloWorldModule extends \Module
{
    # **
    # * @var string
    # *
    protected $strTemplate = 'mod_helloWorld';

    # **
    # * Displays a wildcard in the back end.
    # *
    # * @return string
    # *
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $template = new \BackendTemplate('be_wildcard');

            $template->wildcard = '### '.utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['helloWorld'][0]).' ###';
            $template->title = $this->headline;
            $template->id = $this->id;
            $template->link = $this->name;
            $template->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id='.$this->id;

            return $template->parse();
        }

        return parent::generate();
    }

    # **
    # * Generates the module.
    # *
    protected function compile() {
        //$this->Template->message = 'Hello World';
        # Klasse MessageGenerator als Service einbinden
        $messageGenerator = \Contao\System::getContainer()->get('humandigital.contao_hello_world_bundle.message_generator');
        $message = $messageGenerator->sayHelloTo('World');

        $this->Template->message = $message;
    }
}
*/

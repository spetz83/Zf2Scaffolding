<?php

namespace Zf2Scaffolding\Controller;

use Zend\Debug\Debug;

class IndexController extends AbstractController
{
    public function indexAction()
    {
        $em=$this->getEntityManager();
        $config = $this->_getConfig();

        return array('derp'=>'Working!');
    }
}

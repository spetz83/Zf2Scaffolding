<?php
/**
 * Author: Tom
 * Date: 6/28/13
 * Time: 7:34 AM
 */

namespace Zf2Scaffolding\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Doctrine\ORM\EntityManager;
use Zend\Debug\Debug;
use Zend\Session\Container;

/**
 * Class AbstractController
 * @package Zf2Scaffolding\Controller
 * @property Doctrine\ORM\EntityManager $em
 */
class AbstractController extends AbstractActionController
{
    protected $em;

    public function setEntityManager(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getEntityManager()
    {
        if(null === $this->em)
        {
            $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }
        return $this->em;
    }


    
    protected function _getConfig()
    {
        return $this->getServiceLocator()->get('config');
    }
}

<?php

namespace Zf2Scaffolding\Controller;

use Zend\Debug\Debug;

class IndexController extends AbstractController
{
    public function indexAction()
    {
        $em=$this->getEntityManager();
        $config = $this->_getConfig();
        $zf2sConf = $config['zf2scaffolding'];
        $entityPath = $zf2sConf['entityPath'];

        $entities = array();
        if(file_exists($entityPath))
        {
            $rawFiles = scandir($entityPath);
            foreach($rawFiles as $file)
            {
                if(strpos($file,'.php') != false && strpos($file, 'Repository') == false)
                {
                    $entities[] = array('name'=>$file);
                }
            }
        }
        else
        {
            echo 'FAIL';die;
        }

        return array('entities'=>$entities);
    }
}

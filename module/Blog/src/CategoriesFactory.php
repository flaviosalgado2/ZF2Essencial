<?php


namespace Blog;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class CategoriesFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $categories = new Categories();
        $categories->addCategory(new PHPCategory());
        $categories->addCategory(new ZendCategory());
        /*$adapter = $serviceLocator->get('Zend\Db\Adapter\Adapter');
          $categoriesTable = new TableGateway('categories', $adapter);*/

        return $categories;
    }
}
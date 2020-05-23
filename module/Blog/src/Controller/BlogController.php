<?php

namespace Blog\Controller;

use Zend\Db\TableGateway\TableGateway;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BlogController extends AbstractActionController
{
    public function indexAction()
    {

        $posts = [
            'Hello World',
            'Hello Guys',
            'My Post'
        ];

        //chamando um servico
        //$categories = $this->getServiceLocator()->get('categories');

        //chamando servico
        //$categories = $this->getServiceLocator()->get(Categories::class);

        //$c = $this->getServiceLocator()->get(Categories::class);
        //$categories = $c->select();
        $adapter = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter');
        /*$sql = new Sql($adapter);
        $select = $sql->select()->from('categories');
        $smt = $sql->prepareStatementForSqlObject($select);
        //$categories = $smt->execute();

        //por zend table gateway*/
        $categoriesTable = new TableGateway('categories', $adapter);
        $categories = $categoriesTable->select();

        return new ViewModel(['posts' => $posts, 'categories' => $categories]);
    }
}
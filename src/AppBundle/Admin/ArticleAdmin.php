<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ArticleAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('name')
            ->add('price')
            ->add('images')
            ->add('isbnReference')
            ->add('stock')
            ->add('totalBought')
            ->add('nbrClicked')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('name')
            ->add('price')
            ->add('images')
            ->add('isbnReference')
            ->add('stock')
            ->add('totalBought')
            ->add('nbrClicked')
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ])
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('price')
            ->add('images')
            ->add('isbnReference')
            ->add('stock')
            ->add('totalBought')
            ->add('nbrClicked')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('name')
            ->add('price')
            ->add('images')
            ->add('isbnReference')
            ->add('stock')
            ->add('totalBought')
            ->add('nbrClicked')
        ;
    }
}

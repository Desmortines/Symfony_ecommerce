<?php

namespace AppBundle\Admin;

use AppBundle\Entity\Category;
use AppBundle\Entity\Genre;
use AppBundle\Entity\Image;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ArticleAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('name')
            ->add('price')
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
            ->add('images', 'collection', [
                'entry_type' => \AppBundle\Form\ImageType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'attr' => array(
                    'class' => 'js_form_image',
                ),
            ])
            ->add('images',ModelType::class,[
                'class' => Image::class,
                'property' => 'link',
                'multiple' => true
            ])
            ->add('category', ModelType::class, [
                'class' => Category::class,
                'property' => 'name',
            ])
            ->add('genres', ModelType::class, [
                'class' => Genre::class,
                'property' => 'name',
                'multiple' => true,
            ])
            ->add('isbnReference')
            ->add('stock')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('name')
            ->add('category',ModelType::class,[
                'class' => Category::class,
                'property' => 'name'
            ])
            ->add('price')
            ->add('isbnReference')
            ->add('stock')
            ->add('totalBought')
            ->add('nbrClicked')
        ;
    }
}

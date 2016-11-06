<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class UserAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('username')
            ->add('password')
            ->add('email')
            ->add('isActive')
            ->add('fullName')
            ->add('sex')
            ->add('birthdate')
            ->add('id_number')
            ->add('address')
            ->add('phoneNumber')
            ->add('roles')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('username')
            ->add('password')
            ->add('email')
            ->add('isActive')
            ->add('fullName')
            ->add('sex')
            ->add('birthdate')
            ->add('id_number')
            ->add('address')
            ->add('phoneNumber')
            ->add('roles')
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('id')
            ->add('username')
            ->add('password')
            ->add('email')
            ->add('isActive')
            ->add('fullName')
            ->add('sex')
            ->add('birthdate')
            ->add('id_number')
            ->add('address')
            ->add('phoneNumber')
            ->add('roles')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('username')
            ->add('password')
            ->add('email')
            ->add('isActive')
            ->add('fullName')
            ->add('sex')
            ->add('birthdate')
            ->add('id_number')
            ->add('address')
            ->add('phoneNumber')
            ->add('roles')
        ;
    }
}

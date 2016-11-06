<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelListType;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\CoreBundle\Form\Type\CollectionType;

class TourAdmin extends AbstractAdmin
{
    protected $translationDomain = 'AppBundle';

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ));
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('group.content', array('class' => 'col-md-12'))
                ->add('tourName', null, array(
                        'label' => 'label.tour_name')
                )
                ->add('startDate', null, array(
                        'label' => 'label.start_date')
                )
                ->add('endDate', null, array(
                        'label' => 'label.end_date')
                )
                ->add('amount', null, array(
                        'label' => 'label.amount')
                )
                ->add('description', null, array(
                        'label' => 'label.description')
                )
            ->end()
            ->with('group.tour_location', array('class' => 'col-md-12'))
                ->add('locations', CollectionType::class, array(), array(
                        'edit' => 'inline',
                        'inline' => 'table',
                        'admin_code' => 'app.admin.tour_location',
                    )
                )
            ->end();
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper;
    }

    /**
     * Returns "nice" name for object
     * Can define with __toString() function in Entity
     *
     * @param mixed $object
     * @return string
     */
    public function toString($object)
    {
        return $object instanceof Location
            ? $object->getName()
            : ''; // shown in the breadcrumb on the create view
    }
}

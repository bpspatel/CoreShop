<?php

namespace CoreShop\Bundle\IndexBundle\Form\Type;

use CoreShop\Bundle\IndexBundle\Form\Type\Core\AbstractConfigurationCollectionType;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class IndexColumnCollectionType extends AbstractConfigurationCollectionType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefault('entry_type', IndexColumnType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'coreshop_index_column_collection';
    }
}
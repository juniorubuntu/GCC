<?php

namespace Rep\GestionBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategorieType extends AbstractType {

    public function getDefaultOptions(array $options) {
        return array(
            'choices' => array(
                'm' => 'Male',
                'f' => 'Female',
            )
        );
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('NomCategorie', 'choice')
        ;
    }

    public function getName() {
        return 'categorie';
    }

}

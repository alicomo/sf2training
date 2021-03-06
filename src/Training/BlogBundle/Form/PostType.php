<?php

namespace Training\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('excerpt')
            ->add('body')
            ->add('author')
            ->add('category', 'entity',
                array(
                    'class' => 'TrainingBlogBundle:Category',
                    'property' => 'name'
                )
            )
            ->add('enabled', null, array(
                    'required' => false,
                    'label' => 'Published',
                    'attr' => array(
                        'class' => 'some'
                    )
                )
            )
            ->add('isActive', null, array(
                'required' => false)
            )
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Training\BlogBundle\Entity\Post'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'training_blogbundle_post';
    }
}

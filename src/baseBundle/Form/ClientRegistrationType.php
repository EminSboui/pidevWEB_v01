<?php


namespace baseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;

class ClientRegistrationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options); // TODO: Change the autogenerated stub
        $builder
            ->add('firstname', null, ["label" => "First Name"])
            ->add('lastname', null, ["label" => "Last Name"])
            ->add('pastryname', null, ["label" => "Pastry Name"])
            ->add('phone', null, ["label" => "Phone"])
            ->add('town', ChoiceType::class, array(
                'choices' => array(
                    'Ben Arous' => 'Ben Arous',
                    'Bizerte' => 'Bizerte',
                    'Gabès' => 'Gabès',
                    'Gafsa' => 'Gafsa',
                    'Jendouba' => 'Jendouba',
                    'Kairouan' => 'Kairouan',
                    'Kasserine' => 'Kasserine',
                    'Kébili' => 'Kébili',
                    'Le Kef' => 'Le Kef',
                    'Mahdia' => 'Mahdia',
                    'La Manouba' => 'La Manouba',
                    'Médenine' => 'Médenine',
                    'Monastir' => 'Monastir',
                    'Nabeul' => 'Nabeul',
                    'Sfax' => 'Sfax',
                    'Sidi Bouzid' => 'Sidi Bouzid',
                    'Siliana' => 'Siliana',
                    'Sousse' => 'Sousse',
                    'Tataouine' => 'Tataouine',
                    'Tozeur' => 'Tozeur',
                    'Tunis' => 'Tunis',
                    'Zaghouan' => 'Zaghouan'
                )
            ))
            ->add('picture', FileType::class, array('label' => 'Image(JPG)'))
            ->add('address', null, ["label" => "Address"])
            ->add('worktime', null, ["label" => "Work Time"])
            ->add('dayoff', null, ["label" => "Day Off"])
            ->add('specialty', null, ["label" => "Spéciality"])
            ->add('service', null, ["label" => "Service"])
            ->add('postalcode', null, ["label" => "Postal Code"])
            ->add('website', null, ["label" => "Website"])
            ->add('facebook', null, ["label" => "Facebook"])
            ->add('meansofpayment', null, ["label" => "Means Of Payment"])
            ->add('requirement', null, ["label" => "Requirement"]);
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

    }

    public function getBlockPrefix()
    {
        return 'client_registration';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }

}

<?php
namespace AppBundle\Controller;
namespace AppBundle\Controller;
use AppBundle\Entity\BigEvent;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class BigEventsController extends Controller
{
    /**
     * @Route("/", name="bigevents_list")
     */
     
    public function listAction(){
        $bigevents = $this->getDoctrine()->getRepository('AppBundle:BigEvent')->findAll();
        // replace this example code with whatever you need
        return $this->render('bigevents/index.html.twig', array('bigevents'=>$bigevents));
    }


        /**
     * @Route("/bigevents/create", name="bigevents_create")
     */

     
     public function createAction(Request $request){
        $event = new BigEvent;
        $form = $this->createFormBuilder($event)->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('image', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('capacity', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('email', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('phone', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('address_street', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('address_code', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('address_city', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('url', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('type', ChoiceType::class, array('choices'=>array('Music'=>'Music', 'Sport'=>'Sport', 'Movie'=>'Movie', 'Theater'=>'Theater', 'Festival'=>'Festival', 'Opera'=>'Opera', 'Musical'=>'Musical', 'Exhibition'=>'Exhibition', 'Market'=>'Market'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

      //  ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        
    ->add('start_date', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
    ->add('end_date', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
  
    ->add('save', SubmitType::class, array('label'=> 'Create Event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:15px')))
        ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            //fetching data
            $name = $form['name']->getData();
            $startdate = $form['start_date']->getData();
            $enddate = $form['end_date']->getData();
            $image = $form['image']->getData();
            $capacity = $form['capacity']->getData();
            $email = $form['email']->getData();
            $phone = $form['phone']->getData();
            $address_street = $form['address_street']->getData();
            $address_code = $form['address_code']->getData();
            $address_city = $form['address_city']->getData();
            $url = $form['url']->getData();
            $type = $form['type']->getData();

            $now = new\DateTime('now');
            $event->setName($name);
            $event->setStartDate($startdate);
            $event->setEndDate($enddate);
            $event->setImage($image);
            $event->setCapacity($capacity);
            $event->setEmail($email);
            $event->setPhone($phone);
            $event->setAddressStreet($address_street);
            $event->setAddressCode($address_code);
            $event->setAddressCity($address_city);
            $event->setUrl($url);
            $event->setType($type);

           // $event->setDueDate($due_date);
           // $event->setCreateDate($now);
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();
            $this->addFlash(
                    'notice',
                    'Event added'
                    );
            return $this->redirectToRoute('bigevents_list');
        }
        // replace this example code with whatever you need
        return $this->render('bigevents/add.html.twig', array('form' => $form->createView()));
    }


            /**
     * @Route("/bigevents/details/{id}", name="bigevents_details")
     */
    public function detailsAction($id)
    {
        $event = $this->getDoctrine()->getRepository('AppBundle:BigEvent')->find($id);
return $this->render('bigevents/view.html.twig', array('bigevents' => $event));
}
   
            /**
     * @Route("/bigevents/edit/{id}", name="bigevents_edit")
     */
    public function editAction( $id, Request $request){
        $event = $this->getDoctrine()->getRepository('AppBundle:BigEvent')->find($id);
                 $now = new\DateTime('now');
                        
                $event->setName($event->getName());
                $event->setStartDate($event->getStartDate());
                $event->setEndDate($event->getEndDate());
                $event->setImage($event->getImage());
                $event->setCapacity($event->getCapacity());
                $event->setEmail($event->getEmail());
                $event->setPhone($event->getPhone());
                $event->setAddressStreet($event->getAddressStreet());
                $event->setAddressCode($event->getAddressCode());
                $event->setAddressCity($event->getAddressCity());
                $event->setUrl($event->getUrl());
                $event->setType($event->getType());

                //$event->setCreateDate($now);
            $form = $this->createFormBuilder($event)->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
            ->add('url', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('start_date', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
            ->add('end_date', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
          
            ->add('image', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))   
            ->add('capacity', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('email', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('phone', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('address_street', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('address_code', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('address_city', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('url', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('type', ChoiceType::class, array('choices'=>array('Music'=>'Music', 'Sport'=>'Sport', 'Movie'=>'Movie', 'Theater'=>'Theater'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
    
        ->add('save', SubmitType::class, array('label'=> 'Update Event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-botton:15px')))
            ->getForm();
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                //fetching data
                $name = $form['name']->getData();
                $startdate = $form['start_date']->getData();
                $enddate = $form['end_date']->getData();
               
                $image = $form['image']->getData();
                $capacity = $form['capacity']->getData();
                $email = $form['email']->getData();
                $phone = $form['phone']->getData();
                $address_street = $form['address_street']->getData();
                $address_code = $form['address_code']->getData();
                $address_city = $form['address_city']->getData();
                $url = $form['url']->getData();
                $type = $form['type']->getData();

                $now = new\DateTime('now');
                $em = $this->getDoctrine()->getManager();
                $event = $em->getRepository('AppBundle:BigEvent')->find($id);

            
                 $event->setName($name);
            $event->setStartDate($startdate);
            $event->setEndDate($enddate);
            $event->setImage($image);
            $event->setCapacity($capacity);
            $event->setEmail($email);
            $event->setPhone($phone);
            $event->setAddressStreet($address_street);
            $event->setAddressCode($address_code);
            $event->setAddressCity($address_city);
            $event->setUrl($url);
            $event->setType($type);
              //  $event->setCreateDate($now);
             
                $em->flush();
                $this->addFlash(
                        'notice',
                        'Event Updated'
                        );
                return $this->redirectToRoute('bigevents_list');
            }
            return $this->render('bigevents/edit.html.twig', array('event' => $event, 'form' => $form->createView()));
        }

        


                /**
     * @Route("/bigevents/delete/{id}", name="bigevents_delete")
     */
    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
   $event = $em->getRepository('AppBundle:BigEvent')->find($id);
   $em->remove($event);
    $em->flush();
   $this->addFlash(
           'notice',
           'Event Removed'
           );
    return $this->redirectToRoute('bigevents_list');
}
}



<?php
/**
 * @author    Igor Chepurnoy <Chepurnoy@zfort.com>
 * Default Controller
 */
namespace Igor\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Igor\TestBundle\Entity\Enquiry;
use Igor\TestBundle\Entity\Contact;
use Igor\TestBundle\Form\EnquiryType;

class DefaultController extends Controller
{
    /**
     * @author    Igor Chepurnoy <Chepurnoy@zfort.com>
     * Index Action
     * @return type
     */
    public function indexAction()
    {
        $request = $this->container->get('request');
        $routeName = $request->get('_route');
        $repository = $this->getDoctrine()->getRepository('IgorTestBundle:Block');
        $blockCenterLeft = $repository->findBy(
                    array('page' => 'home','blockPosition' => 'center'));
        return $this->render('IgorTestBundle:Default:index.html.twig',array('route' => $routeName,'blockLeft' => $blockCenterLeft));
    }
    
    /**
     * @author    Igor Chepurnoy <Chepurnoy@zfort.com>
     * About Action
     * @return type
     */
    public function aboutAction()
    {
        //Get Request
        $request = $this->container->get('request');
        //Get Route Name
        $routeName = $request->get('_route');
        //Set Repository
        $repository = $this->getDoctrine()->getRepository('IgorTestBundle:Block');
        //Get Content for page about
        $aboutPageContent = $repository->findByPage('about');
        return $this->render('IgorTestBundle:Default:about.html.twig',array('route' => $routeName, 'about' =>$aboutPageContent));
    }
    /**
     * @author    Igor Chepurnoy <Chepurnoy@zfort.com>
     * Contact Action,render contact page with contact form
     * @return type
     */
    public function contactAction(){
         //Get Request
        $request = $this->container->get('request');
        //Get Route Name
        $routeName = $request->get('_route');
        //Create new Enquiry class for a form
        $enquiry = new Enquiry();
        //Create form
        $form = $this->createForm(new EnquiryType(), $enquiry);
        //If request method == post
         if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getEntityManager();
            //Create contact model
            $contact = new Contact();
            $form->bind($this->getRequest());
            //Validate Data
            if ($form->isValid()) {
                //Collect Data
                 $contact->setName($form['name']->getData());
                 $contact->setEmail($form['email']->getData());
                 $contact->setSubject($form['subject']->getData());
                 $contact->setBody($form['body']->getData());
                 $em->persist($contact);
                 //Save data
                 $em->flush();
                 //Set Flash
                 $this->get('session')->getFlashBag()->add('sendMessage', 'Your message has been send.');
                 //After Save contact,redirect to contact page
                return $this->redirect($this->generateUrl('contact'));
            }
        }
        //Render View
        return $this->render('IgorTestBundle:Default:contact.html.twig',array('route' => $routeName,'form' => $form->createView()));
    }
}

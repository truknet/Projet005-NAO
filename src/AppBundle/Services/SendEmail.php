<?php

namespace AppBundle\Services;

use AppBundle\Entity\Contact;
use Symfony\Component\Templating\EngineInterface;

class SendEmail
{

    protected $templating;
    protected $mailer;

    public function __construct(EngineInterface $templating, \Swift_Mailer $mailer)
    {
        $this->templating = $templating;
        $this->mailer = $mailer;
    }


    /**
     * Function pour envoyer le formulaire de contact en Email à l'administrateur
     *
     * @param Contact $contact
     *
     */
    public function sendEmail(Contact $contact)
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('Message de NAO')
            ->setFrom(array('info@trukotop.com' => 'Association NAO'))
            ->setTo('info@trukotop.com')
            ->setCharset('utf-8')
            ->setContentType('text/html')
            ->setBody(
                $this->templating->render('Emails/contactEmail.html.twig', array('contact' => $contact)),
                'text/html'
            )
        ;
        $this->mailer->send($message);
    }
}
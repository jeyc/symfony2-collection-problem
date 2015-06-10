<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Config;
use AppBundle\Entity\Option;
use AppBundle\Form\ConfigType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $config = new Config();
        $config->addOption(new Option('A'));
        $config->addOption(new Option('B'));
        $config->addOption(new Option('C'));

        dump($config);

        $form = $this->createForm(new ConfigType(), $config);
        $form->handleRequest($request);

        if($form->isValid()) {
            dump($config);die;
        }

        return $this->render('AppBundle:Default:index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}

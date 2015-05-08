<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\krzysztof90TrapezType;
use krzysztof90\Tools\Trapez;


class krzysztof90TrapezController extends Controller
{

    /**
     * @Route("/krzysztof90/trapez/show/form", name="krzysztof90_trapez_show_form")
     */
    public function showFormAction()
    {
        $trapez = new Trapez();
        $form = $this->UtworzForm($trapez);

        return $this->render(
            'AppBundle:krzysztof90Trapez:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/krzysztof90/trapez/calc", name="krzysztof90_trapez_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $trapez = new Trapez();
        $form = $this->UtworzForm($trapez);
        $form->handleRequest($request);

        if ($form->isValid())
        {
            return $this->render
            (
                'AppBundle:krzysztof90Trapez:wynik.html.twig',
                array('wynik' => $trapez->trapezation())
            );

        }

        return $this->render
        (
            'AppBundle:krzysztof90Trapez:form.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * Creates a form...
     *
     * @param Trapez $trapez The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function UtworzForm(Trapez $trapez)
    {
        $form = $this->createForm(new krzysztof90TrapezType(), $trapez, array(
            'action' => $this->generateUrl('krzysztof90_trapez_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}

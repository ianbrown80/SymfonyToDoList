<?php

namespace SymfonyToDoList\ToDoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ToDoController extends Controller
{
    /**
     * @Route("/", name="todo_list")
     */
    public function listAction()
    {
        return $this->render('SymfonyToDoListToDoBundle:ToDo:index.html.twig');
    }

    /**
     * @Route("/edit/{id}", name="todo_edit")
     */
    public function editAction($id, Request $request)
    {
        return $this->render('SymfonyToDoListToDoBundle:ToDo:edit.html.twig');
    }

    /**
     * @Route("/create", name="todo_create")
     */
    public function createAction(Request $request)
    {
        return $this->render('SymfonyToDoListToDoBundle:ToDo:create.html.twig');
    }

    /**
     * @Route("/details/{id}", name="todo_details")
     */
    public function detailsAction($id)
    {
        return $this->render('SymfonyToDoListToDoBundle:ToDo:details.html.twig');
    }
}

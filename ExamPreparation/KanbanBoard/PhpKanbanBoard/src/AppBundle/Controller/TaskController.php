<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends Controller
{
    /**
     * @param Request $request
     * @Route("/", name="index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
       $repo = $this->getDoctrine()->getRepository(Task::class);
       $finishedTasks = $repo->findBy(["status"=>"Finished"]);
       $inProgressTasks = $repo->findBy(["status" => "In Progress"]);
       $openTasks = $repo->findBy(["status"=>"Open"]);

       return $this->render(":task:index.html.twig",["openTasks"=>$openTasks,"finishedTasks"=>$finishedTasks,"inProgressTasks"=>$inProgressTasks]);
    }

    /**
     * @param Request $request
     * @Route("/create", name="create")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request)
    {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();
            return $this->redirect("/");
        }
        return $this->render(":task:create.html.twig",["task" => $task, "form"=>$form->createView()]);
    }

    /**
     * @Route("/edit/{id}", name="edit")
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit($id, Request $request)
    {
        $taskRepo = $this->getDoctrine()->getRepository(Task::class);
        $task = $taskRepo->find($id);
        if ($task == null) {
            return $this->redirect("/");
        }
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);
        $errorMsg = "";
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->merge($task);
                $em->flush();
                return $this->redirect("/");
            } else
                $errorMsg = "Invalid form data";
        }
        return $this->render(
            ":task:edit.html.twig",
            ["task" => $task, "form" => $form->createView(),
                "errorMsg" => $errorMsg]
        );
    }
}

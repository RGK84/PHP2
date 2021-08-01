<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\OrderStatus;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');
    }

    /**
     * @Route("/admin/orders", name="adminorders")
     */
    public function getOrders(): Response
    {
        $ordersArr = $this->getDoctrine()->getRepository(Order::class)->findAll();
        $statusesArr = $this->getDoctrine()->getRepository(OrderStatus::class)->findAll();
        $usersArr = $this->getDoctrine()->getRepository(User::class)->findAll();

        $statuslist=[];
        foreach ($statusesArr as $status) {
            $statuslist[$status->getId()] = $status->getName();
        }

        $userslist=[];
        foreach ($usersArr as $user) {
            $userslist[$user->getId()] = $user->getName();
        }

        $orders=[];
        foreach ($ordersArr as $order) {
            /* @var $order \App\Entity\Order */
            $id = $order->getId();
            $orders[$id]=[];
            $orders[$id]['id']= $id;
            $orders[$id]['username']= $userslist[$order->getUserId()];
            $orders[$id]['create_at']=$order->getCreatedAt()->format('Y-m-d H:m:s');
            $orders[$id]['status_active']= $statuslist[$order->getStatusId()];
            $orders[$id]['status']= $statuslist;
            $orders[$id]['amount'] = $order->getAmount();
        }

        krsort($orders);
        return $this->render('admin/adminorders.html.twig', ['orders'=>$orders]);
    }

    /**
     * @Route("/admin/order/delete/{id}", name="deleteorder")
     */
    public function deleteOrder($id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $order = $em->getRepository(Order::class)->find($id);

        $em->remove($order);
        $em->flush();

        return $this->redirectToRoute('adminorders');
    }

    /**
     * @Route("/admin/order/edit", name="editorder")
     */
    public function editOrder(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $newStatus = $request->get('status');
        $orderId = $request->get('id');
        $order = $em->getRepository(Order::class)->find($orderId);

        $order->setStatusId($newStatus);
        $em->flush();

        return $this->redirectToRoute('adminorders');
    }
}

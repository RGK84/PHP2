<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Entity\OrderProduct;
use App\Entity\Order;
use App\Entity\Product;
use App\Entity\Profile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="cart")
     */
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        /* @var $user \App\Entity\User */
        $user = $this->getUser();

        $userCart = $this->getDoctrine()->getRepository(Cart::class)->findBy(['user_id'=>$user->getId()]);

        $cartProducts = [];
        $cartTotal = 0;

        if(!empty($userCart)) {
            $cart = [];
            $productsItems = [];
            $products =[];
            foreach ($userCart as $item) {
                $cart[$item->getProductId()] = $item->getQuantity();
                $products[] = $this->getDoctrine()->getRepository(Product::class)->findBy(['id'=>$item->getProductId()]);
            }
            foreach ($products as $items) {
                foreach ($items as $item) {
                    $productsItems[] = $item;
                }
            }

            foreach ($productsItems as $product) {
                $id = $product->getId();
                $cartProducts[$id] = [];
                $cartProducts[$id]['id'] = $id;
                $cartProducts[$id]['name'] = $product->getName();
                $cartProducts[$id]['link'] = $product->getLink();
                $cartProducts[$id]['price'] = $product->getPrice();
                $cartProducts[$id]['quantity'] = $cart[$product->getId()];
                $cartProducts[$id]['total'] = $product->getPrice() * $cart[$product->getId()];
                $cartTotal += $cartProducts[$product->getId()]['total'];
            }

        }
        return $this->render('cart/index.html.twig', [
            'products'=>$cartProducts,
            'total' =>$cartTotal,
        ]);

    }

    /**
     * @Route("/cart/add", name="cartadd", methods={"post"})
     */
    public function add(Request $request) : Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        /* @var $user \App\Entity\User */
        $user = $this->getUser();
        $productID = $request->get('product_id');
        $quantity = $request->get('quantity');

        $em = $this->getDoctrine()->getManager();
        $cartProduct = $em->getRepository(Cart::class)->findOneBy(['product_id'=>$productID]);

        if (!$cartProduct) {
            $cart = new Cart();
            $cart->setProductId($productID);
            $cart->setQuantity($quantity);
            $cart->setUserId($user->getId());
            $em->persist($cart);
            $em->flush();
        } else {
            /* @var $cartProduct \App\Entity\Cart*/
            $currentQuantity = $cartProduct->getQuantity();
            $cartProduct->setQuantity(($currentQuantity + $quantity));
            $em->flush();
        }

        return $this->redirectToRoute('catalog');
    }

    /**
     * @Route("/cart/delete", name="cartdel")
     */
    public function delete() : Response
    {
        $em = $this->getDoctrine()->getManager();
        /* @var $user \App\Entity\User */
        $user = $this->getUser();
        $cartDelete = $em->getRepository(Cart::class)->findBy(['user_id'=>$user->getId()]);
        if ($cartDelete) {
            foreach ($cartDelete as $item) {
                $em->remove($item);
            }
            $em->flush();
        }

        return $this->redirectToRoute('catalog');
    }

    /**
     * @Route("/checkout", name="checkout", methods={"post"})
     */
    public function checkoutCartProcessing(Request $request): Response
    {
        /* @var $user \App\Entity\User */
        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();
        $userProfile = $em->getRepository(Profile::class)->findOneBy(['user_id'=>$user->getId()]);
        if (!$userProfile) {
            $profile = new Profile();
            $profile->setUserId($user->getId());
            $profile->setFullname($request->get('fullname'));
            $profile->setPhone($request->get('phone'));
            $profile->setAddress($request->get('address'));
            $em->persist($profile);
            $em->flush();
        }

        $productsRep = $this->getDoctrine()->getRepository(Product::class)->findAll();
        $productsPrices = [];
        foreach ($productsRep as $item) {
            /* @var $item \App\Entity\Product */
            $productsPrices[$item->getId()] = $item->getPrice();
        }

        $cartArr = $em->getRepository(Cart::class)->findAll();
        $cart = [];
        $cartAmount = 0;
        foreach ($cartArr as $item) {
            /* @var $item \App\Entity\Cart */
            $id = $item->getId();
            $cart[$id] = [];
            $cart[$id]['id'] = $id;
            $cart[$id]['user_id'] = $item->getUserId();
            $cart[$id]['product_id'] = $item->getProductId();
            $cart[$id]['quantity'] = $item->getQuantity();
            $cart[$id]['total'] = $item->getQuantity() * $productsPrices[$item->getProductId()];
            $cartAmount += $cart[$id]['total'];
        }

        $order = new Order();
        $order->setUserId($user->getId());
        $order->setAmount($cartAmount);
        $order->setCreatedAt(new \DateTimeImmutable());
        $order->setStatusId(1);
        $em->persist($order);
        $em->flush();

        $orderId = $em->getRepository(Order::class)->findOneBy(['user_id'=>$user->getId()])->getId();

        foreach ($cart as $item) {
            /* @var $item \App\Entity\Cart */
            $orderProduct = new OrderProduct();
            $orderProduct->setOrderId($orderId);
            $orderProduct->setProductId($item['product_id']);
            $orderProduct->setQuantity($item['quantity']);
            $orderProduct->setTotal($item['total']);
            $em->persist($orderProduct);
        }
        $em->flush();

        $this->delete();

        return $this->redirectToRoute('profile');
    }
}

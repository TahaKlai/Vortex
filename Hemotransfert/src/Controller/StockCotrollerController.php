<?php

namespace App\Controller;

use App\Entity\Stock;
use App\Form\StockType;
use App\Repository\StockRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
//use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class StockCotrollerController extends AbstractController
{
/**
 * this function dispalys the stock
 * 
 * @param Stock $repository
 * @param PaginatorInterface $paginator 
 * @param Request $request
 * @return Response
 */



    #[Route('/stock/cotroller', name: 'app_stock_cotroller',methods:['GET'])]
    public function index(StockRepository $reposiory, PaginatorInterface $paginator, Request $request): Response
    {
        $stock = $paginator->paginate(
            $reposiory->findAll(),
            $request->query->getInt('page', 1),
            3
        );

       // $stock =$reposiory->findAll();
        return $this->render('pages/stock_cotroller/index.html.twig', [
          'stock'=>$stock  
        ]);
    }
    #[Route('/stock/nouveau','stock.new', methods:['GET','POST'])]
    public function new(Request $request,EntityManagerInterface $manager):Response
    {
        $stock= new Stock();
        $form=$this->createForm(StockType::class,$stock);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
$stock=$form->getData();
$manager->persist($stock);
$manager->flush();
$this->addFlash(
    'success',
    'votre stock a ete ajouté!'
    );
return $this->redirectToRoute('app_stock_cotroller');



        }
        
        return $this->render('pages/stock_cotroller/new.html.twig',['form'=>$form->createView()]);
    }
    #[Route('/stock/edit/{id}','stock.edit', methods:['GET','POST'])]
    public function edit(StockRepository $reposiory, int $id,Request $request,EntityManagerInterface $manager): Response
    {
        $stock= $reposiory->findOneBy(["id"=>$id]);
        $form=$this->createForm(StockType::class,$stock);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
$stock=$form->getData();
$manager->persist($stock);
$manager->flush();
$this->addFlash(
    'success',
    'votre stock a ete modifié!'
    );
return $this->redirectToRoute('app_stock_cotroller');



        }



return $this->render('pages/stock_cotroller/edit.html.twig',[
'form'=>$form->createView()

]
);
    }
    #[Route('/stock/delete/{id}','stock.delete', methods:['GET'])]
    public function delete(EntityManagerInterface $manager, int $id):Response
    {
        $stock = $manager->getRepository(Stock::class)->find($id);

        if (!$stock){

            
            $this->addFlash(
                'warning',
                'stock introuvable'
                );
                return $this->redirectToRoute('app_stock_cotroller');

        }
$manager->remove($stock);
$manager->flush();
$this->addFlash(
    'success',
    'votre stock a ete supprimé!'
    );
return $this->redirectToRoute('app_stock_cotroller');
    }
}

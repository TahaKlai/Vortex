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


    #[Route('/stock/view', name: 'stock.view',methods:['GET'])]
    public function view(StockRepository $reposiory, PaginatorInterface $paginator, Request $request): Response
    {
        $stock = $paginator->paginate(
            $reposiory->findAll(),
            $request->query->getInt('page', 1),
            3
        );

       // $stock =$reposiory->findAll();
        return $this->render('stockfront.html.twig', [
          'stock'=>$stock  
        ]);
    }




    #[Route('/stock/nouveau',name:'stock.new', methods:['GET','POST'])]
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
    #[Route('/stock/edit/{id}',name:'stock.edit', methods:['GET','POST'])]
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
    #[Route('/stock/delete/{id}',name:'stock.delete', methods:['GET'])]
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
    #[Route('/stock/sort/{sortField}', name: 'app_stock_sort', methods: ['GET'])]
public function sort(StockRepository $repository, PaginatorInterface $paginator, Request $request, string $sortField): Response
{
    $stock = $paginator->paginate(
        $repository->findBy([], [$sortField => 'ASC']),
        $request->query->getInt('page', 1),
        3
    );

    return $this->render('pages/stock_cotroller/index.html.twig', [
        'stock' => $stock,
    ]);
}
#[Route('/stock/search', name: 'app_stock_search', methods: ['GET'])]
public function search(StockRepository $repository, PaginatorInterface $paginator, Request $request): Response
{
    $keyword = $request->query->get('keyword');
    $category = $request->query->get('category');
    $stock = $paginator->paginate(
        $repository->search($keyword, $category),
        $request->query->getInt('page', 1),
        3
    );

    return $this->render('pages/stock_cotroller/index.html.twig', [
        'stock' => $stock,
    ]);
}



#[Route('/stock/statistics', name: 'stock_statistics')]
public function stock_statistics(StockRepository $stockRepository): Response
{
    $stocks = $stockRepository->findAll();

    if (empty($stocks)) {
        return $this->render('pages/stock_cotroller/stat.html.twig');
    }

    $stocksByType = [];
    foreach ($stocks as $stock) {
        $type = $stock->getType();
        if (!isset($stocksByType[$type])) {
            $stocksByType[$type] = 1;
        } else {
            $stocksByType[$type]++;
        }
    }

    $dataPoints1 = [];
    $dataPoints2 = [];
    foreach ($stocksByType as $type => $count) {
        $dataPoints1[] = ['label' => $type, 'y' => $count];
        // Calculer les données pour la deuxième méthode de statistiques
        $dataPoints2[] = ['label' => $type, 'y' => $count * 2];
    }

    return $this->render('pages/stock_cotroller/stat.html.twig', [
        'dataPoints1' => json_encode($dataPoints1, JSON_NUMERIC_CHECK),
        'dataPoints2' => json_encode($dataPoints2, JSON_NUMERIC_CHECK),
        // ... d'autres variables nécessaires à votre modèle
    ]);
}

}

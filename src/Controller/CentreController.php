<?php

namespace App\Controller;
use App\Entity\LogModification;
use App\Entity\CentreDeDon;
use App\Form\CentreType;
use App\Repository\CentreDeDonRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CentreController extends AbstractController
{
    #[Route('/centre', name: 'centre.index' ,methods:['GET'])]
    public function index(CentreDeDonRepository $reposiory,PaginatorInterface $paginator,Request $request): Response
    {
        $centres = $paginator->paginate(
            $reposiory->findAll(),
            $request->query->getInt('page', 1),
            3
        );


        return $this->render('pages/centre/index.html.twig', [
            'centres' => $centres,
        ]);
    }


    #[Route('/centre/view', name: 'centre.view' ,methods:['GET'])]
    public function view(CentreDeDonRepository $reposiory,PaginatorInterface $paginator,Request $request): Response
    {
        $centres = $paginator->paginate(
            $reposiory->findAll(),
            $request->query->getInt('page', 1),
            3
        );


        return $this->render('centrefront.html.twig', [
            'centres' => $centres,
        ]);
    }

    #[Route('/modifications', name: 'modifications')]
    public function modifications(EntityManagerInterface $manager): Response
    {
        $modifications = $manager->getRepository(LogModification::class)->findAll();
    
        return $this->render('pages/centre/modifications.html.twig', [
            'modifications' => $modifications
        ]);
    }
    #[Route('/centre/creation', name: 'centre.new' ,methods:['GET','POST'])]
public function new(Request $request,EntityManagerInterface $manager):Response
{
$centre= new CentreDeDon();
$form= $this->createForm(CentreType::class,$centre);

$form->handleRequest($request);
if($form->isSubmitted() && $form->isValid()){

    $centre=$form->getData();
    $manager->persist($centre);
  

    $logModification = new LogModification();
    $logModification->setAction('ajout');
    $logModification->setCentre($centre);
    $logModification->setDate(new \DateTime());

    $manager->persist($logModification);
    $manager->flush();


    $this->addFlash(
        'success',
        'votre centre a ete ajouté!'
        );
    return $this->redirectToRoute('centre.index');
}


return $this->render('pages/centre/new.html.twig',[
'form' =>$form->createView()

]);


}

#[Route('/centre/edit/{id}',name:'centre.edit', methods:['GET','POST'])]
public function edit(CentreDeDonRepository  $reposiory, int $id,Request $request,EntityManagerInterface $manager): Response
{
    $centre= $reposiory->findOneBy(["id"=>$id]);
    $form=$this->createForm(CentreType::class,$centre);

    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){
$centre=$form->getData();
$manager->persist($centre);



            // Enregistrer la modification dans LogModification
            $logModification = new LogModification();
            $logModification->setAction('modification');
            $logModification->setCentre($centre);
            $logModification->setDate(new \DateTime());

            $manager->persist($logModification);
            $manager->flush();




$this->addFlash(
'success',
'votre centre a ete modifié!'
);
return $this->redirectToRoute('centre.index');

    }
return $this->render('pages/centre/edit.html.twig',[
'form'=>$form->createView()

]
);

}

#[Route('/centre/delete/{id}',name:'centre.delete', methods:['GET'])]
public function delete(EntityManagerInterface $manager, int $id):Response
{
    $centre = $manager->getRepository(CentreDeDon::class)->find($id);

    if (!$centre){

        
        $this->addFlash(
            'warning',
            'stock introuvable'
            );
            return $this->redirectToRoute('centre.index');

    }
$manager->remove($centre);


  // Enregistrer la modification dans LogModification
  $logModification = new LogModification();
  $logModification->setAction('suppression');
  $logModification->setCentre($centre);
  $logModification->setDate(new \DateTime());

  $manager->persist($logModification);
  $manager->flush();



$this->addFlash(
'success',
'votre centre a ete supprimé!'
);
return $this->redirectToRoute('centre.index');
}

#[Route('/centre/sort/{sortField}', name: 'centre.sort', methods:['GET'])]
public function sort(CentreDeDonRepository $repository, PaginatorInterface $paginator, Request $request, string $sortField): Response
{
    $centres = $paginator->paginate(
        $repository->findBy([], [$sortField => 'ASC']),
        $request->query->getInt('page', 1),
        3
    );

    return $this->render('pages/centre/index.html.twig', [
        'centres' => $centres,
    ]);
}
#[Route('/centre/search', name: 'centre.search', methods:['GET', 'POST'])]
public function search(CentreDeDonRepository $repository, PaginatorInterface $paginator, Request $request): Response
{
    $keyword = $request->query->get('keyword');
    $category = $request->query->get('category');
    $centres = $paginator->paginate(
        $repository->search($keyword ,$category),  
        $request->query->getInt('page', 1),
        3
    );

    return $this->render('pages/centre/index.html.twig', [
        'centres' => $centres,
    ]);
}






}

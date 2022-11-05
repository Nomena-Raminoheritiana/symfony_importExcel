<?php

namespace App\Controller;

use App\Form\ImportExcelType;
use App\Manager\XlsDataManager;
use App\Repository\XlsDataRepository;
use App\Services\DirectoryManagement;
use App\Services\FileUploader;
use App\Services\SpreadSheetService;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/import')]
class ImportController extends AbstractController
{

    private DirectoryManagement $directoryManagement;
    private FileUploader $fileUploader;
    private XlsDataRepository $xlsDataRepository;
    private SpreadSheetService $spreadSheetService;
    private XlsDataManager $xlsDataManager;

    public function __construct(
        DirectoryManagement $directoryManagement,
        FileUploader $fileUploader,
        XlsDataRepository $xlsDataRepository,
        SpreadSheetService $spreadSheetService,
        XlsDataManager $xlsDataManager
    )
    {

        $this->directoryManagement = $directoryManagement;
        $this->fileUploader = $fileUploader;
        $this->xlsDataRepository = $xlsDataRepository;
        $this->spreadSheetService = $spreadSheetService;
        $this->xlsDataManager = $xlsDataManager;
    }

    #[Route('/xls', name: 'app_import_xls')]
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $importForm = $this->createForm(ImportExcelType::class);
        $importForm->handleRequest($request);
        if($importForm->isSubmitted() && $importForm->isValid()) {
            $fileName = $this->fileUploader->upload($importForm->getData()['import'], $this->directoryManagement->getExcelImportDirectory());
            if($fileName) {
                $data = $this->spreadSheetService->readXls($this->directoryManagement->getExcelImportDirectory().DIRECTORY_SEPARATOR.$fileName);
                $this->xlsDataManager->saveData($data);
                $this->addFlash('success', 'Import effectué avec succès');
            }
        }

        $xslDataPagined = $paginator->paginate(
            $this->xlsDataRepository->createQueryBuilder('e'),
            $request->query->getInt('page', 1),
            8
        );

        return $this->render('import/import_xls.html.twig', [
            'controller_name' => 'ImportController',
            'importForm' => $importForm->createView(),
            'xlsData' => $xslDataPagined
        ]);
    }

    #[Route('/xls/clear', name: 'app_import_clear_data')]
    public function deleteAllData()
    {
        $this->xlsDataRepository->clearData();
        $this->addFlash('success','Les données sont supprimées');
        return $this->redirectToRoute('app_import_xls');
    }
}

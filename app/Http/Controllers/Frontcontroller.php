<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\FrontService;
use App\Models\Services as Service;
use App\Models\Servicescategories as Category;

class FrontController extends Controller
{
    protected $frontService;

    public function __construct(FrontService $frontService)
    {
        // Injeksi FrontService untuk mengambil data yang ditampilkan di halaman depan
        $this->frontService = $frontService;
    }

    public function index()
    {
        $data = $this->frontService->getFrontPageData();
        return view('front.index', $data);
    }

    /**
     * Preview welcome page (homepage template) — supplies top services for the static welcome template
     */
    public function welcome()
    {
        // Ambil sampai 6 service terbaru / populer lewat FrontService
        $topServices = $this->frontService->getTopServices(6);

        return view('welcome', compact('topServices'));
    }

    public function details(Service $service)
    {
        $data = $this->frontService->getServiceDetails($service);
        return view('front.details', $data);
    }

    public function category(Category $category)
    {
        $data = $this->frontService->getCategoryData($category);
        return view('front.category', $data);
    }
}

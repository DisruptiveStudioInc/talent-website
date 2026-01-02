<?php

namespace App\Controllers;

use App\Request;
use App\Response;
use App\Models\Service;

class HomeController extends BaseController
{
  public function index(Request $request): Response
  {
    // Load page content
    $pageContent = $this->loadPageContent('home');

    // Get all services for displaying in home page if needed
    $services = Service::getAllForCards($this->language);

    return $this->view('home', [
      'content' => $pageContent,
      'services' => $services,
      'hasSnapScroll' => true,
      'hasTextTexture' => true,
      'metaDescription' => $pageContent['seoDescription'] ?? null
    ]);
  }
}

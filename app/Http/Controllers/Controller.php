<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Domain\DomainService;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(
        private readonly DomainService $domainService
    ) {}

    public function index()
    {
        try {
            $id = $this->domainService->createCompany();
        } catch (\Exception $exception) {
            dd($exception);
        }

        try {
            $id = $this->domainService->updateCompany($id);
        } catch (\Exception $exception) {
            dd($exception);
        }

        return $id;
    }
}

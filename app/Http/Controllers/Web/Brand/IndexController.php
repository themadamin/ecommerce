<?php

namespace App\Http\Controllers\Web\Brand;

use App\Http\Controllers\Controller;
use App\Http\Resources\BrandResource;
use App\Models\Brand;
use Inertia\Inertia;
use Inertia\Response;

class IndexController extends Controller
{
    /**
     * @return Response
     */
    public function __invoke()
    {
        $brands = Brand::paginate(10);

        return Inertia::render('Brand', ['brands' => BrandResource::collection($brands)]);
    }
}

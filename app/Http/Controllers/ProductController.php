<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class ProductController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.products.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product): View
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse|View
    {
        $products = Product::latest()->paginate(10);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'data' => $products,
            ]);
        }

        return view('admin.products.index', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request): RedirectResponse|JsonResponse
    {
        $data = $request->validated();

        $product = Product::create($data);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'data' => $product,
            ], 201);
        }

        return redirect()
            ->route('web.admin.products.index')
            ->with('success', 'Produto criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Product $product): RedirectResponse|JsonResponse
    {
        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'data' => $product,
            ]);
        }

        return redirect()->route('web.admin.products.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product): RedirectResponse|JsonResponse
    {
        $data = $request->validated();

        $product->update($data);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'data' => $product,
            ], 201);
        }

        return redirect()
            ->route('web.admin.products.index')
            ->with('success', 'Produto editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Product $product): RedirectResponse|JsonResponse
    {
        $product->delete();

        if ($request->wantsJson()) {
            return response()->json(['success' => true], 204);
        }

        return redirect()
            ->route('web.admin.products.index')
            ->with('success', 'Produto deletado!');
    }
}

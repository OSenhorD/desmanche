<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;
use App\Models\Categories;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class CategoriesController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.categories.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $category): View
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse|View
    {
        $categories = Categories::latest()->paginate(10);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'data' => $categories,
            ]);
        }

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriesRequest $request): RedirectResponse|JsonResponse
    {
        $data = $request->validated();

        $category = Categories::create($data);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'data' => $category,
            ], 201);
        }

        return redirect()
            ->route('web.admin.categories.index')
            ->with('success', 'Categoria criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Categories $category): RedirectResponse|JsonResponse
    {
        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'data' => $category,
            ]);
        }

        return redirect()->route('web.admin.categories.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriesRequest $request, Categories $category): RedirectResponse|JsonResponse
    {
        $data = $request->validated();

        $category->update($data);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'data' => $category,
            ], 201);
        }

        return redirect()
            ->route('web.admin.categories.index')
            ->with('success', 'Categoria editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Categories $category): RedirectResponse|JsonResponse
    {
        $category->delete();

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Categoria deletada!',
            ], 204);
        }

        return redirect()
            ->route('web.admin.categories.index')
            ->with('success', 'Categoria deletada!');
    }
}

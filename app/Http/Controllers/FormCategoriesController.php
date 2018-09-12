<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFormCategoriesRequest;
use App\Http\Requests\UpdateFormCategoriesRequest;
use App\Repositories\FormCategoriesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FormCategoriesController extends AppBaseController
{
    /** @var  FormCategoriesRepository */
    private $formCategoriesRepository;

    public function __construct(FormCategoriesRepository $formCategoriesRepo)
    {
        $this->formCategoriesRepository = $formCategoriesRepo;
    }

    /**
     * Display a listing of the FormCategories.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->formCategoriesRepository->pushCriteria(new RequestCriteria($request));
        $formCategories = $this->formCategoriesRepository->all();

        return view('form_categories.index')
            ->with('formCategories', $formCategories);
    }

    /**
     * Show the form for creating a new FormCategories.
     *
     * @return Response
     */
    public function create()
    {
        return view('form_categories.create');
    }

    /**
     * Store a newly created FormCategories in storage.
     *
     * @param CreateFormCategoriesRequest $request
     *
     * @return Response
     */
    public function store(CreateFormCategoriesRequest $request)
    {
        $input = $request->all();

        $formCategories = $this->formCategoriesRepository->create($input);

        Flash::success('Form Categories saved successfully.');

        return redirect(route('formCategories.index'));
    }

    /**
     * Display the specified FormCategories.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $formCategories = $this->formCategoriesRepository->findWithoutFail($id);

        if (empty($formCategories)) {
            Flash::error('Form Categories not found');

            return redirect(route('formCategories.index'));
        }

        return view('form_categories.show')->with('formCategories', $formCategories);
    }

    /**
     * Show the form for editing the specified FormCategories.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $formCategories = $this->formCategoriesRepository->findWithoutFail($id);

        if (empty($formCategories)) {
            Flash::error('Form Categories not found');

            return redirect(route('formCategories.index'));
        }

        return view('form_categories.edit')->with('formCategories', $formCategories);
    }

    /**
     * Update the specified FormCategories in storage.
     *
     * @param  int              $id
     * @param UpdateFormCategoriesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFormCategoriesRequest $request)
    {
        $formCategories = $this->formCategoriesRepository->findWithoutFail($id);

        if (empty($formCategories)) {
            Flash::error('Form Categories not found');

            return redirect(route('formCategories.index'));
        }

        $formCategories = $this->formCategoriesRepository->update($request->all(), $id);

        Flash::success('Form Categories updated successfully.');

        return redirect(route('formCategories.index'));
    }

    /**
     * Remove the specified FormCategories from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $formCategories = $this->formCategoriesRepository->findWithoutFail($id);

        if (empty($formCategories)) {
            Flash::error('Form Categories not found');

            return redirect(route('formCategories.index'));
        }

        $this->formCategoriesRepository->delete($id);

        Flash::success('Form Categories deleted successfully.');

        return redirect(route('formCategories.index'));
    }
}

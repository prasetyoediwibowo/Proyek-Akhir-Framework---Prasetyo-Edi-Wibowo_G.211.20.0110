<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGajiRequest;
use App\Http\Requests\UpdateGajiRequest;
use App\Repositories\GajiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GajiController extends AppBaseController
{
    /** @var GajiRepository $gajiRepository*/
    private $gajiRepository;

    public function __construct(GajiRepository $gajiRepo)
    {
        $this->gajiRepository = $gajiRepo;
    }

    /**
     * Display a listing of the Gaji.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $gajis = $this->gajiRepository->all();

        return view('gajis.index')
            ->with('gajis', $gajis);
    }

    /**
     * Show the form for creating a new Gaji.
     *
     * @return Response
     */
    public function create()
    {
        return view('gajis.create');
    }

    /**
     * Store a newly created Gaji in storage.
     *
     * @param CreateGajiRequest $request
     *
     * @return Response
     */
    public function store(CreateGajiRequest $request)
    {
        $input = $request->all();

        $gaji = $this->gajiRepository->create($input);

        Flash::success('Gaji saved successfully.');

        return redirect(route('gajis.index'));
    }

    /**
     * Display the specified Gaji.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gaji = $this->gajiRepository->find($id);

        if (empty($gaji)) {
            Flash::error('Gaji not found');

            return redirect(route('gajis.index'));
        }

        return view('gajis.show')->with('gaji', $gaji);
    }

    /**
     * Show the form for editing the specified Gaji.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gaji = $this->gajiRepository->find($id);

        if (empty($gaji)) {
            Flash::error('Gaji not found');

            return redirect(route('gajis.index'));
        }

        return view('gajis.edit')->with('gaji', $gaji);
    }

    /**
     * Update the specified Gaji in storage.
     *
     * @param int $id
     * @param UpdateGajiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGajiRequest $request)
    {
        $gaji = $this->gajiRepository->find($id);

        if (empty($gaji)) {
            Flash::error('Gaji not found');

            return redirect(route('gajis.index'));
        }

        $gaji = $this->gajiRepository->update($request->all(), $id);

        Flash::success('Gaji updated successfully.');

        return redirect(route('gajis.index'));
    }

    /**
     * Remove the specified Gaji from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gaji = $this->gajiRepository->find($id);

        if (empty($gaji)) {
            Flash::error('Gaji not found');

            return redirect(route('gajis.index'));
        }

        $this->gajiRepository->delete($id);

        Flash::success('Gaji deleted successfully.');

        return redirect(route('gajis.index'));
    }
}

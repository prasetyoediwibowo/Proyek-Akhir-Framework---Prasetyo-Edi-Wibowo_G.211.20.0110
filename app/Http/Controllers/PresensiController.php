<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePresensiRequest;
use App\Http\Requests\UpdatePresensiRequest;
use App\Repositories\PresensiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PresensiController extends AppBaseController
{
    /** @var PresensiRepository $presensiRepository*/
    private $presensiRepository;

    public function __construct(PresensiRepository $presensiRepo)
    {
        $this->presensiRepository = $presensiRepo;
    }

    /**
     * Display a listing of the Presensi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $presensis = $this->presensiRepository->all();

        return view('presensis.index')
            ->with('presensis', $presensis);
    }

    /**
     * Show the form for creating a new Presensi.
     *
     * @return Response
     */
    public function create()
    {
        return view('presensis.create');
    }

    /**
     * Store a newly created Presensi in storage.
     *
     * @param CreatePresensiRequest $request
     *
     * @return Response
     */
    public function store(CreatePresensiRequest $request)
    {
        $input = $request->all();

        $presensi = $this->presensiRepository->create($input);

        Flash::success('Presensi saved successfully.');

        return redirect(route('presensis.index'));
    }

    /**
     * Display the specified Presensi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $presensi = $this->presensiRepository->find($id);

        if (empty($presensi)) {
            Flash::error('Presensi not found');

            return redirect(route('presensis.index'));
        }

        return view('presensis.show')->with('presensi', $presensi);
    }

    /**
     * Show the form for editing the specified Presensi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $presensi = $this->presensiRepository->find($id);

        if (empty($presensi)) {
            Flash::error('Presensi not found');

            return redirect(route('presensis.index'));
        }

        return view('presensis.edit')->with('presensi', $presensi);
    }

    /**
     * Update the specified Presensi in storage.
     *
     * @param int $id
     * @param UpdatePresensiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePresensiRequest $request)
    {
        $presensi = $this->presensiRepository->find($id);

        if (empty($presensi)) {
            Flash::error('Presensi not found');

            return redirect(route('presensis.index'));
        }

        $presensi = $this->presensiRepository->update($request->all(), $id);

        Flash::success('Presensi updated successfully.');

        return redirect(route('presensis.index'));
    }

    /**
     * Remove the specified Presensi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $presensi = $this->presensiRepository->find($id);

        if (empty($presensi)) {
            Flash::error('Presensi not found');

            return redirect(route('presensis.index'));
        }

        $this->presensiRepository->delete($id);

        Flash::success('Presensi deleted successfully.');

        return redirect(route('presensis.index'));
    }
}

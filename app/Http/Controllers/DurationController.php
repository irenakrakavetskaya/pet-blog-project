<?php

namespace App\Http\Controllers;

use App\DataTables\DurationDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDurationRequest;
use App\Http\Requests\UpdateDurationRequest;
use App\Repositories\DurationRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DurationController extends AppBaseController
{
    /** @var  DurationRepository */
    private $durationRepository;

    public function __construct(DurationRepository $durationRepo)
    {
        $this->durationRepository = $durationRepo;
    }

    /**
     * Display a listing of the Duration.
     *
     * @param DurationDataTable $durationDataTable
     * @return Response
     */
    public function index(DurationDataTable $durationDataTable)
    {
        return $durationDataTable->render('durations.index');
    }

    /**
     * Show the form for creating a new Duration.
     *
     * @return Response
     */
    public function create()
    {
        return view('durations.create');
    }

    /**
     * Store a newly created Duration in storage.
     *
     * @param CreateDurationRequest $request
     *
     * @return Response
     */
    public function store(CreateDurationRequest $request)
    {
        $input = $request->all();

        $duration = $this->durationRepository->create($input);

        Flash::success('Duration saved successfully.');

        return redirect(route('durations.index'));
    }

    /**
     * Display the specified Duration.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $duration = $this->durationRepository->findWithoutFail($id);

        if (empty($duration)) {
            Flash::error('Duration not found');

            return redirect(route('durations.index'));
        }

        return view('durations.show')->with('duration', $duration);
    }

    /**
     * Show the form for editing the specified Duration.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $duration = $this->durationRepository->findWithoutFail($id);

        if (empty($duration)) {
            Flash::error('Duration not found');

            return redirect(route('durations.index'));
        }

        return view('durations.edit')->with('duration', $duration);
    }

    /**
     * Update the specified Duration in storage.
     *
     * @param  int              $id
     * @param UpdateDurationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDurationRequest $request)
    {
        $duration = $this->durationRepository->findWithoutFail($id);

        if (empty($duration)) {
            Flash::error('Duration not found');

            return redirect(route('durations.index'));
        }

        $duration = $this->durationRepository->update($request->all(), $id);

        Flash::success('Duration updated successfully.');

        return redirect(route('durations.index'));
    }

    /**
     * Remove the specified Duration from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $duration = $this->durationRepository->findWithoutFail($id);

        if (empty($duration)) {
            Flash::error('Duration not found');

            return redirect(route('durations.index'));
        }

        $this->durationRepository->delete($id);

        Flash::success('Duration deleted successfully.');

        return redirect(route('durations.index'));
    }
}

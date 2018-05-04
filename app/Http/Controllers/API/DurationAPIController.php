<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDurationAPIRequest;
use App\Http\Requests\API\UpdateDurationAPIRequest;
use App\Models\Duration;
use App\Repositories\DurationRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class DurationController
 * @package App\Http\Controllers\API
 */

class DurationAPIController extends AppBaseController
{
    /** @var  DurationRepository */
    private $durationRepository;

    public function __construct(DurationRepository $durationRepo)
    {
        $this->durationRepository = $durationRepo;
    }

    /**
     * Display a listing of the Duration.
     * GET|HEAD /durations
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->durationRepository->pushCriteria(new RequestCriteria($request));
        $this->durationRepository->pushCriteria(new LimitOffsetCriteria($request));
        $durations = $this->durationRepository->all();

        return $this->sendResponse($durations->toArray(), 'Durations retrieved successfully');
    }

    /**
     * Store a newly created Duration in storage.
     * POST /durations
     *
     * @param CreateDurationAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDurationAPIRequest $request)
    {
        $input = $request->all();

        $durations = $this->durationRepository->create($input);

        return $this->sendResponse($durations->toArray(), 'Duration saved successfully');
    }

    /**
     * Display the specified Duration.
     * GET|HEAD /durations/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Duration $duration */
        $duration = $this->durationRepository->findWithoutFail($id);

        if (empty($duration)) {
            return $this->sendError('Duration not found');
        }

        return $this->sendResponse($duration->toArray(), 'Duration retrieved successfully');
    }

    /**
     * Update the specified Duration in storage.
     * PUT/PATCH /durations/{id}
     *
     * @param  int $id
     * @param UpdateDurationAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDurationAPIRequest $request)
    {
        $input = $request->all();

        /** @var Duration $duration */
        $duration = $this->durationRepository->findWithoutFail($id);

        if (empty($duration)) {
            return $this->sendError('Duration not found');
        }

        $duration = $this->durationRepository->update($input, $id);

        return $this->sendResponse($duration->toArray(), 'Duration updated successfully');
    }

    /**
     * Remove the specified Duration from storage.
     * DELETE /durations/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Duration $duration */
        $duration = $this->durationRepository->findWithoutFail($id);

        if (empty($duration)) {
            return $this->sendError('Duration not found');
        }

        $duration->delete();

        return $this->sendResponse($id, 'Duration deleted successfully');
    }
}

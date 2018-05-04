<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateGalleryAPIRequest;
use App\Http\Requests\API\UpdateGalleryAPIRequest;
use App\Models\Gallery;
use App\Repositories\GalleryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class GalleryController
 * @package App\Http\Controllers\API
 */

class GalleryAPIController extends AppBaseController
{
    /** @var  GalleryRepository */
    private $galleryRepository;

    public function __construct(GalleryRepository $galleryRepo)
    {
        $this->galleryRepository = $galleryRepo;
    }

    /**
     * Display a listing of the Gallery.
     * GET|HEAD /galleries
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->galleryRepository->pushCriteria(new RequestCriteria($request));
        $this->galleryRepository->pushCriteria(new LimitOffsetCriteria($request));
        $galleries = $this->galleryRepository->all();

        return $this->sendResponse($galleries->toArray(), 'Galleries retrieved successfully');
    }

    /**
     * Store a newly created Gallery in storage.
     * POST /galleries
     *
     * @param CreateGalleryAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateGalleryAPIRequest $request)
    {
        $input = $request->all();

        $galleries = $this->galleryRepository->create($input);

        return $this->sendResponse($galleries->toArray(), 'Gallery saved successfully');
    }

    /**
     * Display the specified Gallery.
     * GET|HEAD /galleries/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Gallery $gallery */
        $gallery = $this->galleryRepository->findWithoutFail($id);

        if (empty($gallery)) {
            return $this->sendError('Gallery not found');
        }

        return $this->sendResponse($gallery->toArray(), 'Gallery retrieved successfully');
    }

    /**
     * Update the specified Gallery in storage.
     * PUT/PATCH /galleries/{id}
     *
     * @param  int $id
     * @param UpdateGalleryAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGalleryAPIRequest $request)
    {
        $input = $request->all();

        /** @var Gallery $gallery */
        $gallery = $this->galleryRepository->findWithoutFail($id);

        if (empty($gallery)) {
            return $this->sendError('Gallery not found');
        }

        $gallery = $this->galleryRepository->update($input, $id);

        return $this->sendResponse($gallery->toArray(), 'Gallery updated successfully');
    }

    /**
     * Remove the specified Gallery from storage.
     * DELETE /galleries/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Gallery $gallery */
        $gallery = $this->galleryRepository->findWithoutFail($id);

        if (empty($gallery)) {
            return $this->sendError('Gallery not found');
        }

        $gallery->delete();

        return $this->sendResponse($id, 'Gallery deleted successfully');
    }
}

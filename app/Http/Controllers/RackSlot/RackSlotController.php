<?php

namespace App\Http\Controllers\RackSlot;

use App\Http\Controllers\ApiController;
use App\Http\Requests\RackSlot\StoreRackSlotRequest;
use App\Http\Requests\RackSlot\UpdateRackSlotRequest;
use App\Services\RackSlot\RackSlotService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RackSlotController extends ApiController
{
    protected RackSlotService $service;

    /**
     * @param RackSlotService $service
     * @param Request $request
     */
    public function __construct(RackSlotService $service, Request $request)
    {
        $this->service = $service;
        parent::__construct($request);
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        $data = $this->service->dataTable($request);
        return $this->sendSuccess($data, null, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRackSlotRequest $request
     * @return JsonResponse
     */
    public function store(StoreRackSlotRequest $request)
    {
        $data = $this->service->create($request);
        return $this->sendSuccess($data, null, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param String $id
     * @return JsonResponse
     */
    public function show(string $id)
    {
        $datum = $this->service->getById($id);
        return $this->sendSuccess($datum, null, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRackSlotRequest $request
     * @param String $id
     * @return JsonResponse
     */
    public function update(UpdateRackSlotRequest $request, string $id)
    {
        $datum = $this->service->update($id, $request);
        return $this->sendSuccess($datum, null, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param String $id
     * @return JsonResponse
     */
    public function destroy(string $id)
    {
        $datum = $this->service->delete($id);
        return $this->sendSuccess($datum, null, 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Widget;
use Illuminate\Http\Request;
use App\Http\Requests\WidgetRequest;
use App\Http\Resources\Widget as WidgetResource;

class WidgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return WidgetResource::collection(Widget::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\WidgetRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(WidgetRequest $request)
    {
        $widget = Widget::create($request->validated());

        return new WidgetResource($widget);
    }

    /**
     * Display the specified resource.
     *
     * @param Widget $widget
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Widget $widget)
    {
        return new WidgetResource($widget);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param WidgetRequest $request
     * @param Widget        $widget
     *
     * @return \Illuminate\Http\Response
     */
    public function update(WidgetRequest $request, Widget $widget)
    {
        $widget->fill($request->validated())->save();

        return new WidgetResource($widget);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Widget $widget)
    {
        $widget->delete();

        return response()->noContent();
    }
}

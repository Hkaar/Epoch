<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReplyCreateRequest;
use App\Http\Requests\ReplyEditRequest;
use App\Models\Reply;
use App\Traits\Modelor;

class ReplyController extends Controller
{
    use Modelor;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $replies = Reply::paginate(20);

        return view('admin.replies.index', [
            'replies' => $replies,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('admin.replies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ReplyCreateRequest $request)
    {
        $reply = new Reply;
        $reply->fill($request->validated())->save();

        return redirect()->route('admin.replies.index');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show(int $id)
    {
        $reply = Reply::findOrFail($id);

        return view('admin.replies.show', [
            'reply' => $reply,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(int $id)
    {
        $reply = Reply::findOrFail($id);

        return view('admin.replies.show', [
            'reply' => $reply,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ReplyEditRequest $request, int $id)
    {
        $reply = Reply::findOrFail($id);

        $this->updateModel($reply, $request->validated());
        $reply->save();

        return redirect()->route('admin.replies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response|\Illuminate\Contracts\Routing\ResponseFactory
     */
    public function destroy(int $id)
    {
        $reply = Reply::findOrFail($id);
        $reply->delete();

        return response(null);
    }
}

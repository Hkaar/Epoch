<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentCreateRequest;
use App\Http\Requests\CommentEditRequest;
use App\Models\Comment;
use App\Traits\Modelor;

class CommentController extends Controller
{
    use Modelor;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $comments = Comment::paginate(20);

        return view('admin.comments.index', [
            'comments' => $comments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('admin.comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CommentCreateRequest $request)
    {
        $comment = new Comment;
        $comment->fill($request->validated())->save();

        return redirect()->route('admin.comments.index');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show(int $id)
    {
        $comment = Comment::findOrFail($id);

        return view('admin.comments.show', [
            'comment' => $comment,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(int $id)
    {
        $comment = Comment::findOrFail($id);

        return view('admin.comments.edit', [
            'comment' => $comment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CommentEditRequest $request, int $id)
    {
        $comment = Comment::findOrFail($id);

        $this->updateModel($comment, $request->validated());
        $comment->save();

        return redirect()->route('admin.comments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response|\Illuminate\Contracts\Routing\ResponseFactory
     */
    public function destroy(int $id)
    {
        $comment = Comment::findOrFail($id);

        $comment->replies()->delete();
        $comment->delete();

        return response(null);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController
{
    /**
     * Method that returns the index article page containing all the articles.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('articles.index', [
            'title' => 'Articles',
            'articles' => Article::latest()->get()]);
    }

    /**
     * Function that returns the article page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Article $article)
    {
        return view('/articles.show', [
            'title' => 'Article - ' . $article->title,
            'article' => $article
        ]);
    }

    /**
     * Function that calls a view with a create form
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('/articles.create', [
            'title' => 'Create Article'
        ]);
    }

    /**
     * Function that stores data in the database
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        Article::create($this->validateArticle($request));

        return redirect(route('articles.index'));
    }

    /**
     * Function that retrieves article data out of the database
     *
     * @param Article $article
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Article $article)
    {
        return view('articles.edit', [
            'title' => 'Edit Article',
            'article' => $article
        ]);
    }

    /**
     * Function that stores updated data in the database
     *
     * @param Article $article
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Article $article)
    {
        $article->update($this->validateArticle($request));

        return redirect(route('articles.show', $article));
    }

    /**
     * Function that deletes articles from the database
     *
     * @param Article $article
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(Article $article)
    {
        $article->delete();

        return redirect('/articles');
    }

    /**
     * @return array
     */
    public function validateArticle(Request $request): array
    {
        return $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}

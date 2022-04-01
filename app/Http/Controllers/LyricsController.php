<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LyricsStoreRequest;
use Illuminate\Contracts\View\View;
use Illuminate\View\Factory as ViewFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class LyricsController extends Controller
{
    public function __construct(
        private ViewFactory $viewFactory,
        private Redirector $redirector
    ) {
    }

    /**
     * フォーム画面を表示
     *
     * @return View
     */
    public function index(): View
    {
        return $this->viewFactory->make('form');
    }

    /**
     * 歌詞をSlackへ投稿
     *
     * @param LyricsStoreRequest $request
     * @return RedirectResponse
     */
    public function store(LyricsStoreRequest $request): RedirectResponse
    {
        return $this->redirector->route('completed');
    }

    /**
     * 投稿完了画面を表示
     *
     * @return View
     */
    public function completed(): View
    {
        return $this->viewFactory->make('completed');
    }
}

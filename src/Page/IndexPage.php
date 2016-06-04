<?php

/**
 * The MIT License
 *
 * Copyright 2016 Coding Matters, Inc.
 * Author  Gab Amba <gamba@gabbydgab.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace Academiae\Faculty\Page;

use CodingMatters\Kernel\Page\AbstractPage;
use Zend\Expressive\Template\TemplateRendererInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ResponseInterface;

final class IndexPage extends AbstractPage
{
    public function __construct(RouterInterface $router, TemplateRendererInterface $template = null)
    {
        parent::__construct($router, $template);
    }

    public function dispatch(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        return new HtmlResponse($this->template->render("faculty::index", $this->data));
    }
}

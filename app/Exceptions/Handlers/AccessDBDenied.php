<?php

namespace App\Exceptions\Handlers;

use App\Contracts\HttpExceptionHandler;
use App\Redirections\ToInstall;
use Illuminate\Database\QueryException as QueryException;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface as HttpException;
use Throwable;

/**
 * Class AccessDBDenied.
 *
 * If access to the DB is denied, we need to run the installation.
 */
class AccessDBDenied implements HttpExceptionHandler
{
	/**
	 * {@inheritDoc}
	 */
	public function check(HttpException $e): bool
	{
		do {
			if ($e instanceof QueryException && str_contains($e->getMessage(), 'Access denied')) {
				return true;
			}
		} while ($e = $e->getPrevious());

		return false;
	}

	/**
	 * {@inheritDoc}
	 */
	public function renderHttpException(SymfonyResponse $defaultResponse, HttpException $e): SymfonyResponse
	{
		try {
			$redirectResponse = ToInstall::go();
			$contentType = $defaultResponse->headers->get('Content-Type');
			if (!empty($contentType)) {
				$redirectResponse->headers->set('Content-Type', $contentType);
				$redirectResponse->setContent($defaultResponse->getContent());
			}

			return $redirectResponse;
		} catch (Throwable) {
			return $defaultResponse;
		}
	}
}

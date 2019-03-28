<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception $exception
     * @return void
     * @throws Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Exception $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {

        if ($this->isHttpException($exception)) {
            switch ($exception->getStatusCode()) {

                // not authorized
                case '403':
                    return response()->json([
                        'code' => 403,
                        'message' => 'Access not authorized',
                    ], 403);
                    break;

                // not found
                case '404':
                    return response()->json([
                        'code' => 404,
                        'message' => 'Route not found',
                    ], 404);
                    break;
                // method not allowed
                case '405':
                    return response()->json([
                        'code' => 405,
                        'message' => 'Method not allowed',
                    ], 405);
                    break;
                // internal error
                case '500':
                    return response()->json([
                        'code' => 500,
                        'message' => 'Internal server Error',
                    ], 500);
                    break;
                    break;

                default:
                    return $this->renderHttpException($exception);
                    break;
            }
        }

        // return parent::render($request, $exception);

        return response()->json([
            'code' => 401,
            'message' => 'Unauthenticated, Please login and request an API Token.',
        ], 401);

    }

}

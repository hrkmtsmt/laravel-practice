<?php
    declare(strict_types=1);

    namespace App\Http\Responders\Users;

    use Illuminate\Http\Response;
    use Symfony\Component\HttpFoundation\JsonResponse;

    class GetResponder
    {
        public function response($data): JsonResponse
        {
            if (!empty($data)) {
                $data = [
                    'status' => Response::HTTP_OK,
                    'data' => $data
                ];
            } else {
                $data = [
                    'status' => Response::HTTP_NOT_FOUND,
                    'data' => []
                ];
            }
            return response()->json($data);
        }
    }
?>
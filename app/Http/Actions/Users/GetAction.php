<?php
    declare(strict_types=1);

    namespace App\Http\Actions\Users;

    use Illuminate\Http\Request;
    use Symfony\Component\HttpFoundation\JsonResponse;
    use App\Http\Controllers\Controller;

    use App\Domain\Users\GetDomain as Domain;
    use App\Http\Responders\Users\GetResponder as Responder;

    class GetAction extends Controller
    {
        protected $Domain;
        protected $Responder;

        public function __construct(Domain $domain, Responder $responder)
        {
            $this->Domain = $domain;
            $this->Responder = $responder;
        }

        public function __invoke(Request $request): JsonResponse
        {
            return $this->Responder->response(
                $this->Domain->get()
            );
        }
    }
?>
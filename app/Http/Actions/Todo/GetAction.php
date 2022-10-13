<?php
    declare(strict_types=1);

	namespace App\Http\Actions\Todo;

	use Illuminate\Http\Request;
	use Illuminate\Http\Response;
	use App\Http\Controllers\Controller;
	use App\Domain\Todo\GetDomain as Domain;
	use App\Http\Responders\Todo\GetResponder as Responder;

	class GetAction extends Controller
	{
		protected $Domain;
		protected $Responder;

		public function __construct(
			Domain $Domain,
			Responder $Responder
		)
		{
            $this->Domain = $Domain;
            $this->Responder = $Responder;
		}

        public function __invoke(Request $request): Response
        {
            return $this->Responder->response(
                $this->Domain->get()
            );
        }
	}
?>
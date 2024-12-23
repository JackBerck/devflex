<?php

namespace JackBerck\Ambatuflexing\Middleware {

    require_once __DIR__ . '/../Helper/helper.php';

    use PHPUnit\Framework\TestCase;
    use JackBerck\Ambatuflexing\Config\Database;
    use JackBerck\Ambatuflexing\Domain\Session;
    use JackBerck\Ambatuflexing\Domain\User;
    use JackBerck\Ambatuflexing\Repository\SessionRepository;
    use JackBerck\Ambatuflexing\Repository\UserRepository;
    use JackBerck\Ambatuflexing\Service\SessionService;

    class MustNotLoginMiddlewareTest extends TestCase
    {

        private MustNotLoginMiddleware $middleware;
        private UserRepository $userRepository;
        private SessionRepository $sessionRepository;

        protected function setUp(): void
        {
            $this->middleware = new MustNotLoginMiddleware();
            putenv("mode=test");

            $this->userRepository = new UserRepository(Database::getConnection());
            $this->sessionRepository = new SessionRepository(Database::getConnection());

            $this->sessionRepository->deleteAll();
            $this->userRepository->deleteAll();
        }

        public function testBeforeGuest()
        {
            $this->middleware->before();
            $this->expectOutputString("");
        }

        public function testBeforeLoginUser()
        {
            $user = new User();
            $user->id = "eko";
            $user->name = "Eko";
            $user->password = "rahasia";
            $this->userRepository->save($user);

            $session = new Session();
            $session->id = uniqid();
            $session->userId = $user->id;
            $this->sessionRepository->save($session);

            $_COOKIE[SessionService::$COOKIE_NAME] = $session->id;

            $this->middleware->before();
            $this->expectOutputRegex("[Location: /]");
        }
    }
}

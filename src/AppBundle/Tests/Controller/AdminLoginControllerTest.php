<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AdminLoginControllerTest extends WebTestCase
{
    /**
     * @covers \AppBundle\Controller\AdminLoginController::loginAction
     * @dataProvider usernamePasswordProvider
     */
    public function testLoginAction($username, $password, $expectedStatusCode, $expectedTargetUrl)
    {
        $client = static::createClient();

        $session = $client->getContainer()->get("session");
        $client->getCookieJar()->set(new Cookie($session->getName(), $session->getId()));

        $client->request("post","/thelogingiant/login",array("_username"=>$username,"_password"=>$password));

        /** @var RedirectResponse $response */
        $response = $client->getResponse();

        $this->assertEquals($expectedStatusCode, $response->getStatusCode());
        $this->assertEquals($expectedTargetUrl, $response->getTargetUrl());
    }

    public function usernamePasswordProvider()
    {
        return [
            "Correct username/password" => [
                "test1",
                "Test12345",
                302,
                "http://localhost/"
            ],
            "Wrong username/password" => [
                "test1",
                "Hallo",
                302,
                "http://localhost/thelogingiant/login"
            ],
            "Empty credentials" => [
                "",
                "",
                302,
                "http://localhost/thelogingiant/login"
            ]
        ];
    }
}

<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BackEndTourConrollerControllerTest extends WebTestCase
{
    public function testTourInsert()
    {
        $client = static::createClient([ ], [ "PHP_AUTH_USER" => "test1", "PHP_AUTH_PW" => "Test12345" ]);

        $crawler = $client->request('GET', '/giantcontent/tour/insert');

        $this->assertEquals(
            1,
            $crawler->filter("#tour_content_insert_ticketLink")->count()
        );
    }
}

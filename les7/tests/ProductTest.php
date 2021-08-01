<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductTest extends WebTestCase
{
    public function testProduct1(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/product/1');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h2', 'Футболка');
    }

    public function testProduct10(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/product/10');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h2', 'Акционный каталог');
    }

    public function testCategory2(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/category/2');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h2', 'Женская одежда');
    }

    public function testCategory10(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/category/10');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h2', 'Акционный каталог');
    }
}

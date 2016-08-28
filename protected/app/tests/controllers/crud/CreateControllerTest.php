<?php

use Model\User;

class CreateControllerTest extends \TestCase {

    private static $setupDatabase = true;

    /**
     * Default preparation for each test
     *
     */
    public function setUp()
    {
        parent::setUp();
     
        if(self::$setupDatabase) {
            $this->setupDatabase();
        }

        \Mail::pretend(true);

        // Chart::boot();
    }

    /**
     * Migrates the database and set the mailer to 'pretend'.
     * This will cause the tests to run quickly.
     *
     */
    private function setupDatabase()
    {
        fwrite(STDERR, print_r("\n\n--- Initializing Migration and Seeding DB ---\n", TRUE));
        
        Artisan::call('migrate');
        $this->seed();

        self::$setupDatabase = false;

        fwrite(STDERR, print_r("--- End Migration and Seeding DB ---\n\n", TRUE));
    }

    //begin test
    //test koneksi ke route
    public function testConnectionRoute()
    {
        $crawler = $this->client->request('GET', 'crud/create');

        $this->assertTrue($this->client->getResponse()->isOk());
    }

    //test view pada route crud/create
    public function testCreateUser()
    {
        $crawler = $this->client->request('GET', 'crud/create');
        
        $this->assertCount(1, $crawler->filter('td:contains("Name")'));
        $this->assertCount(1, $crawler->filter('td:contains("Username")'));
        $this->assertCount(1, $crawler->filter('td:contains("Email")'));
        $this->assertCount(1, $crawler->filter('td:contains("Password")'));
    }

    //test jika berhasil menyimpan database
    public function testCreatePostUserSuccess()
    {
        $input = array(
            'name' => 'test1',
            'username' => 'Username_test',
            'email' => 'test1@mail.com',
            'password' => 'xxxxxx',
        );
        // dd($input);
        $this->call('POST', 'crud/create', $input);

        $check = User::where('name', 'test1')->first();
        $this->assertEquals('test1', $check['name']);
    }

    //test jika gagal menyimpan database karena password kurag dari 6 char
    public function testCreatePostUserFail()
    {
        $input = array(
            'name' => 'testFail',
            'username' => 'Username_test_fail',
            'email' => 'testfail@mail.com',
            'password' => 'xxx',
        );
        // dd($input);
        $this->call('POST', 'crud/create', $input);

        $check = User::where('name', 'testFail')->first();
        $this->assertNotEquals('testFail', $check['name']);
    }
}
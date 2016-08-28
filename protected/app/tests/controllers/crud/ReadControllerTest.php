<?php

class ReadControllerTest extends \TestCase {

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
    
    public function testConnectionRoute()
    {
        $crawler = $this->client->request('GET', 'crud/create');

        $this->assertTrue($this->client->getResponse()->isOk());
    }

}
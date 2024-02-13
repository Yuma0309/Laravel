<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Person;

class MyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'my:cmd';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is my first command!';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $choice = ['id', 'name', 'age'];
        echo "find Person!\n";
        $field = $this->choice("select field:", $choice, 1);
        $value = $this->ask('input value:');

        $p = Person::where($field, $value)->first();

        if ($p != null)
        {
            echo 'id = ' . $p->id . "\n";
            echo $p->all_data;
        }
        else
        {
            echo "can't find Person.";
        }
    }
}

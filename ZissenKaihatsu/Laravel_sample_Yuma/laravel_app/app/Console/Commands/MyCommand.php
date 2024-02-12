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
        $stones = $this->option('stones');
        $max = $this->option('max');
        echo "*** start ***\n";
        while($stones > 0)
        {
            echo ("stones: $stones\n");
            $ask = $this->ask("you:");
            $you = (int)$ask;
            $you = $you > 0 && $you <= $max ? $you : 1;
            $stones -= $you;
            echo ("stones: $stones\n");
            if ($stones <= 0)
            {
                echo "you lose...\n";
                break;
            }
            $me = ($stones - 1) % (1 + $max);
            $me = $me == 0 ? 1 : $me;
            $stones -= $me;
            echo "me: $me\n";
            if ($stones <= 0)
            {
                echo "you win!!\n";
                break;
            }
        }
        echo "--- end ---\n";
    }
}

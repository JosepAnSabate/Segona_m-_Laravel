<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;


class MakeUserRevisor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'segmano:makeUserRevisor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Asigna el rol de revisor a un usuari';

    /**
     * Create a new command instance.
     *
     * @return void
     */
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
        
    $email = $this->ask("Introduir el correu de l'usuari");
    $user = User::where('email', $email)->first();
    if(!$user){
        $this->error("L'usuari no es troba");
        return;
    }
    $user->is_revisor = true;
    $user->save();
    $this->info("L'usuari $user->name ja és un revisor");
    }
}

<?php

namespace App\Console\Commands;

use App\Mail\informerMail;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class statusUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:status-update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {  
       // $timeNow=Carbon::now()->format('Y-m-d');
           $centers=DB::table('centers')->get();
           
           foreach($centers as $center){
           
            $AllCenterNotVaccinated= DB::table('users')->where([
                ['status','=','not vaccinated'],
                ['center_id','=',$center->id]
               ])->take(2)->get();
           
            foreach ($AllCenterNotVaccinated as $PerCenterNotVaccinated){
                    
                    Mail::to($PerCenterNotVaccinated->email)->send(new informerMail($PerCenterNotVaccinated->userName));
                    DB::table('users')->where('email',$PerCenterNotVaccinated->email)->update(['status'=>'scheduled']);
            }
           }
         
      
    

    

    }
}

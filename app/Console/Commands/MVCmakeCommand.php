<?php

namespace App\Console\Commands;
use File;
use Schema;
use Illuminate\Console\Command;

class MVCmakeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:mvc {name} {--table=default} {--route=web}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    private $myname="";
    private $mytable="";
    public function handle()
    {
        //
        
         $this->myname=$this->argument('name');
         $this->mytable=($this->option('table')=='default')?$myname:$this->option('table');
        
        $modelstub=__DIR__."/Stubs/model.stub";
        $Controllerstub=__DIR__."/Stubs/controller.stub";

        $model=File::get($modelstub);
        $controller=File::get($Controllerstub);


        $myname=$this->argument('name');
     
        $modelpath=app_path()."/$myname.php";
        $controllerpath=app_path('Http')."/Controllers/$myname"."Controller.php";

        File::put($modelpath,$this->ReplaceforModel($model));
        File::put($controllerpath,$this->ReplaceController($controller));

        File::append(base_path('routes')."/".$this->option('route').".php","\nRoute::Resource('$myname','$myname"."Controller');");
        echo base_path('routes').$this->option('route').".php";
        
    }
    
    public function ReplaceforModel($model){
        $tmp= Schema::getColumnListing($this->mytable);
        $model=str_replace("DummyTable",$this->mytable,$model);
        $model=str_replace("DummyClass",$this->myname,$model);
        $model=str_replace("firstcolumn",$tmp[0],$model);
        return $model;
    }
    public function ReplaceController($controller){
        $tmp= Schema::getColumnListing($this->mytable);
        $attr="";
    
        for($i=1;$i<sizeof($tmp);$i++){
           
            $attr=$attr."\$temp->$tmp[$i]=\$request->$tmp[$i];\n\t\t";
        }
        $controller=str_replace("DummyModel",$this->myname,$controller);
        $controller=str_replace("DummyInsert",$attr,$controller);
        return $controller;
    }
}

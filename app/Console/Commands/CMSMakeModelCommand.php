<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class CMSMakeModelCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:cms-model';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create CMS Model for project';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'CMS Model';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return 'App/Console/Commands/Stubs/Models/model.stub';
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (parent::handle() === false && ! $this->option('force')) {
            return false;
        }

        if ($this->option('all')) {
            $this->input->setOption('repository', true);
            $this->input->setOption('service', true);
            $this->input->setOption('controller', true);
        }

        if ($this->option('repository')) {
            $this->createRepository();
        }

        if ($this->option('service')) {
            $this->createService();
        }

        if ($this->option('controller')) {
            $this->createController();
        }

        if ($this->option('migration')) {
            $this->createMigration();
        }
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['all', 'a', InputOption::VALUE_NONE, 'Generate a controller, repository, and service for the model'],

            ['controller', 'c', InputOption::VALUE_NONE, 'Create a new controller for the model'],

            ['repository', 'r', InputOption::VALUE_NONE, 'Create a new repository for the model'],

            ['service', 's', InputOption::VALUE_NONE, 'Create a new service for the model'],

            ['force', null, InputOption::VALUE_NONE, 'Create the class even if the model already exists'],

            ['migration', 'm', InputOption::VALUE_NONE, 'Create a new migration file for the model'],
        ];
    }

    /**
     * Create a model repository for the model.
     *
     * @return void
     */
    protected function createRepository()
    {
        $model = Str::studly(class_basename($this->getNameInput());

        $this->call('make:cms-repository', [
            'name' => "{$model}Repository",
            'model' => $model,
        ]);
    }

    /**
     * Create a model service for the model.
     *
     * @return void
     */
    protected function createService()
    {
        $model = Str::studly(class_basename($this->getNameInput());

        $this->call('make:cms-service', [
            'name' => "{$model}Service",
            'model' => $model,
        ]);
    }

    /**
     * Create a controller for the model.
     *
     * @return void
     */
    protected function createController()
    {
        $controller = Str::studly(class_basename($this->argument('name')));

        $modelName = $this->qualifyClass($this->getNameInput());

        $this->call('make:cms-controller', [
            'name' => "{$controller}Controller",
            'model' => $modelName,
        ]);
    }

    /**
     * Create a migration file for the model.
     *
     * @return void
     */
    protected function createMigration()
    {
        $table = Str::snake(Str::pluralStudly(class_basename($this->argument('name'))));

        if ($this->option('pivot')) {
            $table = Str::singular($table);
        }

        $this->call('make:migration', [
            'name' => "create_{$table}_table",
            '--create' => $table,
        ]);
    }
}

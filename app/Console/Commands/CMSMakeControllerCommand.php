<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputArgument;

class CMSMakeControllerCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:cms-controller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create CMS Controller for project';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'CMS Controller';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return 'App/Console/Commands/Stubs/Controllers/controller.stub';
    }

    /**
     * Build the class with the given name.
     *
     * @param  string  $name
     * @return string
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());

        return $this->replaceCustomName($stub, $name)->replaceClass($stub, $name);
    }

    /**
     * Replace the namespace for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return $this
     */
    protected function replaceCustomName(&$stub, $name)
    {
        $stub = str_replace(
            ['DummyModel', 'DummyVariablePlural', 'DummyVariable'],
            [$this->getModelInput($name), $this->getVariablePluralName(), $this->getVariableName()],
            $stub
        );
 
        return $this;
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the class'],
            ['model', InputArgument::REQUIRED, 'The model of the repository'],
        ];
    }

    /**
     * Get the desired model name from the input.
     *
     * @return string
     */
    protected function getModelInput()
    {
        return trim($this->argument('model'));
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return 'App\Http\Controllers';
    }

    /**
     * Get the plural class name from the input.
     *
     * @return string
     */
    protected function getVariablePluralName()
    {
        return Str::plural($this->getVariableName());
    }

    /**
     * Get the class name from the input.
     *
     * @return string
     */
    protected function getVariableName()
    {
        return strtolower($this->argument('name'));
    }
}

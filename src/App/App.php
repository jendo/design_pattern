<?php
namespace App;

use App\DesignPattern\Creational\Builder\EmployedMaleBuilder;
use App\DesignPattern\Creational\Builder\PersonDirector;
use App\DesignPattern\Creational\Builder\UnemployedFemaleBuilder;
use App\DesignPattern\Creational\Factory\AbstractFactory\DataOutputTypeFactory;
use App\DesignPattern\Creational\Factory\AbstractFactory\WebOutputTypeFactory;
use App\DesignPattern\Creational\Factory\FactoryMethod\FarmAnimalFactory;
use App\DesignPattern\Creational\Factory\FactoryMethod\PetAnimalFactory;
use App\DesignPattern\Creational\Factory\FactoryMethod\Pig;
use App\DesignPattern\Creational\Factory\SimpleFactory\AnimalFactory;
use App\DesignPattern\Creational\Factory\SimpleFactory\Dog;
use App\DesignPattern\Creational\Prototype\PHPBookPrototype;
use App\DesignPattern\Creational\Prototype\SQLBookPrototype;
use App\DesignPattern\Creational\Singleton\Database;
use App\DesignPattern\Structural\Adapter\PDFTemplateAdapter;
use App\DesignPattern\Structural\Adapter\RenderPDFTemplate;
use App\DesignPattern\Structural\Decorator\AirConditionCarFeatureDecorator;
use App\DesignPattern\Structural\Decorator\CarBrands;
use App\DesignPattern\Structural\Decorator\CarFactory;
use InvalidArgumentException;

class App
{
    /**
     * @var PersonDirector
     */
    private $personDirector;

    /**
     * @var EmployedMaleBuilder
     */
    private $employedMaleBuilder;

    /**
     * @var UnemployedFemaleBuilder
     */
    private $unemployedFemaleBuilder;

    /**
     * @var CarFactory
     */
    private $carFactory;

    /**
     * @param PersonDirector $personDirector
     * @param EmployedMaleBuilder $employedMaleBuilder
     * @param UnemployedFemaleBuilder $unemployedFemaleBuilder
     * @param CarFactory $carFactory
     */
    public function __construct(
        PersonDirector $personDirector,
        EmployedMaleBuilder $employedMaleBuilder,
        UnemployedFemaleBuilder $unemployedFemaleBuilder,
        CarFactory $carFactory
    )
    {
        $this->personDirector = $personDirector;
        $this->employedMaleBuilder = $employedMaleBuilder;
        $this->unemployedFemaleBuilder = $unemployedFemaleBuilder;
        $this->carFactory = $carFactory;
    }

    /**
     *
     */
    public function run()
    {
        // SINGLETON
        $db = Database::getInstance();
        $db2 = Database::getInstance();
        var_dump($db === $db2);

        // simple factory
        try {
            $dog = AnimalFactory::factory(Dog::SPECIES);
            var_dump($dog->getSpecies());

            $dummyAnimal = AnimalFactory::factory('dummyAnimal');
        } catch (InvalidArgumentException $e) {
            var_dump($e->getMessage());
        }

        // factory method
        try {
            $pig = FarmAnimalFactory::factory(Pig::SPECIES);
            var_dump($pig->getSpecies());

            $dog = PetAnimalFactory::factory(Dog::SPECIES);
            var_dump($dog->getSpecies());

            $dummyAnimal = PetAnimalFactory::factory('dummyPetAnimal');
        } catch (InvalidArgumentException $e) {
            var_dump($e->getMessage());
        }

        // abstract factory
        $webOutputFactory = new WebOutputTypeFactory();
        $dataOutputFactory = new DataOutputTypeFactory();

        var_dump($webOutputFactory->prettyOutput()->getPrettyOutput());
        var_dump($webOutputFactory->uglyOutput()->getUglyOutput());

        var_dump($dataOutputFactory->prettyOutput()->getPrettyOutput());
        var_dump($dataOutputFactory->uglyOutput()->getUglyOutput());

        // BUILDER - director class will build person with gender and status of employment
        $employedMalePerson = $this->personDirector->build($this->employedMaleBuilder);
        $unemployedFemalePerson = $this->personDirector->build($this->unemployedFemaleBuilder);
        var_dump($employedMalePerson, $unemployedFemalePerson);

        // PROTOTYPE - create object by cloning
        // the time taken to clone an object is quicker than it would be to initialise a new object
        // because constructor is not re-executed
        $phpProto = new PHPBookPrototype();
        $sqlProto = new SQLBookPrototype();

        $book1 = clone $phpProto;
        $book1->setTitle('PHP book 1');

        $book2 = clone $phpProto;
        $book2->setTitle('PHP book 2');

        var_dump($book1, $book2);
        
        // ADAPTER - incompatible interfaces to work together
        $pdfTemplate = new RenderPDFTemplate();
        $pdfTemplateAdapter = new PDFTemplateAdapter($pdfTemplate);
        var_dump($pdfTemplateAdapter->renderHeader());

        //DECORATOR - extend an existing classes functionality without modifying existing classes
        $skodaOctaviaCar = $this->carFactory->create(CarBrands::SKODA_OCTAVIA);
        $skodaOctaviaCarWithAC =  new AirConditionCarFeatureDecorator($skodaOctaviaCar);

        var_dump($skodaOctaviaCar->getEquipments(), $skodaOctaviaCarWithAC->getEquipments());
    }
}

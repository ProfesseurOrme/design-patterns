<?php
	require "vendor/autoload.php";

	use Pattern\Behavioral\Observer\Article;
	use Pattern\Behavioral\Strategy\APIWriter;
	use Pattern\Behavioral\Strategy\ClientWriter;
	use Pattern\Behavioral\Strategy\DatabaseWriter;
	use Pattern\Behavioral\Strategy\FileWriter;
	use Pattern\Creational\Builder\Vehicle;
	use Pattern\Creational\Builder\VehicleDirector;
	use Pattern\Creational\Builder\Vehicles\BusVehicleBuilder;
	use Pattern\Creational\Builder\Vehicles\CarVehicleBuilder;
	use Pattern\Creational\Builder\Vehicles\MotoVehicleBuilder;
	use Pattern\Creational\Singleton\Singleton;
	use Pattern\Structural\Adapter\Book;
	use Pattern\Structural\Adapter\Ebook;
	use Pattern\Structural\Adapter\EBookAdapter;
	use Pattern\Structural\DependencyInjection\PersonFactory;
	use Pattern\Structural\Fluent\QueryBuilder;
	use Pattern\Creational\Factory\DatabaseFactory;
	use Pattern\Behavioral\Iterator\Car;
	use Pattern\Behavioral\Iterator\CarIterator;
	use Pattern\Behavioral\Observer\ArticleManager;
	use Pattern\Behavioral\Observer\NotifyObserver;
	use Pattern\Behavioral\Observer\UpdateObserver;

?>
<div style="text-align: center">
    <p style="font-size: 1.45rem"><strong style="color: darkslategray">Creational</strong></p>
</div>
<br/>
<p style="font-size: 1.25rem"><strong style="color: red">Singleton </strong> (Get key of an array with unique instance)</p>
<p><strong>Result (db_user) : </strong><?= Singleton::getInstance()->get("db_user") ?></p>
<hr>
<p style="font-size: 1.25rem"><strong style="color: red">Factory </strong> (Manage differents databases with one class instanciation)</p>
<p><strong>MySQL : </strong><?= DatabaseFactory::create("mysql")->query(); ?></p>
<p><strong>Postgre : </strong><?= DatabaseFactory::create("postgre")->query();  ?></p>
<p><strong>SQLite : </strong><?= DatabaseFactory::create("sqlite")->query();  ?></p>
<hr>
<p style="font-size: 1.25rem"><strong style="color: red">Builder </strong> (used to create objects in addition to that it will prepare the object for the application too)</p>
<?php
  $car = (new VehicleDirector(4, "V6", 3))->build(new CarVehicleBuilder(new Vehicle()));
  $bus= (new VehicleDirector(8, "2000cc", 2))->build(new BusVehicleBuilder(new Vehicle()));
  $moto= (new VehicleDirector(2, "49cc", 0))->build(new MotoVehicleBuilder(new Vehicle()));
?>
<p><strong>Car : </strong><?= "Wheels: " . $car->wheels . ", Engine: " . $car->engine . " and Doors: " . $car->doors ?></p>
<p><strong>Bus : </strong><?= "Wheels: ".$bus->wheels.", Engine: ".$bus->engine." and Doors: ".$bus->doors ?></p>
<p><strong>Moto : </strong><?= "Wheels: ".$moto->wheels.", Engine: ".$moto->engine." and Doors: ".$moto->doors ?></p>
<hr>
<br>
<div style="text-align: center">
    <p style="font-size: 1.45rem"><strong style="color: darkslategray">Structural</strong></p>
</div>
<br />
<p style="font-size: 1.25rem"><strong style="color: red">Dependency injection </strong> (Decouple the code while avoiding any interdependence between the different components)</p>
<?php
	$person = new PersonFactory();
?>
<p><strong>Address : </strong><?= $person->createPerson("1", "09.90.90.90.89", "Rue de la paix", "17700")->getAddress()->getFullAddress(); ?></p>
<hr>
<p style="font-size: 1.25rem"><strong style="color: red">Adapter : </strong> (Convert the interface of a class to another interface that the client expects without changing the class itself)
</p>
<?php
	$book = new Book();
	$eBook = new Ebook();

	$eBookAdapter = new EBookAdapter($eBook);
?>
<p><strong>Book : </strong><?= $book->open() . ", " . lcfirst($book->nextPage()) . " and " .lcfirst($book->writeSomething()). "." ?></p>
<p><strong>E-Book (Implement Book Interface with Adapter) : </strong> <?= $eBookAdapter->open() . ", ".lcfirst($eBookAdapter->nextPage()) . " and " . lcfirst($eBookAdapter->writeSomething()); ?> </p>
<hr>
<p style="font-size: 1.25rem"><strong style="color: red">Fluent </strong> (Allows you to write code in a more readable way and to be able to chain methods)</p>
<?php
	$query = new QueryBuilder();

	$user = $query->select('id', 'titre', 'contenu')->from('articles', 'Post')->where('Post.category_id = 1')->where('Post.date > NOW()')
?>
<p><strong>Query: </strong><?= $user ?></p>
<hr>

<br>
<div style="text-align: center">
    <p style="font-size: 1.45rem"><strong style="color: darkslategray">Behavioral</strong></p>
</div>
<br />
<p style="font-size: 1.25rem"><strong style="color: red">Observer : </strong> (React to specific events and trigger one or more actions)
</p>
<?php
	$notify = new NotifyObserver();
	$update = new UpdateObserver();

	$articleManager = new ArticleManager();
	$articleManager->attach($notify);
	$articleManager->attach($update);

	$article = new Article();

	$article->setTitle("Salut c'est un titre");

	$articleManager->create($article);
?>
<hr>
<p style="font-size: 1.25rem"><strong style="color: red">Iterator : </strong> (Enables browsing of a data structure without exposing internal details)</p>
<?php
  $carIterator = new CarIterator();

  $car1 = new Car("Peugeot", "206");
  $car2 = new Car("Citroën", "C4");
  $car3 = new Car("BMW", "Model A");

  $carIterator->addCar($car1);
  $carIterator->addCar($car2);
  $carIterator->addCar($car3);

  $cars= [];

  foreach ($carIterator as $car) {
      $cars[] = $car->getCar();
  }

  foreach ($cars as $car) {
      echo "<p>${car}</p>";
  }
?>
<hr>
<p style="font-size: 1.25rem"><strong style="color: red">Strategy : </strong> (Allows you to select code on the fly according to your needs by encapsulating the algorithms)
</p>
<?php
$api = new ClientWriter(new APIWriter());

$database = new ClientWriter(new DatabaseWriter());

$file = new ClientWriter(new FileWriter());
?>
<p><strong>API : </strong><?= $api->write("API"); ?></p>
<p><strong>Database : </strong><?= $database->write("database");  ?></p>
<p><strong>File : </strong><?= $file->write("file");  ?></p>
<hr>
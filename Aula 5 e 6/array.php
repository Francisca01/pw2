	<?php 
	class Book{
		//Propriedades
		public $title;
		public $author;
		public $price;

		//Metodos
		function getTitle(){
			return $this ->title;
		}
		function getAuthor(){
			return $this ->author;
		}
		function getPrice(){
			return $this ->price;
		}
	}
	$harryPotter = new Book;
	$harryPotter ->title = "Harry Potter";
	$harryPotter ->author = "J. K. Rowling";
	$harryPotter ->price = 20.79;

	 ?>
	

<!DOCTYPE html>
<html>
<head>
	<title> PHP Objetos</title>
</head>
<body>
<h1><?php echo $harryPotter->getTitle(); ?></h1>
Author; <?php echo $harryPotter ->getAuthor(); ?><br>
<strong> <?php echo $harryPotter ->getPrice();?></strong>

</body>
</html>
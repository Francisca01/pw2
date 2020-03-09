	<?php 
	class Book{
		//Propriedades
		private $title;
		private $author;
		private $price;

		//contrutor
		function __construct($title, $author, $price){
			$this->title = $title;
			$this->author = $author;
			$this->price = $price;
		}

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

	//Instace some books onjects
	$livro1 = new Book("Harry Potter", "J. K. Rowling", 20.79);
	$livro2 = new Book("Biblia", "Deus", 99.79);
	$livro3 = new Book("MOMO", "Thomas Man", 20.79);
	$livro4 = new Book("Ensaio sobre a cegueira", "Jose Saramago", 20.79);

	$carrinhoCompras = array($livro1, $livro2, $livro3, $livro4);

	function getTotal($carrinhoCompras){
			$total = 0;
			foreach ($carrinhoCompras as $livro) {
				if ($livro -> getPrice() > 20) {
					array_push(array, var)
				}
				$total += $livro ->getPrice();
			}
			return $total;
	}

	function getTotalDesconto($carrinhoCompras){
			$total = getTotal($carrinhoCompras);


			if ($total >= 20) {
				$total = $total * 0.10;
			}

			return $total;
	}

	?>
	

	<!DOCTYPE html>
	<html>
	<head>
		<title> PHP Objetos</title>
	</head>
	<body>
		<h1>Carrinho de Compras</h1>

		<?php foreach ($carrinhoCompras as $livro) { ?>
			<h2><?php echo $livro->getTitle(); ?></h2>
			Author: <?php echo $livro ->getAuthor(); ?><br>
			<strong> <?php echo $livro ->getPrice();?></strong>€
		<?php } ?>

		<h3>Total: <?php echo getTotal($carrinhoCompras); ?></h3>
		<h3>Livros com desconto: <?php echo getTotalDesconto($carrinhoCompras); ?></h3>

		

	</body>
	</html>
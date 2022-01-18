 <?php
 session_start();
		include('../login-cadastro/conexao.php');
        $name_1=$_POST['char_00']; 
        $user_1= $_SESSION['usuario'];
        
        $_SESSION['char'] =$name_1;


  
try {


  $stmt = $pdo->prepare('INSERT INTO personagem(id, char_nome, char_power, char_user) VALUES(:nome1 , :nome2, :nome3, :nome4)');
  $stmt->execute(array(
    ':nome1' => NULL,
    ':nome2' => $name_1,
    ':nome3' => 0,
    ':nome4' => $user_1));

  echo $stmt->rowCount();
  echo 'new record created successfully';
  header('location: ./key_29.php ') ; 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
   ?>
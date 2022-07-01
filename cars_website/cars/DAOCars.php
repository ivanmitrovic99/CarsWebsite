<?php
require_once '../config/db.php';

class DAOCars {
	private $db;
	
	
	private $SELECTALL = "SELECT * FROM car;";	
	private $SELECTALLWITHLIMIT = "SELECT * FROM car LIMIT 4;";	
    private $SELECTBYID = "SELECT * FROM car WHERE id=?";
	private $SELECTPICTURES = "SELECT * FROM pictures JOIN car ON pictures.car_id = car.pictures_id WHERE car.id = ?;";
	private $SELECTPASSWORD = "SELECT password FROM user WHERE username=?";
	private $INSERTPICS = "INSERT INTO pictures VALUES(?,?,?,?,?,?,?,?,?,?,?);";
	private $INSERTCAR= "INSERT INTO car VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
	private $DELETECAR= "DELETE FROM car WHERE id=?";
	private $UPDATECAR = "UPDATE car SET name=?, manufacturer=?, price=?, age=?, mileage=?, doors_num=?, seats_num=?, motor=?, tank=?, body=?, power=?,color=?, state=?, picture=?,pictures_id=? WHERE id=?";
	public function __construct()
	{
		$this->db = DB::createInstance();
	}

	public function selectAll()
	{
		// 1. nacin-NE RADI
		/*
		$statement = $this->db->prepare("SELECT * FROM osoba ORDER BY idosoba DESC LIMIT :n");
		$statement->execute(array(':n' => $n,));	// NE RADI, ???
		
		$result = $statement->fetchAll();
		return $result;
		*/
		
		// 2. nacin
		
		$statement = $this->db->prepare($this->SELECTALL);
		$statement->execute();
		$result = $statement->fetchAll();
		return $result;
	}

	public function selectLimited()
	{
		// 1. nacin-NE RADI
		/*
		$statement = $this->db->prepare("SELECT * FROM osoba ORDER BY idosoba DESC LIMIT :n");
		$statement->execute(array(':n' => $n,));	// NE RADI, ???
		
		$result = $statement->fetchAll();
		return $result;
		*/
		
		// 2. nacin
		
		$statement = $this->db->prepare($this->SELECTALLWITHLIMIT);
		$statement->execute();
		$result = $statement->fetchAll();
		return $result;
	}
	public function insertPictures($id,$pic1,$pic2,$pic3,$pic4,$pic5,$pic6,$pic7,$pic8,$pic9,$pic10)
	{
		// 1. nacin
		/*
		$statement = $this->db->prepare("INSERT INTO osoba (ime, prezime, JMBG, vremeUpisa) VALUES (:ime, :prezime, :JMBG, CURRENT_TIMESTAMP)");
		$statement->execute(array(':ime'=>$ime, ':prezime'=> $prezime, ':JMBG'=>$JMBG));
		*/
		
		// 2. nacin
		$statement = $this->db->prepare($this->INSERTPICS);
		$statement->bindValue(1, $id);
		$statement->bindValue(2, $pic1);
		$statement->bindValue(3, $pic2);
		$statement->bindValue(4, $pic3);
		$statement->bindValue(5, $pic4);
		$statement->bindValue(6, $pic5);
		$statement->bindValue(7, $pic6);
		$statement->bindValue(8, $pic7);
		$statement->bindValue(9, $pic8);
		$statement->bindValue(10, $pic9);
		$statement->bindValue(11, $pic10);
		if( $statement->execute()){
			return true;
		}
		else {return false;}
       
		
		
		
	}

	public function insertCar($id,$name,$manufacturer,$price,$age,$mileage,$doors_num,$seats_num,$motor,$tank,$body,$power,$color,$state,$picture,$pictures_id){
		$statement = $this->db->prepare($this->INSERTCAR);
		$statement->bindValue(1, $id);
		$statement->bindValue(2, $name);
		$statement->bindValue(3, $manufacturer);
		$statement->bindValue(4, $price);
		$statement->bindValue(5, $age);
		$statement->bindValue(6, $mileage);
		$statement->bindValue(7, $doors_num);
		$statement->bindValue(8, $seats_num);
		$statement->bindValue(9, $motor);
		$statement->bindValue(10, $tank);
		$statement->bindValue(11, $body);
		$statement->bindValue(12, $power);
		$statement->bindValue(13, $color);
		$statement->bindValue(14, $state);
		$statement->bindValue(15, $picture);
		$statement->bindValue(16, $pictures_id);
		if( $statement->execute()){
			return true;
		}
		else {return false;}	
	}

	public function updateCar($name,$manufacturer,$price,$age,$mileage,$doors_num,$seats_num,$motor,$tank,$body,$power,$color,$state,$picture,$pictures_id,$id){
		$statement = $this->db->prepare($this->UPDATECAR);
		
		$statement->bindValue(1, $name);
		$statement->bindValue(2, $manufacturer);
		$statement->bindValue(3, $price);
		$statement->bindValue(4, $age);
		$statement->bindValue(5, $mileage);
		$statement->bindValue(6, $doors_num);
		$statement->bindValue(7, $seats_num);
		$statement->bindValue(8, $motor);
		$statement->bindValue(9, $tank);
		$statement->bindValue(10, $body);
		$statement->bindValue(11, $power);
		$statement->bindValue(12, $color);
		$statement->bindValue(13, $state);
		$statement->bindValue(14, $picture);
		$statement->bindValue(15, $pictures_id);
		$statement->bindValue(16, $id);
		if( $statement->execute()){
			return true;
		}
		else {return false;}	
	}

	public function selectPassword($username)
	{
		// 1. nacin
		/*
		$statement = $this->db->prepare("INSERT INTO osoba (ime, prezime, JMBG, vremeUpisa) VALUES (:ime, :prezime, :JMBG, CURRENT_TIMESTAMP)");
		$statement->execute(array(':ime'=>$ime, ':prezime'=> $prezime, ':JMBG'=>$JMBG));
		*/
		
		// 2. nacin
		$statement = $this->db->prepare($this->SELECTPASSWORD);
		$statement->bindValue(1, $username);

        $statement->execute();
		$result = $statement->fetch();
		return $result;
		
	}


	public function selectCar($id)
	{
		// 1. nacin
		/*
		$statement = $this->db->prepare("INSERT INTO osoba (ime, prezime, JMBG, vremeUpisa) VALUES (:ime, :prezime, :JMBG, CURRENT_TIMESTAMP)");
		$statement->execute(array(':ime'=>$ime, ':prezime'=> $prezime, ':JMBG'=>$JMBG));
		*/
		
		// 2. nacin
		$statement = $this->db->prepare($this->SELECTBYID);
		$statement->bindValue(1, $id);

        $statement->execute();
		$result = $statement->fetch();
		return $result;
		
	}


	public function deleteCar($id)
	{
		// 1. nacin
		/*
		$statement = $this->db->prepare("INSERT INTO osoba (ime, prezime, JMBG, vremeUpisa) VALUES (:ime, :prezime, :JMBG, CURRENT_TIMESTAMP)");
		$statement->execute(array(':ime'=>$ime, ':prezime'=> $prezime, ':JMBG'=>$JMBG));
		*/
		
		// 2. nacin
		$statement = $this->db->prepare($this->DELETECAR);
		$statement->bindValue(1, $id);

        $statement->execute();
		
		
		
	}
    public function selectPictures($id)
	{
		// 1. nacin
		/*
		$statement = $this->db->prepare("INSERT INTO osoba (ime, prezime, JMBG, vremeUpisa) VALUES (:ime, :prezime, :JMBG, CURRENT_TIMESTAMP)");
		$statement->execute(array(':ime'=>$ime, ':prezime'=> $prezime, ':JMBG'=>$JMBG));
		*/
		
		// 2. nacin
		$statement = $this->db->prepare($this->SELECTPICTURES);
		$statement->bindValue(1, $id);

        $statement->execute();
		$result = $statement->fetch();
		return $result;
		
	}
	public function deleteOsoba($idosoba)
	{
		// 1. nacin
		/*
		$statement = $this->db->prepare("DELETE  FROM osoba WHERE idosoba = :idosoba");
		$statement->execute(array(':idosoba' => $idosoba));
		*/
		
		// 2. nacin
		$statement = $this->db->prepare($this->DELETEOSOBA);
		$statement->bindValue(1, $idosoba);
		
		$statement->execute();
	}

	public function getOsobaById($idosoba)
	{
		// 1. nacin
		/*
		$statement = $this->db->prepare("SELECT * FROM osoba WHERE idosoba = :idosoba");
		$statement->execute(array(':idosoba' => $idosoba));
		
		$result = $statement->fetch();
		return $result;
		*/
		
		// 2. nacin
		$statement = $this->db->prepare($this->SELECTBYID);
		$statement->bindValue(1, $idosoba);
		
		$statement->execute();
		
		$result = $statement->fetch();
		return $result;
	}
}
?>
